<?php

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Tree View";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["ui_elements"]["sub"]["tree_view"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs[$page_nav["ui_elements"]["title"]] = "";
		include("inc/ribbon.php");
	?>

	<!-- MAIN CONTENT -->
	<div id="content">

		<div class="row">
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark"><i class="fa fa-desktop fa-fw "></i> 
					UI Elements 
					<span>>
					Tree View
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
		<!-- widget grid -->
		<section id="widget-grid" class="">
		
			<!-- row -->
			<div class="row">
		
				<!-- NEW WIDGET START -->
				<article class="col-sm-12 col-md-12 col-lg-6">
		
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget jarviswidget-color-orange" id="wid-id-0" data-widget-editbutton="false">
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
							<span class="widget-icon"> <i class="fa fa-lg fa-calendar"></i> </span>
							<h2>Organizing view </h2>
		
						</header>
		
						<!-- widget div-->
						<div>
		
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
		
							</div>
							<!-- end widget edit box -->
		
							<!-- widget content -->
							<div class="widget-body">
		
								<div class="widget-body-toolbar bg-color-white">
		
									<form class="form-inline" role="form">
		
										<div class="row">
		
											<div class="col-sm-12 col-md-10">
		
												<div class="form-group">
													<label class="sr-only">Task title</label>
													<input type="email" class="form-control input-sm" placeholder="My Task">
												</div>
												<div class="form-group">
													<label class="sr-only">Pick Week</label>
													<select class="form-control input-sm">
														<option>Week 1</option>
														<option>Week 2</option>
													</select>
												</div>
												<div class="form-group">
													<label class="sr-only">Days</label>
													<select class="form-control input-sm">
														<option>Monday</option>
														<option>Tuesday</option>
														<option>Wednesday</option>
														<option>Thursday</option>
														<option>Friday</option>
														<option>Saturday</option>
														<option>Sunday</option>
													</select>
												</div>
		
											</div>
		
											<div class="col-sm-12 col-md-2 text-align-right">
		
												<button type="submit" class="btn btn-warning btn-xs">
													<i class="fa fa-plus"></i> Add
												</button>
		
											</div>
		
										</div>
		
									</form>
		
								</div>
		
								<div class="tree">
									<ul>
										<li>
											<span><i class="fa fa-lg fa-calendar"></i> 2013, Week 2</span>
											<ul>
												<li>
													<span class="label label-success"><i class="fa fa-lg fa-plus-circle"></i> Monday, January 7: 8.00 hours</span>
													<ul>
														<li>
															<span><i class="fa fa-clock-o"></i> 8.00</span> &ndash; <a href="javascript:void(0);">Changed CSS to accomodate...</a>
														</li>
													</ul>
												</li>
												<li>
													<span class="label label-success"><i class="fa fa-lg fa-minus-circle"></i> Tuesday, January 8: 8.00 hours</span>
													<ul>
														<li>
															<span><i class="fa fa-clock-o"></i> 6.00</span> &ndash; <a href="javascript:void(0);">Altered code...</a>
														</li>
														<li>
															<span><i class="fa fa-clock-o"></i> 2.00</span> &ndash; <a href="javascript:void(0);">Simplified our approach to...</a>
														</li>
													</ul>
												</li>
												<li>
													<span class="label label-warning"><i class="fa fa-lg fa-minus-circle"></i> Wednesday, January 9: 6.00 hours</span>
													<ul>
														<li>
															<span><i class="fa fa-clock-o"></i> 3.00</span> &ndash; <a href="javascript:void(0);">Fixed bug caused by...</a>
														</li>
														<li>
															<span><i class="fa fa-clock-o"></i> 3.00</span> &ndash; <a href="javascript:void(0);">Comitting latest code to Git...</a>
														</li>
													</ul>
												</li>
												<li>
													<span class="label label-danger"><i class="fa fa-lg fa-minus-circle"></i> Wednesday, January 9: 4.00 hours</span>
													<ul>
														<li>
															<span><i class="fa fa-clock-o"></i> 2.00</span> &ndash; <a href="javascript:void(0);">Create component that...</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<span><i class="fa fa-lg fa-calendar"></i> 2013, Week 3</span>
											<ul>
												<li>
													<span class="label label-success"><i class="fa fa-lg fa-minus-circle"></i> Monday, January 14: 8.00 hours</span>
													<ul>
														<li>
															<span><i class="fa fa-clock-o"></i> 7.75</span> &ndash; <a href="javascript:void(0);">Writing documentation...</a>
														</li>
														<li>
															<span><i class="fa fa-clock-o"></i> 0.25</span> &ndash; <a href="javascript:void(0);">Reverting code back to...</a>
														</li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</div>
		
							</div>
							<!-- end widget content -->
		
						</div>
						<!-- end widget div -->
		
					</div>
					<!-- end widget -->
		
				</article>
				<!-- WIDGET END -->
		
				<!-- NEW WIDGET START -->
				<article class="col-sm-12 col-md-12 col-lg-6">
		
					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget jarviswidget-color-blue" id="wid-id-1" data-widget-editbutton="false">
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
							<span class="widget-icon"> <i class="fa fa-sitemap"></i> </span>
							<h2>Simple View </h2>
		
						</header>
		
						<!-- widget div-->
						<div>
		
							<!-- widget edit box -->
							<div class="jarviswidget-editbox">
								<!-- This area used as dropdown edit box -->
		
							</div>
							<!-- end widget edit box -->
		
							<!-- widget content -->
							<div class="widget-body">
		
								<div class="tree smart-form">
									<ul>
										<li>
											<span><i class="fa fa-lg fa-folder-open"></i> Parent</span>
											<ul>
												<li>
													<span><i class="fa fa-lg fa-plus-circle"></i> Administrators</span>
													<ul>
														<li style="display:none">
															<span> <label class="checkbox inline-block">
																	<input type="checkbox" name="checkbox-inline">
																	<i></i>Michael.Jackson</label> </span>
														</li>
														<li style="display:none">
															<span> <label class="checkbox inline-block">
																	<input type="checkbox" checked="checked" name="checkbox-inline">
																	<i></i>Sunny.Ahmed</label> </span>
														</li>
														<li style="display:none">
															<span> <label class="checkbox inline-block">
																	<input type="checkbox" checked="checked" name="checkbox-inline">
																	<i></i>Jackie.Chan</label> </span>
														</li>
													</ul>
												</li>
												<li>
													<span><i class="fa fa-lg fa-minus-circle"></i> Child</span>
													<ul>
														<li>
															<span><i class="icon-leaf"></i> Grand Child</span>
														</li>
														<li>
															<span><i class="icon-leaf"></i> Grand Child</span>
														</li>
														<li>
															<span><i class="fa fa-lg fa-plus-circle"></i> Grand Child</span>
															<ul>
																<li style="display:none">
																	<span><i class="fa fa-lg fa-plus-circle"></i> Great Grand Child</span>
																	<ul>
																		<li style="display:none">
																			<span><i class="icon-leaf"></i> Great great Grand Child</span>
																		</li>
																		<li style="display:none">
																			<span><i class="icon-leaf"></i> Great great Grand Child</span>
																		</li>
																	</ul>
																</li>
																<li style="display:none">
																	<span><i class="icon-leaf"></i> Great Grand Child</span>
																</li>
																<li style="display:none">
																	<span><i class="icon-leaf"></i> Great Grand Child</span>
																</li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<span><i class="fa fa-lg fa-folder-open"></i> Parent2</span>
											<ul>
												<li>
													<span><i class="icon-leaf"></i> Child</span>
												</li>
											</ul>
										</li>
									</ul>
								</div>
		
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

<!-- PAGE RELATED PLUGIN(S) 
<script src="..."></script>-->

<script type="text/javascript">
	
	$(document).ready(function() {
	
		$('.tree > ul').attr('role', 'tree').find('ul').attr('role', 'group');
		$('.tree').find('li:has(ul)').addClass('parent_li').attr('role', 'treeitem').find(' > span').attr('title', 'Collapse this branch').on('click', function(e) {
			var children = $(this).parent('li.parent_li').find(' > ul > li');
			if (children.is(':visible')) {
				children.hide('fast');
				$(this).attr('title', 'Expand this branch').find(' > i').removeClass().addClass('fa fa-lg fa-plus-circle');
			} else {
				children.show('fast');
				$(this).attr('title', 'Collapse this branch').find(' > i').removeClass().addClass('fa fa-lg fa-minus-circle');
			}
			e.stopPropagation();
		});			
	
	})

</script>

<?php 
	//include footer
	include("inc/footer.php"); 
?>