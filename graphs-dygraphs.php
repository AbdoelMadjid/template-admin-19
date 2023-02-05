<?php

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Dygraphs";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["graphs"]["sub"]["dygraphs"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->

		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<?php
				//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
				//$breadcrumbs["New Crumb"] => "http://url.com"
				$breadcrumbs[$page_nav["graphs"]["title"]] = "";
				include("inc/ribbon.php");
			?>
			<!-- MAIN CONTENT -->
			<div id="content">
				<!-- row -->
				<div class="row">
					
					<!-- col -->
					<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
						<h1 class="page-title txt-color-blueDark">
							
							<!-- PAGE HEADER -->
							<i class="fa fa-fw fa-bar-chart-o"></i> 
								Graphs 
							<span>>  
								Dygraphs
							</span>
						</h1>
					</div>
					<!-- end col -->
					
					<!-- right side of the page with the sparkline graphs -->
					<!-- col -->
					<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
						<!-- sparks -->
						<ul id="sparks">
							<li class="sparks-info">
								<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
								<div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
									1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
								</div>
							</li>
							<li class="sparks-info">
								<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" data-rel="bootstrap-tooltip" title="Increased"></i>&nbsp;45%</span></h5>
								<div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
									110,150,300,130,400,240,220,310,220,300, 270, 210
								</div>
							</li>
							<li class="sparks-info">
								<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
								<div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
									110,150,300,130,400,240,220,310,220,300, 270, 210
								</div>
							</li>
						</ul>
						<!-- end sparks -->
					</div>
					<!-- end col -->
					
				</div>
				<!-- end row -->

				<!--
					The ID "widget-grid" will start to initialize all widgets below 
					You do not need to use widgets if you dont want to. Simply remove 
					the <section></section> and you can use wells or panels instead 
					-->

				<!-- widget grid -->
				<section id="widget-grid" class="">

					<!-- row -->
					<div class="row">
						
						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<div class="alert alert-info">
								
								<div class="row">
									
									<div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
								<h3 class="no-margin">Dygraphs is a fast, flexible open source JavaScript charting library.</h3>
								
								
								
							      <h5>Features</h5>
							      <ul>
							        <li>Handles <strong>huge data sets</strong>: dygraphs plots millions of points without getting bogged down.
							        </li><li><strong>Interactive out of the box</strong>: zoom, pan and mouseover are on by default.
							        </li><li>Strong support for <strong>error bars</strong> / confidence intervals.
							        </li><li><strong>Highly customizable</strong>: using options and custom callbacks, you can make dygraphs do almost anything.
							        </li><li>dygraphs is <strong>highly compatible</strong>: it works in all major browsers (including IE8). You can even <strong>pinch to zoom</strong> on mobile/tablet devices!
							        </li><li>There's an <strong>active community</strong> developing and supporting dygraphs.</li>
							      </ul>
									</div>
									
									<div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
										<h4>JavaScript Example</h4>
						<pre class="prettyprint margin-top-10">new Dygraph(div, "ny-vs-sf.txt", {
  legend: 'always',
  title: 'NYC vs. SF',
  showRoller: true,
  rollPeriod: 14,
  customBars: true,
  ylabel: 'Temperature (F)',
});</pre>
									</div>
									
								</div>
								

							

							</div>
							
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-0">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<span class="widget-icon"> <i class="fa fa-bar-chart-o"></i> </span>
									<h2>No roll period </h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">	
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										
										<!-- this is what the user will see -->
										<div id="noroll" style="width:100%; height:300px;"></div>

									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->
							
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-1">
								<!-- widget options:
									usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
									
									data-widget-colorbutton="false"	
									data-widget-editbutton="false"
									data-widget-togglebutton="false"
									data-widget-deletebutton="false"
									data-widget-fullscreenbutton="false"
									data-widget-custombutton="false"
									data-widget-collapsed="true" 
									data-widget-sortable="false"
									
								-->
								<header>
									<span class="widget-icon"> <i class="fa fa-bar-chart-o"></i> </span>
									<h2>No roll (timestamp)</h2>				
									
								</header>

								<!-- widget div-->
								<div>
									
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
										<input class="form-control" type="text">	
									</div>
									<!-- end widget edit box -->
									
									<!-- widget content -->
									<div class="widget-body">
										<p class="alert alert-success">Roll period of 14 timesteps, custom range selector height and plot color.</p>
										<!-- this is what the user will see -->
										<div id="roll14" style="width:100%; height:300px;"></div>

									</div>
									<!-- end widget content -->
									
								</div>
								<!-- end widget div -->
								
							</div>
							<!-- end widget -->

						</article>
						<!-- WIDGET END -->
						
					</div>

					<!-- end row -->

					<!-- row -->

					<div class="row">

						<!-- a blank row to get started -->
						<div class="col-sm-12">
							<!-- your contents here -->
						</div>
							
					</div>

					<!-- end row -->

				</section>
				<!-- end widget grid -->

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->

<!-- ==========================CONTENT ENDS HERE ========================== -->

<?php
	// include page footer
	include("inc/footer.php");
?>

<?php 
	//include required scripts
	include("inc/scripts.php"); 
?>

		<!-- PAGE RELATED PLUGIN(S) -->
		<script src="<?php echo ASSETS_URL; ?>/js/plugin/dygraphs/demo-data.min.js"></script>
		<!-- DYGRAPH -->
		<script src="<?php echo ASSETS_URL; ?>/js/plugin/dygraphs/dygraph-combined.min.js"></script>
		<script type="text/javascript">
			
			$(document).ready(function() {

				/*
				 * PAGE RELATED SCRIPTS
				 */
				
				g1 = new Dygraph(document.getElementById("noroll"), data_temp, {
					customBars : true,
					title : 'Daily Temperatures in New York vs. San Francisco',
					ylabel : 'Temperature (F)',
					legend : 'always',
					labelsDivStyles : {
						'textAlign' : 'right'
					},
					showRangeSelector : true
				});

				g2 = new Dygraph(document.getElementById("roll14"), data_temp, {
					rollPeriod : 14,
					showRoller : true,
					customBars : true,
					ylabel : 'Temperature (F)',
					legend : 'always',
					labelsDivStyles : {
						'textAlign' : 'right'
					},
					showRangeSelector : true,
					rangeSelectorHeight : 30,
					rangeSelectorPlotStrokeColor : 'yellow',
					rangeSelectorPlotFillColor : 'lightyellow'
				});
			
			})
		</script>
<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>