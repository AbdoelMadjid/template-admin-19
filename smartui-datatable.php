<?php

use \SmartUI\UI;
use \SmartUI\Util as SmartUtil;
use \Common\HTMLIndent;

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Datatable PHP Class";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["smartui"]["sub"]["datatable"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs[$page_nav["smartui"]["title"]] = "";
		include("inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">
		<section id="widget-grid" class="">
			<div class="row">
				<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php
						$data = json_decode(file_get_contents(APP_URL."/data/data.json"));


						$dt = $_ui->create_datatable($data, array("in_widget" => true));
						$dt->options("checkboxes", true);
						$dt->options("row_details", '
							<div class="alert alert-warning fade in">
								<i class="fa-fw fa fa-warning"></i>
								<strong>Warning</strong> The ID for {{Name}} is #{{ID}}.
							</div>'
						);

						$dt->cell = array(
							"Company" => array(
								//you can even pass a closure for the URL property
								"url" => function($row, $value) {
									if ($value == "Pharetra Nam Industries")
										return "http://facebook.com";
									else
										return "http://maps.google.com/maps?z=12&t=m&q=".$row->City."+".$row->Zip;
								},
								"icon" => "fa-external-link txt-color-red",
								"callback" => function($row, $html_value) { // if you want to get the configured HTML cell, use this key
									$some_number = rand(1, 15);
									$color = $some_number > 10 ? 'red' : 'greenLight';
									return $html_value.' <span class="badge bg-color-'.$color.'">'.$some_number.'</span>';
								}
							),
							//pass closure function and return a dynamic content
							"Name" => function($row, $value) {
								switch ($value) {
									case "Tanek":
										return '<span class="label label-info">'.$value.'</span>';
										break;
									case "Alana":
										return $value.' <span class="badge bg-color-greenLight">5</span>';
										break;
									case "Donna":
										return $value.' <span class="label label-success">active</span>';
										break;
									default:
										return $value;
								}
							},
							"Phone" => '{{Phone}} <span class="label label-success">active</span>'
						);

						//$dt->options('static', true);

						// set a cell using jQuery setup
						$dt->cell("Zip", function($row, $value) {
							return '<i class="fa fa-map-marker fa-md"></i> '.$value;
						}, function($dt) { // callback
							//$dt->cell("Zip", "");
						});

						// change the column name
						$dt->col("ID", "ID #");

						// set hidden columns
						$dt->hidden(array("ID", "Date")); // or $dt->col("ID", false)->col("Date", false) -- same as renaming but with "false" as value

						// hide a column
						//$dt->hide("City", true);

						// configure rows
						// available properties for row
						// class, attr, hidden, detail, checkbox
						$dt->row(2, ""); // empty a row
						$dt->row(3, "danger"); // set class property or $dt->row(5, array("class" => 'txt-color-red'))

						// reset all row settings
						//$dt->row(null);

						// get number of rows
						$rows = $dt->rows();
						for ($i = 4;$i <= 20; $i++) {
							$dt->row($i, function($row) {
								if (strpos($row->Name, 'e') !== false) {
									return array("detail" => false, "checkbox" => false, "class" => "success");
								} else if (strpos($row->Name, 'n') !== false) {
									return array("detail" => false, "content" => '');
								}
							});

						}

						// set table's id
						$dt->id = "test-table-id";
						$dt->sort('Name', 'desc');

						//configure the widget of this table by getting the widget property
						//learn more about SmartUI:Widget class at widgets-php.php
						$widget = $dt->widget;
						$widget->header("icon", 'fa fa-exclamation')->options("editbutton", false);
							//->body("class", ''); // you want padding? remove the widget's class
						$widget->id = "widget-id";

						$cities_htm = '';
						$arr_cities = array("Fogo", "Machelen", "Norman", "Kapolei");
						foreach ($arr_cities as $city) {
							$cities_htm .= '
								<li>
									<a href="#">
										<div class="checkbox">
											<label>
											  <input type="checkbox" value="'.$city.'" class="checkbox style-0" data-status-filter="'.$city.'" value="'.$city.'">
											  <span>'.$city.'</span>
											</label>
										</div>
									</a>
						        </li>';
						}

						// add a filter dropdown
						$widget->header("toolbar", array('
							<div class="btn-group">
								<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
									Filter Cities <span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									'.$cities_htm.'
								</ul>
							</div>'
						));

						// print it!
						$html = $dt->print_html(true); // return html

						// configure JS
						// setup additional datatable js properties
						$dt->js("properties", array(
							'fnCreatedRow' => 'function( nRow, aData, iDataIndex ) {
				                var cell = $("td:eq(7)", nRow);
				                var city = aData[7];
				                if ( city == "Abbotsford" || city == "Baranello" ) {
				                    cell.html(city + \' <span class="label label-info">great city</span>\');
				                }
				            }',
				            'sDom' => "\"<'dt-toolbar'<'col-xs-6'f><'col-xs-6 hidden-xs'B>r>\"+
									\"t\"+
									\"<'dt-toolbar-footer'<'col-xs-6'i><'col-xs-6'p>>\"",
					        'buttons' => "[
						        { extend: 'copy', className: 'btn btn-default' },
						        { extend: 'csv', className: 'btn btn-default' },
						        { extend: 'excel', className: 'btn btn-default' },
						        { extend: 'pdf', className: 'btn btn-default' },
						        { extend: 'print', className: 'btn btn-default' },
						    ]",
						    'autoWidth' => 'true'
						));

						$dt->js("custom",
							'function getTypeFilters() {
					            var aSearchTypes = [];
					            $("input[data-status-filter]").each(function(index, value) {
					                if ($(this).prop("checked")) {
					                    var city = $(this).val();
					                    aSearchTypes.push(city);
					                }
					            })
					            return aSearchTypes;
					        }

					        $("input[data-status-filter]").on("click", function() {
					            var filters = getTypeFilters();
					            '.$dt->js("oTable").'.fnFilter(filters.join("|"), 7, true, false);
					        })'
						);

						// print JS content
						$js = $dt->print_js(true);
						$run_time = $_ui->run_time(false);

						echo $html;

					?>
				</article>
				<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php

						$options = array(
							"editbutton" => false,
							"colorbutton" => false,
							"collapsed" => true
						);

						// print html output
						$hb = new HTMLIndent();
						$html_snippet = SmartUtil::clean_html_string($hb->indent($html), false);
						$contents = array(
							"body" => '<pre class="prettyprint linenums">'.$html_snippet.'</pre>',
							"header" => array(
								"icon" => 'fa fa-code',
								"title" => '<h2>HTML Output (Run Time: '.$run_time.')</h2>'
							)
						);

						$_ui->create_widget($options, $contents)->color('pink')->print_html();

						// print js

						$js_snippet = SmartUtil::clean_html_string($js);
						$js_contents = array(
							"body" => '<pre class="prettyprint linenums">'.$js_snippet.'</pre>',
							"header" => array(
								"icon" => 'fa fa-code',
								"title" => '<h2>JS Output</h2>'
							)
						);
						$_ui->create_widget($options, $js_contents)->color('green')->print_html();

					?>
				</article>
			</div>
			<div class="row">

				<div class="col-sm-12">
					<div class="well">
						<?php

							$md = file_get_contents("docs/smartui/datatable.md");
							$parsedown = new Parsedown();
							$doc = $parsedown->parse($md);
							echo str_replace('<pre', '<pre class="prettyprint linenums"', $doc);

						?>
					</div>

				</div>

			</div>
		</section>
	</div>
	<!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->
<!-- ==========================CONTENT ENDS HERE ========================== -->

<?php
	//include required scripts
	include("inc/scripts.php");
?>

<!-- PAGE RELATED PLUGIN(S)
<script src="..."></script>-->

<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/dataTables.bootstrap.min.js"></script>

<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>

<script>
	<?php
		echo $js;
	?>
</script>

<script>

	$(document).ready(function() {
		// PAGE RELATED SCRIPTS
	})

</script>

<?php
	//include footer
	include("inc/footer.php");
?>