<?php

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "General";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["views"]["sub"]["forum"]["sub"]["general"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs["App Views"] = "";
		$breadcrumbs["Forum Layout"] = "";
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
								<th colspan="2">Introduction</th>
								<th class="text-center hidden-xs hidden-sm" style="width: 100px;">Topics</th>
								<th class="text-center hidden-xs hidden-sm" style="width: 100px;">Posts</th>
								<th class="hidden-xs hidden-sm" style="width: 200px;">Last Post</th>
							</tr>
						</thead>
						<tbody>

							<!-- TR -->
							<tr>
								<td class="text-center" style="width: 40px;"><i class="fa fa-globe fa-2x text-muted"></i></td>
								<td><h4><a href="appviews-forum-topic.php"> Hello, welcome to SmartAdmin Forum! </a><small>You can introduce yourself here</small></h4></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">431</a></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">1342</a></td>
								<td class="hidden-xs hidden-sm">by <a href="javascript:void(0);">John Doe</a>
								<br>
								<small><i>January 1, 2014</i></small></td>
							</tr>
							<!-- end TR -->

							<!-- TR -->
							<tr>
								<td class="text-center" style="width: 40px;"><i class="fa fa-microphone fa-2x text-muted"></i></td>
								<td><h4><a href="appviews-forum-topic.php"> News & Announcements </a><small>Latest news and reports</small></h4></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">431</a></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">1342</a></td>
								<td class="hidden-xs hidden-sm">by <a href="javascript:void(0);">John Doe</a>
								<br>
								<small><i>January 1, 2014</i></small></td>
							</tr>
							<!-- end TR -->

							<!-- TR -->
							<tr>
								<td class="text-center" style="width: 40px;"><i class="fa fa-pencil fa-2x text-muted"></i></td>
								<td><h4><a href="appviews-forum-topic.php"> Forum Rules </a><small>Please read carefully our forum rules before you post</small></h4></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">431</a></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">1342</a></td>
								<td class="hidden-xs hidden-sm">by <a href="javascript:void(0);">John Doe</a>
								<br>
								<small><i>January 1, 2014</i></small></td>
							</tr>
							<!-- end TR -->

						</tbody>
					</table>

					<table class="table table-striped table-forum">
						<thead>
							<tr>
								<th colspan="2">Projects</th>
								<th class="text-center hidden-xs hidden-sm" style="width: 100px;">Topics</th>
								<th class="text-center hidden-xs hidden-sm" style="width: 100px;">Posts</th>
								<th class="hidden-xs hidden-sm" style="width: 200px;">Last Post</th>
							</tr>
						</thead>
						<tbody>

							<!-- TR -->
							<tr>
								<td class="text-center" style="width: 40px;"><i class="fa fa-table fa-2x text-muted"></i></td>
								<td><h4><a href="appviews-forum-topic.php"> Business Requirement Docs </a><small>Latest BRD docs</small></h4></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">431</a></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">1342</a></td>
								<td class="hidden-xs hidden-sm">by <a href="javascript:void(0);">John Doe</a>
								<br>
								<small><i>January 1, 2014</i></small></td>
							</tr>
							<!-- end TR -->

							<!-- TR -->
							<tr>
								<td class="text-center" style="width: 40px;"><i class="fa fa-bar-chart-o fa-2x text-muted"></i></td>
								<td><h4><a href="appviews-forum-topic.php"> Project Discussions </a><small>Post all project related topics here</small></h4></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">431</a></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">1342</a></td>
								<td class="hidden-xs hidden-sm">by <a href="javascript:void(0);">John Doe</a>
								<br>
								<small><i>January 1, 2014</i></small></td>
							</tr>
							<!-- end TR -->

							<!-- TR -->
							<tr>
								<td class="text-center" style="width: 40px;"><i class="fa fa-user fa-2x text-muted"></i></td>
								<td><h4><a href="appviews-forum-topic.php"> Clients </a><small>Client forum posts</small></h4></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">431</a></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">1342</a></td>
								<td class="hidden-xs hidden-sm">by <a href="javascript:void(0);">John Doe</a>
								<br>
								<small><i>January 1, 2014</i></small></td>
							</tr>
							<!-- end TR -->

							<!-- TR -->
							<tr>
								<td class="text-center" style="width: 40px;"><i class="fa fa-dollar fa-2x text-muted"></i></td>
								<td><h4><a href="appviews-forum-topic.php"> Budget Meetings </a><small>Project budget discussions</small></h4></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">431</a></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">1342</a></td>
								<td class="hidden-xs hidden-sm">by <a href="javascript:void(0);">John Doe</a>
								<br>
								<small><i>January 1, 2014</i></small></td>
							</tr>
							<!-- end TR -->

						</tbody>
					</table>

					<table class="table table-striped table-forum">
						<thead>
							<tr>
								<th colspan="2">Support</th>
								<th class="text-center hidden-xs hidden-sm" style="width: 100px;">Topics</th>
								<th class="text-center hidden-xs hidden-sm" style="width: 100px;">Posts</th>
								<th class="hidden-xs hidden-sm" style="width: 200px;">Last Post</th>
							</tr>
						</thead>
						<tbody>

							<!-- TR -->
							<tr>
								<td class="text-center" style="width: 40px;"><i class="fa fa-book fa-2x text-muted"></i></td>
								<td><h4><a href="appviews-forum-topic.php"> How to... </a><small>Maecenas nec odio et</small></h4></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">431</a></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">1342</a></td>
								<td class="hidden-xs hidden-sm">by <a href="javascript:void(0);">John Doe</a>
								<br>
								<small><i>January 1, 2014</i></small></td>
							</tr>
							<!-- end TR -->

							<!-- TR -->
							<tr>
								<td class="text-center" style="width: 40px;"><i class="fa fa-question-circle fa-2x text-muted"></i></td>
								<td><h4><a href="appviews-forum-topic.php"> Questions and FAQs </a><small>Luctus pulvinar hendrerit id lorem</small></h4></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">431</a></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">1342</a></td>
								<td class="hidden-xs hidden-sm">by <a href="javascript:void(0);">John Doe</a>
								<br>
								<small><i>January 1, 2014</i></small></td>
							</tr>
							<!-- end TR -->

							<!-- TR -->
							<tr>
								<td class="text-center" style="width: 40px;"><i class="fa fa-user-md fa-2x text-muted"></i></td>
								<td><h4><a href="appviews-forum-topic.php"> User Guideline </a><small>Cras dapibus vivamus elementum semper nisi</small></h4></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">431</a></td>
								<td class="text-center hidden-xs hidden-sm"><a href="javascript:void(0);">1342</a></td>
								<td class="hidden-xs hidden-sm">by <a href="javascript:void(0);">John Doe</a>
								<br>
								<small><i>January 1, 2014</i></small></td>
							</tr>
							<!-- end TR -->

						</tbody>
					</table>

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

<!-- PAGE RELATED PLUGIN(S) 
<script src="..."></script>-->

<script>

	$(document).ready(function() {
		// PAGE RELATED SCRIPTS
	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>