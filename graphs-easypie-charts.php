<?php

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Blank Page";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["graphs"]["sub"]["easypie"]["active"] = true;
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


		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark">
					<i class="fa fa-bar-chart-o fa-fw "></i> 
						Graph 
					<span>> 
						Inline Charts
					</span>
				</h1>
			</div>
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
				<ul id="sparks" class="">
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
			</div>
		</div>
		
		<!-- row -->
		<div class="row">
		
			<div class="col-sm-12">
				
				<div class="well">
					<h1>Easy <span class="semi-bold">Pie Charts</span> <small>Simplified for faster production</small></h1>
					<p>Easy Pie Charts gives you a nice animation twist to your pie charts - they are also dynamic, which will make it a really nice ajax based live charts for your project</p>
					<p class="note">&lt;div class=&quot;easy-pie-chart txt-color-blue easyPieChart&quot; data-percent=&quot;36&quot; data-size=&quot;180&quot;&gt; data-pie-size=&quot;50&quot;&gt;
								&lt;span class=&quot;percent percent-sign txt-color-blue font-xl semi-bold&quot;&gt;36&lt;/span&gt;
							&lt;/div&gt;</p>
					<ul class="list-inline">
						<li>&nbsp;&nbsp;&nbsp;
							<div class="easy-pie-chart txt-color-red easyPieChart" data-percent="50" data-size="180" data-pie-size="50">
								<span class="percent percent-sign txt-color-red font-xl semi-bold">49</span>
							</div>
							&nbsp;&nbsp;&nbsp;
						</li>
						<li>&nbsp;&nbsp;&nbsp;
							<div class="easy-pie-chart txt-color-blue easyPieChart" data-percent="36" data-pie-size="180">
								<span class="percent percent-sign txt-color-blue font-xl semi-bold">36</span>
							</div>
							&nbsp;&nbsp;&nbsp;
						</li>
						<li>&nbsp;&nbsp;&nbsp;
							<div class="easy-pie-chart txt-color-pinkDark easyPieChart" data-percent="46" data-pie-size="160">
								<span class="percent percent-sign txt-color-pinkDark font-lg semi-bold">46</span>
							</div>
							&nbsp;&nbsp;&nbsp;
						</li>
						<li>&nbsp;&nbsp;&nbsp;
							<div class="easy-pie-chart txt-color-greenLight easyPieChart" data-percent="56" data-pie-size="110">
								<span class="percent percent-sign txt-color-greenLight font-md">56</span>
							</div>
							&nbsp;&nbsp;&nbsp;
						</li>
						<li>&nbsp;&nbsp;&nbsp;
							<div class="easy-pie-chart txt-color-orange easyPieChart" data-percent="66" data-pie-size="60">
								<span class="percent percent-sign txt-color-orange">66</span>
							</div>
							&nbsp;&nbsp;&nbsp;
						</li>
						<li>&nbsp;&nbsp;&nbsp;
							<div class="easy-pie-chart txt-color-darken easyPieChart" data-percent="76" data-pie-size="45">
								<span class="percent percent-sign font-sm">76</span>
							</div>
							&nbsp;&nbsp;&nbsp;
						</li>
						<li>&nbsp;&nbsp;&nbsp;
							<div class="easy-pie-chart txt-color-blue easyPieChart" data-percent="86" data-pie-size="35">
								<span class="percent percent-sign font-xs">86</span>
							</div>
							&nbsp;&nbsp;&nbsp;
						</li>
					</ul>
		
				</div>
		
			</div>	
		</div>
		
		<!-- end row -->
		
		<!-- row -->
		
		<div class="row">
		
		
		</div>
		
		<!-- end row -->



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

<!-- PAGE RELATED PLUGIN(S) 
<script src="<?php echo ASSETS_URL; ?>/js/plugin/YOURJS.js"></script>-->

<script>

	$(document).ready(function() {
		/* DO NOT REMOVE : GLOBAL FUNCTIONS!
		 *
		 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
		 *
		 * // activate tooltips
		 * $("[rel=tooltip]").tooltip();
		 *
		 * // activate popovers
		 * $("[rel=popover]").popover();
		 *
		 * // activate popovers with hover states
		 * $("[rel=popover-hover]").popover({ trigger: "hover" });
		 *
		 * // activate inline charts
		 * runAllCharts();
		 *
		 * // setup widgets
		 * setup_widgets_desktop();
		 *
		 * // run form elements
		 * runAllForms();
		 *
		 ********************************
		 *
		 * pageSetUp() is needed whenever you load a page.
		 * It initializes and checks for all basic elements of the page
		 * and makes rendering easier.
		 *
		 */
		
		 pageSetUp();
		 
		/*
		 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
		 * eg alert("my home function");
		 * 
		 * var pagefunction = function() {
		 *   ...
		 * }
		 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
		 * 
		 * TO LOAD A SCRIPT:
		 * var pagefunction = function (){ 
		 *  loadScript(".../plugin.js", run_after_loaded);	
		 * }
		 * 
		 * OR
		 * 
		 * loadScript(".../plugin.js", run_after_loaded);
		 */
	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>