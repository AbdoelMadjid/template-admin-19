<?php

namespace SmartUI\Components;
use \SmartUI\UI;
use \SmartUI\Util;

class Widget extends UI {

	private $_options_map = array(
		"editbutton" => true,
		"colorbutton" => true,
		"editbutton" => true,
		"togglebutton" => true,
		"deletebutton" => true,
		"fullscreenbutton" => true,
		"custombutton" => true,
		"collapsed" => false,
		"sortable" => true,
		"refreshbutton" => false
	);

	private $_structure = array(
		"class" => "",
		"color" => "",
		"id" => "",
		"attr" => array(),
		"options" => array(),
		"header" => array(),
		"footer" => "",
		"footers" => array(),
		"body" => array()
	);

	public function __construct($options = array(), $contents = array()) {
		$this->_init_structure($options, $contents);
	}

	private function _init_structure($user_options, $user_contents) {
		$this->_structure = Util::array_to_object($this->_structure);

		$user_contents_map = array("header" => array(), "body" => "", "color" => "");
		$new_user_contents = Util::set_array_prop_def($user_contents_map, $user_contents);

		$this->_structure->options = Util::set_array_prop_def($this->_options_map, $user_options);

		$body_structure = array(
			"editbox" => "",
			"content" => "",
			"class" => "",
			"toolbar" => null,
			"footer" => null
		);
		$this->_structure->body = Util::set_array_prop_def($body_structure, $new_user_contents["body"], "content");

		$header_structure = array(
			"icon" => null,
			"class" => "",
			"title" => "",
			"toolbar" => array()
		);
		$this->_structure->header = Util::set_array_prop_def($header_structure, $new_user_contents["header"], "title");

		$this->_structure->color = $new_user_contents["color"];
		$this->_structure->id = Util::create_id(true);
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

	public function __get($name) {
		if (isset($this->_structure->{$name})) {
            return $this->_structure->{$name};
        }
        parent::err('Undefined structure property: '.$name);
        return null;
	}

	public function print_html($return = false) {
		

		$structure = $this->_structure;

		$attr = Util::get_property_value(
			$structure->attr,
			array(
				"if_closure" => function($attr) { return Util::run_callback($attr, array($this)); }, //if user passes a closure, pass those optional parameters that they can use
				"if_other" => function($attr) { return $attr; }, //just directly return the string for this type of structure item
				"if_array" => function($attr) {
					$props = array_map(function($attr, $attr_value) { //build attribute values from passed array
						return $attr.' = "'.$attr_value.'"';
					}, array_keys($attr), $attr);

					return implode(' ', $props);
				}
			)
		);

		$options_map = $this->_options_map;

		$options = Util::get_property_value(
			$structure->options,
			array(
				"if_closure" => function($options) { return Util::run_callback($options, array($this)); },
				"if_other" => function($options) { return $options; },
				"if_array" => function($options) use ($options_map) {
					$props = array_map(function($option, $value) use ($options_map) {
						if (is_bool($value)) {
							$str_val = var_export($value, true);
							if (isset($options_map[$option])) {
								if ($value !== $options_map[$option]) {
									return 'data-widget-'.$option.'="'.$str_val.'"';
								} else return '';
							} else return 'data-widget-'.$option.'="'.$str_val.'"';
						}
						return 'data-widget-'.$option.'="'.$value.'"';
					}, array_keys($options), $options);

					return implode(' ', $props);
				}
			)
		);

		$body = Util::get_property_value(
			$structure->body,
			array(
				"if_closure" => function($body) { return Util::run_callback($body, array($this)); },
				"if_other" => function($body) {
					if ($body === false || is_null($body)) return null;
					return '<div class="widget-body">'.$body.'</div>';
				},
				"if_array" => function($body) {
					$editbox = '';
					if (isset($body["editbox"])) {
						$editbox = '<div class="jarviswidget-editbox">';
						$editbox .= $body["editbox"];
						$editbox .= '</div>';
					}

					$content = '';
					if (isset($body['content'])) {
						if (Util::is_closure($body['content'])) {
							$content = Util::run_callback($body['content'], array($this));
						} else {
							$content = $body['content'];
						}
					}


					$class = 'widget-body';
					if (isset($body["class"])) {
						if (is_array($body["class"])) {
							$class .= ' '.implode(' ', $body["class"]);
						} else {
							$class .= ' '.$body["class"];
						}
					}

					$toolbar = '';
					if (isset($body["toolbar"])) {
						$toolbar = '<div class="widget-body-toolbar">';
						$toolbar .= $body["toolbar"];
						$toolbar .= '</div>';
					}

					$footer = '';
					if (isset($body['footer'])) {
						$footer = '<div class="widget-footer">';
						$footer .= $body['footer'];
						$footer .= '</div>';
					}

					$result = $editbox;
					$result .= '<div class="'.$class.'">';
					$result .= $toolbar;
					$result .= $content;
					$result .= $footer;
					$result .= '</div>';

					return $result;
				}
			)
		);

		$header = Util::get_property_value(
			$structure->header,
			array(
				"if_closure" => function($header) use ($body) { return Util::run_callback($body, array($this)); },
				"if_other" => function($body) { return $body; },
				"if_array" => function($body) {
					$toolbar_htm = '';

					if (isset($body["icon"]) && $body['icon']) {
						$toolbar_htm .= '<span class="widget-icon"> <i class="'.parent::$icon_source.' '.$body["icon"].'"></i> </span>';
					}

					if (isset($body["toolbar"])) {
						$toolbar_htm .= Util::get_property_value($body["toolbar"], array(
							"if_closure" => function($toolbar) { return Util::run_callback($toolbar, array($this, $toolbar)); },
							"if_other" => function($toolbar) { return $toolbar; },
							"if_array" => function($toolbar) {
								$toolbar_props_htm = array();
								foreach ($toolbar as $toolbar_prop) {
									$id = '';
									$class = 'widget-toolbar';
									$attrs = array();
									$content = '';
									if (is_string($toolbar_prop)) {
										$content = $toolbar_prop;
									} else if (is_array($toolbar_prop)) {
										$id = isset($toolbar_prop["id"]) ? $toolbar_prop["id"] : '';
										$class .= isset($toolbar_prop["class"]) ? ' '.$toolbar_prop["class"] : '';
										if (isset($toolbar_prop["attr"])) {
											if (is_array($toolbar_prop["attr"])) {
												foreach ($toolbar_prop["attr"] as $attr => $value) {
													$attrs[] = $attr.'="'.$value.'"';
												}

											} else {
												$attrs[] = $toolbar_prop["attr"];
											}
										}
										$content = isset($toolbar_prop["content"]) ? $toolbar_prop["content"] : '';
									}

									$htm = '<div class="'.trim($class).'" id="'.$id.'" '.implode(' ', $attrs).'>';
									$htm .= $content;
									$htm .= '</div>';

									$toolbar_props_htm[] = $htm;
								}

								return implode(' ', $toolbar_props_htm);
							}
						));
					}

					if (isset($body["title"])) {
						$toolbar_htm .= $body["title"];
					} else
						$toolbar_htm .= '<h2><code>SmartUI::Widget->header[content] not defined</code></h2>';

					return $toolbar_htm;
				}
			)
		);

		$footer_htm = '';
		if ($structure->footer) $structure->footers[] = $structure->footer;
		foreach ($structure->footers as $footer) {
			$footer_prop = array(
				'content' => '',
				'class' => '',
				'attr' => array()
			);
			$new_footer_prop = Util::get_clean_structure($footer_prop, $footer, array($this), 'content');
			$footer_attribues = array_map(function($attr, $value) {
				return $attr.'="'.$value.'"';
			}, array_keys($new_footer_prop['attr']), $new_footer_prop['attr']);
			if ($new_footer_prop['class']) $footer_attribues[] = 'class="'.$new_footer_prop['class'].'"';

			$footer_htm .= $new_footer_prop['content'] ? '<footer '.implode(' ', $footer_attribues).'>'.$new_footer_prop['content'].'</footer>' : '';
		}

		$class = Util::get_property_value($structure->class, array(
			"if_closure" => function($class) { return Util::run_callback($class, array($this)); },
			"if_array" => function($class) {
				return implode(' ', $class);
			}
		));

		$color = Util::get_property_value(
			$structure->color,
			array(
				"if_closure" => function($color) { return Util::run_callback($color, array($this)); },
				"if_other" => function($color) { return $color ? 'jarviswidget-color-'.$color : ''; },
				"if_array" => function($color) {
					parent::err('SmartUI::Widget::color requires string');
				}
			)
		);

		$id = Util::get_property_value(
			$structure->id,
			array(
				"if_closure" => function($id) { return Util::run_callback($id, array($this)); },
				"if_array" => function($id) {
					parent::err('SmartUI::Widget::id requires string.');
					return '';
				}
			)
		);

		$id = $id ? 'id="'.$id.'"' : '';
		$main_classes = array('jarviswidget', $color, $class);
		$main_attributes = array('class="'.trim(implode(' ', $main_classes)).'"', $id, $options, $attr);

		$result = '<div '.trim(implode(' ', $main_attributes)).'>';
		$result .= '<header>'.$header.'</header>';
		$result .= is_null($body) ? '' : '<div>'.$body.'</div>';
		$result .= $footer_htm;
		$result .= '</div>';

		if ($return) return $result;
		else echo $result;
	}
}

?>