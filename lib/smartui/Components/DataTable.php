<?php

namespace SmartUI\Components;
use \SmartUI\UI;
use \SmartUI\Util;

class DataTable extends UI {

	private $_options_map = array(
		"in_widget" => true,
		"row_details" => false,
		"row_details_opened" => false,
		"row_detail_icons" => array('closed' => 'chevron-right', 'opened' => 'chevron-down'),
		"checkboxes" => false,
		"static" => false,
		"paginate" => true,
		"columns" => true,
		"table" => true,
		"striped" => true,
		"bordered" => true,
		"hover" => true,
		"condensed" => false,
		"forum" => false,
		"default_col" => "No Data"
	);

	private $_structure = array(
		"cell" => array(),
		"col" => array(),
		"options" => array(),
		"data" => array(),
		"widget" => null,
		"each" => array(),
		"id" => "",
		"row" => array(),
		"hidden" => array(),
		"hide" => array(),
		"js" => array(),
		"sort" => array(),
		"toolbar" => array(),
		"class" => array()
	);

	private $_uid = '';

	private $_data = array();

	private $_cells_map = array();
	private $_cols_map = array();
	private $_hide_map = array();

	public function __construct($data, $options = array(), $widget_title = '<h2>DataTable Result Set</h2>', $widget_icon = 'table') {
		$this->_init_structure($data, $options, $widget_title, $widget_icon);
	}

