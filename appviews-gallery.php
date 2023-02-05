<?php

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Photo Gallery";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["views"]["sub"]["gallery"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs[$page_nav["views"]["title"]] = "";
		include("inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">

		<div class="row hidden-mobile">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<h1 class="page-title txt-color-blueDark">
					<i class="fa-fw fa fa-picture-o"></i> 
					Gallery <span>>
					Smart Responsive gallery </span></h1>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-align-right">
				<div class="page-title">
					<a href="javascript:void(0);" class="btn btn-default">Upload</a>
					<a href="javascript:void(0);" class="btn btn-default">Load Library</a>
				</div>
			</div>
		</div>

		<!-- row -->
		<div class="row">

			<!-- SuperBox -->
			<div class="superbox col-sm-12">
				<div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-1.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-1.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Miller Cine" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-2.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-2.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Bridge of Edgen" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-3.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-3.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Lines of Friendship" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-4.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-4.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="My new car!" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-5.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-5.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Study Time" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-6.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-6.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="San Francisco Bridge"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-7.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-7.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="New Styla"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-8.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-8.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Cristpta"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-9.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-9.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Cristine Dine"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-10.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-10.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Mosaic Clock"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-11.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-11.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Elegance"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-12.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-12.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="China Town"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-13.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-13.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Sky Diving"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-14.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-14.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Country Music"  class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-15.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-15.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="You are late!" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-16.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-16.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Royal Bengle Tiger" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-17.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-17.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Snowpine" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-18.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-18.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Hop Jop Mop" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-19.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-19.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Party Girls" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-20.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-20.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Dragon Fly" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-21.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-21.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Kinds Road" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-22.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-22.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Tokyo" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-23.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-23.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Rome" class="superbox-img">
				</div><!--
				--><div class="superbox-list">
					<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-thumb-24.jpg" data-img="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-24.jpg" alt="My first photoshop layer mask on a high end PSD template theme" title="Traning" class="superbox-img">
				</div>
				<div class="superbox-float"></div>
			</div>
			<!-- /SuperBox -->
			
			<div class="superbox-show" style="height:300px; display: none"></div>

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

<!-- PAGE RELATED PLUGIN(S) -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/superbox/superbox.min.js"></script>


<script type="text/javascript">

	$(document).ready(function() {
		// PAGE RELATED SCRIPTS
		$('.superbox').SuperBox();

	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>