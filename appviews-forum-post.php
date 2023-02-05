<?php

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Forum Post";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["views"]["sub"]["forum"]["sub"]["post"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs["App Views"] = "";
		$breadcrumbs["Forum Layout"] = APP_URL."/appviews-forum.php";
		$breadcrumbs["Forum Topic"] = APP_URL."/appviews-forum-topic.php";
		include("inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">

		<!-- Bread crumb is created dynamically -->
		<!-- row -->
		<div class="row">

			<!-- col -->
			<div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">
				<h1 class="page-title txt-color-blueDark"><!-- PAGE HEADER --><i class="fa-fw fa fa-file-o"></i> Other Pages <span>>
					Forum Layout </span></h1>
			</div>
			<!-- end col -->

			<!-- right side of the page with the sparkline graphs -->
			<!-- col -->
			<div class="col-xs-12 col-sm-9 col-md-8 col-lg-8">
				<!-- sparks -->
				<ul id="sparks">
					<li class="sparks-info">
						<h5> My Income <span class="txt-color-blue">$47,171</span></h5>
						<div class="sparkline txt-color-blue hidden-mobile">
							1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
						</div>
					</li>
					<li class="sparks-info">
						<h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up" title="Increased"></i>&nbsp;45%</span></h5>
						<div class="sparkline txt-color-purple hidden-mobile">
							110,150,300,130,400,240,220,310,220,300, 270, 210
						</div>
					</li>
					<li class="sparks-info">
						<h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
						<div class="sparkline txt-color-greenDark hidden-mobile">
							110,150,300,130,400,240,220,310,220,300, 270, 210
						</div>
					</li>
				</ul>
				<!-- end sparks -->
			</div>
			<!-- end col -->

		</div>
		<!-- end row -->

		<!-- row -->
		<div class="row">

			<div class="col-sm-12">

				<div class="well">

					<table class="table table-striped table-forum">
						<thead>
							<tr>
								<th colspan="2"><a href="<?php echo APP_URL; ?>/appviews-forum.php"> Projects </a> > <a href="<?php echo APP_URL; ?>/appviews-forum-topic.php">Business Requirement Docs </a> > Nam quam nunc blandit vel </th>
							</tr>
						</thead>
						<tbody>
							<!-- Post -->
							<tr>
								<td class="text-center"><a href="<?php echo APP_URL; ?>/appviews-profile.php"><img alt="" src="<?php echo ASSETS_URL; ?>/img/flags/us.png"> &nbsp; <strong>John Doe</strong></a></td>
								<td>on <em>Jan 1, 2014 - 12:00am</em></td>
							</tr>
							<tr>
								<td class="text-center" style="width: 12%;">
								<div class="push-bit">
									<a href="<?php echo APP_URL; ?>/appviews-profile.php"> <img src="<?php echo ASSETS_URL; ?>/img/avatars/sunny.png" width="50" alt="avatar" class="online"> </a>
								</div><small>473 Posts</small></td>
								<td>
								<p>

									Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
								</p><h5>Forecast Pie</h5><span class="sparkline display-inline margin-bottom-10" data-sparkline-type="pie" data-sparkline-offset="90" data-sparkline-piesize="150px"> 33,20,10 </span>
								<p>
									Fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viv.
								</p><em>- John Doe
								<br>
								CEO, SmartAdmin</em></td>
							</tr>
							<!-- end Post -->

							<!-- Post -->
							<tr>
								<td class="text-center"><a href="<?php echo APP_URL; ?>/appviews-profile.php"><img alt="" src="<?php echo ASSETS_URL; ?>/img/flags/es.png"> &nbsp; <strong>Sadi Orlaf</strong></a></td>
								<td>on <em>Jan 1, 2014 - 12:00am</em></td>
							</tr>
							<tr>
								<td class="text-center" style="width: 12%;">
								<div class="push-bit">
									<a href="<?php echo APP_URL; ?>/appviews-profile.php"> <img src="<?php echo ASSETS_URL; ?>/img/avatars/5.png" width="50" alt="avatar" class="offline"> </a>
								</div><small>473 Posts</small></td>
								<td>
								<p>

									Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
								</p><em>- Sadi Orlaf
								<br>
								Executive, SmartAdmin</em>
								<div class="forum-attachment">
									2 attachment(s) — <a href="javascript:void(0);"> Download all attachments</a>
									<ul class="list-inline margin-top-10">
										<li class="well well-sm padding-5">
											<strong>rocketlaunch.jpg</strong>
											<br>
											400 kb
											<br>
											<a href="javascript:void(0);"> Download</a> | <a href="javascript:void(0);"> View</a>
										</li>
										<li class="well well-sm padding-5">
											<strong>budget.xsl</strong>
											<br>
											400 kb
											<br>
											<a href="javascript:void(0);"> Download</a> | <a href="javascript:void(0);"> Share</a>
										</li>
									</ul>
								</div></td>
							</tr>
							<!-- end Post -->

							<!-- Post -->
							<tr>
								<td class="text-center"><a href="<?php echo APP_URL; ?>/appviews-profile.php"><img alt="" src="<?php echo ASSETS_URL; ?>/img/flags/us.png"> &nbsp; <strong>Me</strong></a></td>
								<td><em>Today</em></td>
							</tr>
							<tr>
								<td class="text-center" style="width: 12%;">
								<div class="push-bit">
									<a href="<?php echo APP_URL; ?>/appviews-profile.php"> <img src="<?php echo ASSETS_URL; ?>/img/avatars/sunny.png" width="50" alt="avatar" class="online"> </a>
								</div><small>473 Posts</small></td>
								<td><div id="forumPost"></div>
									
								<button class="btn btn-primary margin-top-10">
									Post
								</button>
								<button class="btn btn-success margin-top-10">
									Save for later
								</button></td>
							</tr>
							<!-- end Post -->

						</tbody>
					</table>

					<div class="text-center">
						<ul class="pagination pagination-sm">
							<li class="disabled">
								<a href="javascript:void(0);">Prev</a>
							</li>
							<li class="active">
								<a href="javascript:void(0);">1</a>
							</li>
							<li>
								<a href="javascript:void(0);">2</a>
							</li>
							<li>
								<a href="javascript:void(0);">3</a>
							</li>
							<li>
								<a href="javascript:void(0);">...</a>
							</li>
							<li>
								<a href="javascript:void(0);">99</a>
							</li>
							<li>
								<a href="javascript:void(0);">Next</a>
							</li>
						</ul>
					</div>

				</div>
			</div>

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

<!-- PAGE RELATED PLUGIN(S)-->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/summernote/summernote.min.js"></script>

<script type="text/javascript">
	// DO NOT REMOVE : GLOBAL FUNCTIONS!

	$(document).ready(function() {

		// PAGE RELATED SCRIPTS

		$('#forumPost').summernote({
			height : 180,
			focus : false,
			tabsize : 2
		});
		
	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>