	private function _init_structure($data, $user_options, $widget_title, $widget_icon) {
		$this->_structure = Util::array_to_object($this->_structure);
		$this->_structure->data = $data;
		$this->_structure->options = Util::set_array_prop_def($this->_options_map, $user_options);
		$uid = Util::create_id(true);
		$this->_structure->id = $uid; // set the id as default id
		$this->_uid = $uid;
		$this->_structure->widget = new Widget();
		$this->_structure->widget
			->header('title', $widget_title)
			->body("class", "no-padding")
			->body("editbox", '<input class="form-control" type="text">
                        <span class="note"><i class="'.parent::$icon_source.' '.parent::$icon_source.'-check text-success"></i> Change title to update and save instantly!</span>');

		if ($widget_icon) $this->_structure->widget->header('icon', parent::$icon_source.'-'.$widget_icon);

		if (!$this->_structure->data) {
			$col_list = $this->_structure->options["default_col"] ? array($this->_structure->options["default_col"]) : array();
		} else {
			$col_list = array_keys(is_object($data[0]) ? get_object_vars($data[0]) : $data[0]);
		}

		$cols = array_combine($col_list, $col_list);
		$cells = array_fill_keys($col_list, array());
		$hide = array_fill_keys($col_list, false);

		$this->_cells_map = $cells;
		$this->_cols_map = $cols;
		$this->_hide_map = $hide;

		$this->_structure->col = $cols;
		$this->_structure->cell = $cells;
		$this->_structure->hide = $hide;
		$this->_structure->row = array_fill(1, count($data) + 1, array());

		$this->_structure->js = array(
			"properties" => array(),
			"oTable" => 'oTable_'.$this->_uid,
			"custom" => ""
		);
	}

	public function rows() {
		return count($this->_structure->row);
	}

	public function __get($name) {
		if (isset($this->_structure->{$name})) {
            return $this->_structure->{$name};
        }
        parent::err('Undefined structure property: '.$name);
        return null;
	}

	public function __set($name, $value) {
		if (isset($this->_structure->{$name})) {
            $this->_structure->{$name} = $value;
            return;
        }
		parent::err('Undefined structure property: '.$name);
	}

	public function __call($name, $args) {
		return parent::_call($this, $this->_structure, $name, $args);
	}


	public function is_with_details() {
		return isset($this->_structure->options["row_details"]) && $this->_structure->options["row_details"];
	}

	public function is_with_checkboxes() {
		return isset($this->_structure->options["checkboxes"]) && $this->_structure->options["checkboxes"];
	}

	public function print_js($return = false, $jquery_enclosed = true) {
		$structure = $this->_structure;
		$table_id = $structure->id;

		$dtable_js = '';

		if ($structure->options["static"]) {
			if ($structure->options['row_details_opened']) {
				$row_detail_code = Util::is_closure($structure->options['row_details_opened']) ? $structure->options['row_details_opened']($table_id) : $structure->options['row_details_opened'];
			} else {
				$row_detail_code = 'nTr.after("<tr class=\"details\"><td class=\"details\" colspan='.count($structure->col).'>" + value + "</td></tr>");';
			}
			$dtable_js = '
				function fnFormatDetails (nTr ) {
					var aData = nTr.find("td").map(function() {
	                    return $(this).html();
	                }).get();

                    '.($this->is_with_details() ? $this->_get_detail_content($structure->options["row_details"], array_keys($structure->col)) : '').'
                }

				$("#'.$table_id.' a i[data-toggle=\'row-detail\']").on("click", function (e) {
                   	e.preventDefault();

                   	var nTr = $(this).parents("tr"),
                   		details = nTr.nextUntil(":not(.details)", ".details");

                   	if (details.length > 0) {
                   		/* This row is already open - close it */
						$(this).removeClass("'.parent::$icon_source.'-'.$this->options['row_detail_icons']['opened'].'").addClass("'.parent::$icon_source.'-'.$this->options['row_detail_icons']['closed'].'");
                        this.title = "Show Details";

                        details.remove();
                   	} else {
                   		/* Open this row */
                   		$(this).removeClass("'.parent::$icon_source.'-'.$this->options['row_detail_icons']['closed'].'").addClass("'.parent::$icon_source.'-'.$this->options['row_detail_icons']['opened'].'");
                        this.title = "Hide Details";
						var value = fnFormatDetails(nTr);
                        '.$row_detail_code.'
                   	}
                });
			';
		} else {
			$otable_var = $structure->js["oTable"];

	        $dtable_js = '
                $(".desktop[data-rel=\'tooltip\']").tooltip();
                $(".phone[data-rel=\'tooltip\']").tooltip({placement: tooltip_placement});
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest("table")
                    var off1 = $parent.offset();
                    var w1 = $parent.width();

                    var off2 = $source.offset();
                    var w2 = $source.width();

                    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return "right";
                    return "left";
                }

                $("#'.$table_id.' a i[data-toggle=\'row-detail\']").on("click", function () {
                    var nTr = $(this).parents("tr")[0];
                    if ( '.$otable_var.'.fnIsOpen(nTr) )
                    {
                        /* This row is already open - close it */
                        $(this).removeClass("'.parent::$icon_source.'-'.$this->options['row_detail_icons']['opened'].'").addClass("'.parent::$icon_source.'-'.$this->options['row_detail_icons']['closed'].'");
                        this.title = "Show Details";
                        '.$otable_var.'.fnClose( nTr );
                    }
                    else
                    {
                        /* Open this row */
                        $(this).removeClass("'.parent::$icon_source.'-'.$this->options['row_detail_icons']['closed'].'").addClass("'.parent::$icon_source.'-'.$this->options['row_detail_icons']['opened'].'");
                        this.title = "Hide Details";
                        '.$otable_var.'.fnOpen( nTr, fnFormatDetails('.$otable_var.', nTr), "details" );
                    }
                    return false;
                });
                var '.$otable_var.' = $("#'.$table_id.'").dataTable({
                    '.(!isset($structure->js['properties']) || !$structure->js['properties'] ? '' :
                    	implode(', ', array_map(function($key, $js) {
                    		return "'$key' : $js";
                    	}, array_keys($structure->js['properties']), $structure->js['properties'])).',').'
                    '.(!$structure->options["paginate"] ? '"bPaginate": false, "bInfo": false,' : '').'
                    aoColumns: [
                        '.($this->is_with_details() ? '{"bSortable": false},' : '').'
                        '.($this->is_with_checkboxes() ? '{"bSortable": false},' : '').'
                        '.implode(', ', array_map(function($col) use ($structure) {
							if (isset($structure->sort[$col]) && $structure->sort[$col] === false) return '{ "bSortable": false }';
							else return 'null';
						}, array_keys($structure->col))).'
                    ],
                    aaSorting: ['.implode(', ', array_filter(array_map(function($col_index, $col) use ($structure) {
                    	$col_index = $this->is_with_details() ? $col_index + 1 : $col_index;
				        $col_index = $this->is_with_checkboxes() ? $col_index + 1 : $col_index;
				        if (isset($structure->sort[$col]) && $structure->sort[$col]) {
				            $sorting = $structure->sort[$col];
				            return "[$col_index, '$sorting']";
				        } else return null;
                    }, array_keys(array_keys($structure->col)), array_keys($structure->col)))).'],

                });

                // remove pagination div row ? TO-DO

                $("#'.$structure->id.'_cols li label input[type=checkbox]").on("click", function() {
                    fnShowHideCol($(this).data("column-toggle"), $(this).prop("checked"));
                });

                function fnShowHideCol(iCol, bVis) {
                    /* Get the DataTables object again - this is not a recreation, just a get of the object */
                    //var bVis = '.$otable_var.'.fnSettings().aoColumns[iCol].bVisible;
                    '.$otable_var.'.fnSetColumnVis(iCol, bVis);
                }

                function fnFormatDetails ( '.$otable_var.', nTr ) {
                    var aData = '.$otable_var.'.fnGetData( nTr );
                    '.($this->is_with_details() ? $this->_get_detail_content($structure->options["row_details"], array_keys($structure->col)) : '').'
                }

                $("#'.$table_id.' th input:checkbox").on("click" , function(){
                    var that = this;
                    $(this).closest("table").find("tr > td input:checkbox").each(function(){
                        this.checked = that.checked;
                        //$(this).closest("tr").toggleClass("selected");
                    });
                });

                '.(isset($structure->toolbar) ? implode("\n", array_map(function($toolbar) {
                	return $toolbar['js'];
                }, $structure->toolbar)) : "" ).'

                '.(isset($structure->js["custom"]) ? $structure->js['custom'] : '');
		}

        if ($jquery_enclosed) {
        	$result = '$(function() {
        		'.$dtable_js.'
        	});';
        } else $result = $dtable_js;

        if ($return) return $result;
        else echo $result;
	}

	private function _get_detail_content($detail, $cols) {
        $result = "";
        if (Util::is_closure($detail)) { // improve this TO-DO
            $cols_list = new \stdClass;
            foreach ($cols as $col)
                $cols_list->{$col} = '{'.$col.'}';

            $str = $detail($cols_list);
            $result = 'return \''.$this->_replace_detail_codes($str, $cols).'\';';

        } else if (is_array($detail)) {
            if (isset($detail["custom"])) {
                $result = $this->_replace_detail_codes($detail['code'], $cols, true);
            }
        } else $result = 'return \''.$this->_replace_detail_codes($detail, $cols).'\';';

        return $result;
    }

    private function _replace_detail_codes($str, $cols, $custom_code = false) {
        preg_match_all("/\{([^{{}}]+)\}/", $str, $matched_cols);
        $col_replace = array();
        $col_search = array();
        foreach($matched_cols[1] as $matched_col) {
            $arr_col_index = array_keys($cols, $matched_col);
            if ($arr_col_index) {
                $col_index = self::is_with_details() ? $arr_col_index[0] + 1 : $arr_col_index[0];
                $col_index = self::is_with_checkboxes() ? $col_index + 1 : $col_index;
                $col_replace[] = $custom_code ? 'aData['.$col_index.']' : '\'+aData['.$col_index.']+\'';
                $col_search[] = "/{{".$matched_col."}}/";
            }
        }
        $result = preg_replace($col_search, $col_replace, $str);
        return preg_replace('/\s+/', ' ', $result); //remove white spaces
    }

	public function print_html($return = false) {


		$structure = $this->_structure;

		$rows = Util::get_property_value($structure->data, array(
			"if_array" => function($data) use ($structure) {
				$html_rows = array();

				foreach ($data as $row_index => $row_data) {

					$row_prop = array(
						"hidden" => false,
						"checkbox" => array(),
						"detail" => true,
						"class" => "",
						"attr" => array(),
						"content" => true
					);

					if (isset($structure->each['row']) && $structure->each['row']) {
						$structure->row[$row_index + 1] = Util::set_closure_prop_def($row_prop, $structure->each['row'], array($row_data, $row_index), 'class');
					}

					$new_row_prop = $row_prop;

					if (isset($structure->row[$row_index + 1])) {
						$row_prop_value = $structure->row[$row_index + 1];
						if ($row_prop_value === false) {
							$new_row_prop["hidden"] = true;
						} else if ($row_prop_value === "") {
							$new_row_prop["content"] = "";
						} else {
							$new_row_prop = Util::get_clean_structure($row_prop, $row_prop_value, array($row_data, $row_index), 'class');
						}
					}

					$rows_html = '';
					foreach ($row_data as $col_name => $cell_value) {
						$cell_classes = array();
						$cell_attrs = array();
						if ((isset($structure->hide[$col_name]) && $structure->hide[$col_name] === true) || in_array($col_name, $structure->hidden)) {
            				$cell_classes[] = 'hidden';
            			}

						if (isset($new_row_prop["content"]) && !$new_row_prop["content"]) {
							$rows_html .= '<td class="'.implode(' ', $cell_classes).'"></td>';
							continue;
						}
						$cell_html = $cell_value;

            			if (isset($structure->cell[$col_name])) {
            				$cell_prop = $structure->cell[$col_name];
            				$cell_html = Util::get_property_value($cell_prop, array(
            					"if_closure" => function($prop) use ($row_data, $row_index, $cell_value) {
            						return Util::run_callback($prop, array($row_data, $cell_value, $row_index));
            					},
            					"if_array" => function($cell_prop) use ($row_data, $row_index, $cell_value, &$cell_classes, &$cell_attrs) {
            						//icon, content, color, url[href, title, tooltip, attr]
            						$cell_html = $cell_value;

				                    //content
				                    if (isset($cell_prop["content"])) {
				                        $cell_html = Util::get_property_value($cell_prop["content"], array(
				                        	"if_closure" => function($content) use ($row_data, $row_index, $cell_value) {
				                        		$content_value = Util::replace_col_codes(Util::run_callback($content, array($row_data, $cell_value, $row_index)), $row_data);

				                        		return $content_value;

				                        	},
				                        	"if_other" => function($content) use ($row_data, $cell_html) {
				                        		$cell_html = Util::replace_col_codes($content, $row_data);
				                        		return $cell_html;
				                        	}
				                        ));
				                    }

				                    //url
				                    if (isset($cell_prop["url"])) {
				                    	$map_url_prop = array(
											"href" => "#",
											"target" => "_self",
											"title" => "",
											"attr" => ""
										);

				                    	$map_url_prop = Util::get_property_value($cell_prop["url"], array(
				                    		"if_closure" => function($prop) use ($row_data, $row_index, $cell_value, $map_url_prop) {
				                    			$url = Util::run_callback($prop, array($row_data, $cell_value, $row_index));
				                    			$map_url_prop["href"] = $url;

				                    			return $map_url_prop;
				                    		},
				                    		"if_array" => function($url_prop) use ($row_data, $cell_html, $map_url_prop) {
				                    			$map_url_prop["target"] = isset($url_prop['target']) ? $url_prop['target'] : "_self";
					                            $map_url_prop["href"] = isset($url_prop['href']) ? Util::replace_col_codes($url_prop['href'], $row_data, true) : '#';
					                            $map_url_prop["attr"] = isset($url_prop['attr']) && $url_prop['attr'] ? $url_prop['attr'] : '';
					                            $map_url_prop["title"] = isset($url_prop['title']) ? Util::replace_col_codes($url_prop['title'], $row_data, true) : '';
					                            return $map_url_prop;

				                    		},
				                    		"if_other" => function($url_prop) use ($row_data, $cell_html, $map_url_prop) {
				                    			$map_url_prop["href"] = Util::replace_col_codes($url_prop, Util::object_to_array($row_data), true);
				                    			return $map_url_prop;
				                    		}
				                    	));

										$cell_html = '<a href="'.$map_url_prop["href"].'" target="'.$map_url_prop["target"].'" '.$map_url_prop["attr"].' title="'.$map_url_prop["title"].'">'.$cell_html.'</a>';
				                    }

				                    //icon
				                    if (isset($cell_prop["icon"])) {
				                        $cell_html = Util::get_property_value($cell_prop["icon"], array(
				                        	"if_closure" => function($icon) use ($row_data, $row_index, $cell_value, $cell_html) {
				                        		$icon_value = Util::run_callback($prop, array($row_data, $cell_value, $row_index));
				                        		return '<i class="'.parent::$icon_source.' '.$icon_value.'"></i> '.$cell_html;
				                        	},
				                        	"if_other" => function($icon) use ($cell_html) {
				                        		return '<i class="'.parent::$icon_source.' '.$icon.'"></i> '.$cell_html;
				                        	}
				                        ));
				                    }

				                    //color
				                    if (isset($cell_prop["color"])) {
				                        $cell_html = Util::get_property_value($cell_prop["color"], array(
				                        	"if_closure" => function($color) use ($row_data, $row_index, $cell_value, $cell_html) {
				                        		$color_value = Util::run_callback($color, array($row_data, $cell_value, $row_index));
				                        		return '<span class="'.$color_value.'">'.$cell_html.'</span>';
				                        	},
				                        	"if_other" => function($color) use ($cell_html) {
				                        		return '<span class="'.$color.'">'.$cell_html.'</span>';
				                        	}
				                        ));
				                    }

				                    //class
				                    if (isset($cell_prop["class"])) {
				                    	 if (is_array($cell_prop["class"])) {
				                    	 	$cell_classes = array_merge($cell_classes, $cell_prop["class"]);
				                    	 } else $cell_classes[] = $cell_prop["class"];
				                    }

				                    if (isset($cell_prop["attr"])) {
				                    	if (is_array($cell_prop["attr"])) {
											foreach ($cell_prop["attr"] as $attr => $value) {
												$cell_attrs[] = $attr.'="'.$value.'"';
											}
				                    	} else $cell_attrs[] = $cell_prop["attr"];
				                    }

				                    //callback
				                    if (isset($cell_prop["callback"]) && Util::is_closure($cell_prop["callback"])) {
				                    	$new_cell_html = Util::run_callback($cell_prop["callback"], array($row_data, $cell_html, $row_index));
				                    	if (trim($new_cell_html) != "") {
				                    		$cell_html = $new_cell_html;
				                    	}
				                    }

				                    return $cell_html;
            					},
            					"if_other" => function($cell_prop) use ($row_data) {
            						return Util::replace_col_codes($cell_prop, $row_data);
            					}
            				));
            			}

            			$rows_html .= '<td'.($cell_classes ? ' class="'.implode(' ', $cell_classes).'"' : '').($cell_attrs ? ' '.implode(' ', $cell_attrs) : '').'> '.$cell_html.' </td>';
					}


					$row_classes = array();
					if ($new_row_prop["class"]) $row_classes[] = $new_row_prop["class"];
					if ($new_row_prop["hidden"] === true) $row_classes[] = 'hidden';

					$attrs = array();
					if (is_array($new_row_prop["attr"])) {
						foreach ($new_row_prop["attr"] as $attr => $value) {
							$attrs[] = $attr.'="'.$value.'"';
						}
					} else {
						$attrs[] = $new_row_prop["attr"];
					}
					$attr = $attrs ? ' '.implode(' ', $attrs) : '';

					$row_class = $row_classes ? ' class="'.implode(' ', $row_classes).'"' : '';

					$row_checkbox = '';
					$row_details = '';

					if (isset($structure->options["checkboxes"]) && $structure->options["checkboxes"]) {

						if ($new_row_prop["checkbox"] === false)
							$checkbox_content = '';
						else {
							// global checkboxes configuration
							$option = $structure->options["checkboxes"];
							$checkbox_prop = array(
								"name" => $structure->id."_checkbox",
								"id" => "",
								"checked" => false,
								"value" => "on"
							);

							$new_checkbox_prop = Util::get_clean_structure($checkbox_prop, $option, array($this, $row_data, $row_index), 'name');

							// override global checkbox settings if configured
							$this_row_checkbox_prop = Util::get_clean_structure($new_checkbox_prop, $new_row_prop['checkbox'], array($this, $row_data, $row_index), 'name');

							$id = $this_row_checkbox_prop["id"] ? 'id="'.$this_row_checkbox_prop["id"].'"' : '';
							$value = '';

							if (Util::is_closure($this_row_checkbox_prop['value']))
								$value = Util::run_callback($this_row_checkbox_prop['value'], array($row_data));
							else $value = $this_row_checkbox_prop['value'];

							$value = Util::replace_col_codes($value, $row_data);

							$checkbox_content = '<label class="checkbox-inline">
		                          <input type="checkbox" '.($this_row_checkbox_prop["checked"] ? 'checked' : '' ).' class="checkbox style-0" name="'.$this_row_checkbox_prop["name"].'[]" '.$id.' value="'.$value.'" />
		                          <span></span>
		                        </label>';

						}

						$row_checkbox = '<td class="center table-checkbox" width="20px"> '.$checkbox_content.' </td>';
					}

					if (isset($structure->options["row_details"]) && $structure->options["row_details"]) {
						$option = $structure->options["row_details"];

						$detail_prop = array(
							"id" => "",
							"icon" => parent::$icon_source."-".$this->options["row_detail_icons"]["closed"],
							"title" => 'Show Details'
						);

						$new_detail_prop = Util::get_clean_structure($detail_prop, $option, array($this, $row_data, $row_index), 'icon');
						$id = $new_detail_prop["id"] ? 'id="'.$new_detail_prop["id"].'"' : '';

						$content = '<a href="#" '.$id.'>
									<i class="'.parent::$icon_source.' '.$detail_prop['icon'].' '.parent::$icon_source.'" data-toggle="row-detail" title="'.$detail_prop['title'].'"></i>
								</a>';
						if ($new_row_prop["detail"] === false)
							$content = '';

						$row_details =
							'<td class="center" width="20px"> '.$content.' </td>';
					}

					$html_rows[] = '<tr'.$row_class.$attr.'>'.$row_details.$row_checkbox.$rows_html.'</tr>';
				}
				return implode('', $html_rows);
			},
			"if_closure" => function($data) {
				parent::err('SmartUI::DataTable::data requires an array of objects/array');
				return '';
			},
			"if_other" => function($data) {
				parent::err('SmartUI::DataTable::data requires an array of objects/array');
				return '';
			}
		));

		if ($structure->options['columns']) {
			$cols = Util::get_property_value($structure->col, array(
				"if_array" => function($cols) use ($structure) {
					$html_col_list = array();

					foreach ($cols as $col_name => $col_value) {

						if (is_null($col_value) || $col_value === false) continue;;
						$col_value_prop = array(
							"title" => $col_name,
							"class" => "",
							"attr" => array(),
							"icon" => "",
							"hidden" => (isset($structure->hide[$col_name]) && $structure->hide[$col_name] === true) || in_array($col_name, $structure->hidden)
						);

						$new_col_value = Util::get_clean_structure($col_value_prop, $col_value, array($this, $cols), 'title');
						if ($new_col_value['attr']) {
							if (is_array($new_col_value["attr"])) {
								foreach ($new_col_value["attr"] as $attr => $value) {
									$attrs[] = $attr.'="'.$value.'"';
								}

							} else {
								$attrs[] = $new_col_value["attr"];
							}
							$new_col_value["attr"] = $attrs;
						}

						$classes = array();
						if ($new_col_value['class'])
							$classes[] = $new_col_value['class'];

						if ($new_col_value['hidden'] === true)
							$classes[] = "hidden";

						$class = $classes ? 'class="'.implode(' ', $classes).'"' : '';

						$main_attributes = array($class, implode(' ', $new_col_value['attr']));
						$htm_attrs = trim(implode(' ', $main_attributes));
						$htm_attrs = $htm_attrs ? ' '.$htm_attrs : '';

						$html_col_list[] = '<th'.$htm_attrs.'>'.$new_col_value['icon'].' '.$new_col_value['title'].' </th>';
					}


					$html_cols = implode('', $html_col_list);

					$checkbox_header = '';
					$detail_header = '';

					if (isset($structure->options["checkboxes"]) && ($structure->options["checkboxes"])) {
						$checkbox_header = '
							<th class="center table-checkbox" width="20px">
								<label class="checkbox-inline">
									<input type="checkbox" class="checkbox style-0">
									<span></span>
								</label>
							</th>';
					}

					if (isset($structure->options["row_details"]) && ($structure->options["row_details"])) {
						$detail_header = '
							<th class="center" width="20px"></th>';
					}

					return '<tr>'.$detail_header.$checkbox_header.$html_cols.'</tr>';
				}
			));
		} else $cols = '';

		$id = Util::get_property_value(
			$structure->id,
			array(
				"if_closure" => function($prop) { return Util::run_callback($prop, array($this)); },
				"if_other" => function($prop) { return $prop; },
				"if_array" => function($prop) use ($structure) {
					parent::err('SmartUI::Widget::id requires string.');
					return $structure->id;
				}
			)
		);

		$id = $id ? 'id="'.$id.'"' : '';

		$classes = array();
		if ($structure->options['table']) $classes[] = 'table';
		if ($structure->options['striped']) $classes[] = 'table-striped';
		if ($structure->options['bordered']) $classes[] = 'table-bordered';
		if ($structure->options['hover']) $classes[] = 'table-hover';
		if ($structure->options['condensed']) $classes[] = 'table-condensed';
		if ($structure->options['forum']) $classes[] = 'table-forum';

		if ($structure->class) {
			$classes[] = is_array($structure->class) ? implode(' ', $structure->class) : $structure->class;
		}

		$table_html = '<table '.$id.' class="'.implode(' ', $classes).'">';
		$table_html .= '<thead>';
		$table_html .= $cols;
		$table_html .= '</thead>';
		$table_html .= '<tbody>';
		$table_html .= $rows;
		$table_html .= '</tbody>';
		$table_html .= '</table>';

		$result = $table_html;

		if (isset($structure->options["in_widget"]) && $structure->options["in_widget"]) {
			// no need for widget's toolbar for datatable 1.10.x
			// if (!$structure->options["static"])
			// 	$structure->widget->body('toolbar', '');

			$structure->widget->body("content", $table_html);
			$result = $structure->widget->print_html(true);
		}

		if ($return) return $result;
		else echo $result;

	}


}



?>