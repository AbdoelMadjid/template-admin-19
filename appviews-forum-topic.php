<?php

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Forum Topic";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["views"]["sub"]["forum"]["sub"]["topic"]["active"] = true;
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
								<th colspan="2"><a href="appviews-forum.php"> Projects </a> > Business Requirement Docs</th>
								<th class="text-center hidden-xs hidden-sm" style="width: 100px;">Topics</th>
								<th class="text-center hidden-xs hidden-sm" style="width: 100px;">Posts</th>
								<th class="hidden-xs hidden-sm" style="width: 200px;">Last Post</th>
							</tr>
						</thead>
						<tbody>
							
							<!-- TR -->
							<tr class="warning">
								<td class="text-center" style="width: 40px;"><i class="glyphicon glyphicon-pushpin fa-2x text-danger"></i></td>
								<td>
									<h4><a href="appviews-forum-post.php">
										Welcome message
									</a>
										<small><a href="appviews-profile.php">John Doe</a> on <em>January 1, 2014</em></small>
									</h4>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">431</a>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">1342</a>
								</td>
								<td class="hidden-xs hidden-sm">by 
									<a href="javascript:void(0);">John Doe</a>
									<br>
									<small><i>January 1, 2014</i></small>
								</td>
							</tr>
							<!-- end TR -->
							
							<!-- TR -->
							<tr class="warning">
								<td class="text-center" style="width: 40px;"><i class="glyphicon glyphicon-pushpin fa-2x text-danger"></i></td>
								<td>
									<h4><a href="appviews-forum-post.php">
										Latest Updates
									</a>
										<small><a href="appviews-profile.php">John Doe</a> on <em>January 1, 2014</em></small>
									</h4>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">431</a>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">1342</a>
								</td>
								<td class="hidden-xs hidden-sm">by 
									<a href="javascript:void(0);">John Doe</a>
									<br>
									<small><i>January 1, 2014</i></small>
								</td>
							</tr>
							<!-- end TR -->
							
							<!-- TR -->
							<tr>
								<td colspan="2">
									<h4><a href="appviews-forum-post.php">
										Nam quam nunc blandit vel
									</a>
										<small><a href="appviews-profile.php">John Doe</a> on <em>January 1, 2014</em></small>
									</h4>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">431</a>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">1342</a>
								</td>
								<td class="hidden-xs hidden-sm">by 
									<a href="javascript:void(0);">John Doe</a>
									<br>
									<small><i>January 1, 2014</i></small>
								</td>
							</tr>
							<!-- end TR -->
							
							<!-- TR -->
							<tr>
								<td colspan="2">
									<h4><a href="appviews-forum-post.php">
										Maecenas nec odio et ante tincidun
									</a>
										<small><a href="appviews-profile.php">John Doe</a> on <em>January 1, 2014</em></small>
									</h4>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">431</a>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">1342</a>
								</td>
								<td class="hidden-xs hidden-sm">by 
									<a href="javascript:void(0);">John Doe</a>
									<br>
									<small><i>January 1, 2014</i></small>
								</td>
							</tr>
							<!-- end TR -->
		
							<!-- TR -->
							<tr>
								<td colspan="2">
									<h4><a href="appviews-forum-post.php">
										Donec sodales sagittis magna
									</a>
										<small><a href="appviews-profile.php">John Doe</a> on <em>January 1, 2014</em></small>
									</h4>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">431</a>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">1342</a>
								</td>
								<td class="hidden-xs hidden-sm">by 
									<a href="javascript:void(0);">John Doe</a>
									<br>
									<small><i>January 1, 2014</i></small>
								</td>
							</tr>
							<!-- end TR -->
		
							<!-- TR -->
							<tr>
								<td colspan="2">
									<h4><a href="appviews-forum-post.php">
										Sed consequat, leo eget bibendum sodales
									</a>
										<small><a href="appviews-profile.php">John Doe</a> on <em>January 1, 2014</em></small>
									</h4>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">431</a>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">1342</a>
								</td>
								<td class="hidden-xs hidden-sm">by 
									<a href="javascript:void(0);">John Doe</a>
									<br>
									<small><i>January 1, 2014</i></small>
								</td>
							</tr>
							<!-- end TR -->
		
							<!-- TR -->
							<tr>
								<td colspan="2">
									<h4><a href="appviews-forum-post.php">
										Consectetuer adipiscing elit
									</a>
										<small><a href="appviews-profile.php">John Doe</a> on <em>January 1, 2014</em></small>
									</h4>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">431</a>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">1342</a>
								</td>
								<td class="hidden-xs hidden-sm">by 
									<a href="javascript:void(0);">John Doe</a>
									<br>
									<small><i>January 1, 2014</i></small>
								</td>
							</tr>
							<!-- end TR -->
		
							<!-- TR -->
							<tr class="locked">
								<td colspan="2">
									<h4><a href="appviews-forum-post.php">
										This is a locked topic!
									</a>
										<small><a href="appviews-profile.php">John Doe</a> on <em>January 1, 2014</em></small>
									</h4>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">431</a>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">1342</a>
								</td>
								<td class="hidden-xs hidden-sm">by 
									<a href="javascript:void(0);">John Doe</a>
									<br>
									<small><i>January 1, 2014</i></small>
								</td>
							</tr>
							<!-- end TR -->
		
							<!-- TR -->
							<tr class="closed">
								<td colspan="2">
									<h4><a href="appviews-forum-post.php">
										This is a closed topic!
									</a>
										<small><a href="javascript:void(0);">John Doe</a> on <em>January 1, 2014</em></small>
									</h4>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">431</a>
								</td>
								<td class="text-center hidden-xs hidden-sm">
									<a href="javascript:void(0);">1342</a>
								</td>
								<td class="hidden-xs hidden-sm">by 
									<a href="javascript:void(0);">John Doe</a>
									<br>
									<small><i>January 1, 2014</i></small>
								</td>
							</tr>
							<!-- end TR -->									
							
						</tbody>
					</table>
		
					<div class="text-center">
		                <ul class="pagination pagination-sm">
		                    <li class="disabled"><a href="javascript:void(0);">Prev</a></li>
		                    <li class="active"><a href="javascript:void(0);">1</a></li>
		                    <li><a href="javascript:void(0);">2</a></li>
		                    <li><a href="javascript:void(0);">3</a></li>
		                    <li><a href="javascript:void(0);">...</a></li>
		                    <li><a href="javascript:void(0);">99</a></li>
		                    <li><a href="javascript:void(0);">Next</a></li>
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