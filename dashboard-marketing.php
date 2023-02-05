<?php

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Marketing";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["dashboard"]["sub"]["marketing"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->

<!-- MAIN PANEL -->
<div id="main" role="main">

	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs[$page_nav["dashboard"]["title"]] = "";
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
					<i class="fa-fw fa fa-home"></i>
						Dashboard
					<span>>
						Marketing
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
				<article class="col-xs-12 col-sm-6">

					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1"
							data-widget-colorbutton="false"
							data-widget-editbutton="false"
							data-widget-togglebutton="false"
							data-widget-deletebutton="false"
							data-widget-custombutton="false"
							data-widget-collapsed="false"
							data-widget-sortable="false">
						<header>
							<span class="widget-icon"> <i class="fa fa-facebook txt-color-blue"></i> </span>
							<h2>Facebook overview</h2>

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
							<div class="widget-body no-padding">

								<!-- this is what the user will see -->
								<div class="row">
									<div class="col-sm-4 col-md-2 col-md-offset-1 text-center">
										<h3 class="margin-bottom-0">
											50
											<i class="fa fa-caret-down icon-color-bad"></i>
											<small class="icon-color-bad">6%</small>
											<br>
											<small class="font-xs"><sup><span class="badge bg-color-red">Reach</span></sup></small>
										</h3>
									</div>
									<div class="col-sm-4 col-md-2 text-center">
										<h3 class="margin-bottom-0">
											264
											<i class="fa fa-caret-up icon-color-good"></i>
											<small class="icon-color-good">9%</small>
											<br>
											<small class="font-xs"><sup><span class="badge bg-color-greenLight">Views</span></sup></small>
										</h3>
									</div>
									<div class="col-sm-4 col-md-2 text-center">
										<h3 class="margin-bottom-0">
											112
											<i class="fa fa-caret-down icon-color-bad"></i>
											<small class="icon-color-bad">4%</small>
											<br>
											<small class="font-xs"><sup><span class="badge">Enagaged</span></sup></small>
										</h3>
									</div>
									<div class="col-sm-4 col-md-2 text-center">
										<h3 class="margin-bottom-0">
											1430
											<br>
											<small class="font-xs"><sup><span class="badge bg-color-blue">Clicks</span></sup></small>
										</h3>
									</div>
									<div class="col-sm-4 col-md-2 text-center">
										<h3 class="margin-bottom-0">
											73
											<i class="fa fa-caret-down icon-color-bad"></i>
											<small class="icon-color-bad">12%</small>
											<br>
											<small class="font-xs"><sup><span class="badge bg-color-orange">Likes</span></sup></small>
										</h3>
									</div>


								</div>

								<hr class="margin-5">

								<div id="saleschart" class="chart"></div>

							</div>
							<!-- end widget content -->

						</div>
						<!-- end widget div -->

					</div>
					<!-- end widget -->

				</article>
				<!-- WIDGET END -->

				<!-- NEW WIDGET START -->
				<article class="col-xs-12 col-sm-6">

					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-2"
							data-widget-colorbutton="false"
							data-widget-editbutton="false"
							data-widget-togglebutton="false"
							data-widget-deletebutton="false"
							data-widget-fullscreenbutton="false"
							data-widget-custombutton="false"
							data-widget-collapsed="false"
							data-widget-sortable="false">
						<header>
							<span class="widget-icon"> <i class="fa fa-twitter txt-color-blueLight"></i> </span>
							<h2>Twitter Analytics</h2>

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
							<div class="widget-body no-padding">

								<!-- this is what the user will see -->
								<div class="row">
									<div class="col-sm-4 col-md-2 col-md-offset-1 text-center">
										<h3 class="margin-bottom-0">
											750
											<br>
											<small class="font-xs"><sup>Tweets</sup></small>
										</h3>
									</div>
									<div class="col-sm-4 col-md-2 text-center">
										<h3 class="margin-bottom-0">
											189
											<br>
											<small class="font-xs"><sup>Following</sup></small>
										</h3>
									</div>
									<div class="col-sm-4 col-md-2 text-center">
										<h3 class="margin-bottom-0">
											346
											<br>
											<small class="font-xs"><sup>Followers</sup></small>
										</h3>
									</div>
									<div class="col-sm-4 col-md-2 text-center">
										<h3 class="margin-bottom-0">
											50
											<br>
											<small class="font-xs"><sup>Listed</sup></small>
										</h3>
									</div>
									<div class="col-sm-4 col-md-2 text-center">
										<h3 class="margin-bottom-0">
											0
											<br>
											<small class="font-xs"><sup>Favorites</sup></small>
										</h3>
									</div>
								</div>

								<hr class="margin-5">

								<div id="linechart" class="chart"></div>


							</div>
							<!-- end widget content -->

						</div>
						<!-- end widget div -->

					</div>
					<!-- end widget -->

				</article>
				<!-- WIDGET END -->

			</div>

			<div class="row">
				<!-- NEW WIDGET START -->
				<article class="col-xs-12 col-sm-4">

					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-3"
							data-widget-colorbutton="false"
							data-widget-editbutton="false"
							data-widget-togglebutton="false"
							data-widget-deletebutton="false"
							data-widget-fullscreenbutton="false"
							data-widget-custombutton="false"
							data-widget-collapsed="false"
							data-widget-sortable="false">
						<header>
							<span class="widget-icon"> <i class="fa fa-facebook text-primary"></i> </span>
							<h2>Facebook Usermap</h2>

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
							<div class="widget-body no-padding">

								<!-- this is what the user will see -->
								<div id="vector-map" class="vector-map"></div>

							</div>
							<!-- end widget content -->

						</div>
						<!-- end widget div -->

					</div>
					<!-- end widget -->

					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-4"
							data-widget-colorbutton="false"
							data-widget-editbutton="false"
							data-widget-togglebutton="false"
							data-widget-deletebutton="false"
							data-widget-fullscreenbutton="false"
							data-widget-custombutton="false"
							data-widget-collapsed="false"
							data-widget-sortable="false">
						<header>
							<span class="widget-icon"> <i class="fa fa-facebook text-primary"></i> </span>
							<h2>Facebook Age Group</h2>

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
								<canvas id="pieChart" height="120"></canvas>

							</div>
							<!-- end widget content -->

						</div>
						<!-- end widget div -->

					</div>
					<!-- end widget -->

				</article>
				<!-- WIDGET END -->

				<!-- NEW WIDGET START -->
				<article class="col-xs-12 col-sm-4">

					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-5"
							data-widget-colorbutton="false"
							data-widget-editbutton="false"
							data-widget-togglebutton="false"
							data-widget-deletebutton="false"
							data-widget-fullscreenbutton="false"
							data-widget-custombutton="false"
							data-widget-collapsed="false"
							data-widget-sortable="false">
						<header>
							<h2>Traffic Sources</h2>

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
							<div class="widget-body no-padding">

								<!-- this is what the user will see -->

								<!-- table responsive -->
								<div class="table-responsive no-margin custom-scroll" style="height:300px; overflow-y: scroll;">

									<table class="table highlight table-border-0 table-hover table-condensed">
										<thead>
											<tr>
												<th>URL</th>
												<th class="hidden-xs" colspan="2">Views</th>
												<th class="">Percentage</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td class="v-align-m"><a href="javascript:void(0);">USA</a></td>
												<td class="hidden-xs"> 26 </td>
												<td class="hidden-xs v-align-m"> <span class="icon-color-good"><i class="fa fa-caret-up"></i> 12%</span> </td>
												<td class="v-align-m">
													<div class="progress progress-xs no-margin">
														<div class="progress-bar progress-primary" role="progressbar" style="width: 45%;"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-m"><a href="javascript:void(0);">Canada</a></td>
												<td class="hidden-xs"> 17 </td>
												<td class="hidden-xs v-align-m"> <span class="icon-color-good"><i class="fa fa-caret-up"></i> 6%</span> </td>
												<td class="v-align-m">
													<div class="progress progress-xs no-margin">
														<div class="progress-bar progress-primary" role="progressbar" style="width: 20%;"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-m"><a href="javascript:void(0);">Brazil</a></td>
												<td class="hidden-xs"> 3</td>
												<td class="hidden-xs v-align-m"> <span class="icon-color-good"><i class="fa fa-caret-up"></i> 1%</span> </td>
												<td class="v-align-m">
													<div class="progress progress-xs no-margin">
														<div class="progress-bar progress-primary" role="progressbar" style="width: 10%;"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-m"><a href="javascript:void(0);">Australia</a></td>
												<td class="hidden-xs">1 </td>
												<td class="hidden-xs v-align-m"> <span class="icon-color-good"><i class="fa fa-caret-up"></i> 2.5%</span> </td>
												<td class="v-align-m">
													<div class="progress progress-xs no-margin">
														<div class="progress-bar progress-primary" role="progressbar" style="width: 6%;"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-m"><a href="javascript:void(0);">China</a></td>
												<td class="hidden-xs"> 0 </td>
												<td class="hidden-xs v-align-m"> <span class="icon-color-bad"><i class="fa fa-caret-down"></i> 3%</span> </td>
												<td class="v-align-m">
													<div class="progress progress-xs no-margin">
														<div class="progress-bar progress-primary" role="progressbar" style="width: 6%;"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-m"><a href="javascript:void(0);">Turkey</a></td>
												<td class="hidden-xs"> 5 </td>
												<td class="hidden-xs v-align-m"> <span class="icon-color-good"><i class="fa fa-caret-up"></i> 0%</span></td>
												<td class="v-align-m">
													<div class="progress progress-xs no-margin">
														<div class="progress-bar progress-primary" role="progressbar" style="width: 5%;"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-m"><a href="javascript:void(0);">Bangladesh</a></td>
												<td class="hidden-xs"> 8 </td>
												<td class="hidden-xs v-align-m"> <span class="icon-color-bad"><i class="fa fa-caret-down"></i> 7%</span> </td>
												<td class="v-align-m">
													<div class="progress progress-xs no-margin">
														<div class="progress-bar progress-primary" role="progressbar" style="width: 3%;"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-m"><a href="javascript:void(0);">India</a></td>
												<td class="hidden-xs"> 13 </td>
												<td class="hidden-xs v-align-m"> <span class="icon-color-good"><i class="fa fa-caret-up"></i> 1%</span></td>
												<td class="v-align-m">
													<div class="progress progress-xs no-margin">
														<div class="progress-bar progress-primary" role="progressbar" style="width: 3%;"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-m"><a href="javascript:void(0);">Burma</a></td>
												<td class="hidden-xs"> 1 </td>
												<td class="hidden-xs v-align-m"> <span class="icon-color-bad"><i class="fa fa-caret-down"></i> 4%</span> </td>
												<td class="v-align-m">
													<div class="progress progress-xs no-margin">
														<div class="progress-bar progress-primary" role="progressbar" style="width: 2%;"></div>
													</div>
												</td>
											</tr>
											<tr>
												<td class="v-align-m"><a href="javascript:void(0);">Tunisia</a></td>
												<td class="hidden-xs"> 0 </td>
												<td class="hidden-xs v-align-m"> <span class="icon-color-bad"><i class="fa fa-caret-down"></i> 0%</span> </td>
												<td class="v-align-m">
													<div class="progress progress-xs no-margin">
														<div class="progress-bar progress-primary" role="progressbar" style="width: 2%;"></div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>

								</div>
								<!-- end table responsive-->

							</div>
							<!-- end widget content -->

						</div>
						<!-- end widget div -->

					</div>
					<!-- end widget -->

					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-6"
							data-widget-colorbutton="false"
							data-widget-editbutton="false"
							data-widget-togglebutton="false"
							data-widget-deletebutton="false"
							data-widget-fullscreenbutton="false"
							data-widget-custombutton="false"
							data-widget-collapsed="false"
							data-widget-sortable="false">
						<header>
							<span class="widget-icon"> <i class="fa fa-linkedin text-info"></i> </span>
							<h2>Linkedin Followers</h2>

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
								<h2 class="text-center">
									89,024
									<i class="fa fa-caret-up icon-color-good"></i>
									<small class="icon-color-good">6%</small>
									<br>
									<small class="font-xs"><sup>Followers</sup></small>
								</h2>

								<div class="sparkline"
								data-sparkline-type="line"
								data-fill-color="#9ad2ec"
								data-sparkline-line-color="#007bb6"
								data-sparkline-spotradius="5"
								data-sparkline-width="100%"
								data-sparkline-height="107px">-1,4,3,5,2,4,5,4,5,4,3,3,4,6</div>
								<h5 class="air air-bottom-left padding-10 font-md text-danger">-12.<small class="ultra-light text-danger">45 <i class="fa fa-caret-down fa-lg"></i></small></h5>

							</div>
							<!-- end widget content -->

						</div>
						<!-- end widget div -->

					</div>
					<!-- end widget -->

				</article>

				<!-- NEW WIDGET START -->
				<article class="col-xs-12 col-sm-4">

					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget" id="wid-id-7"
							data-widget-colorbutton="false"
							data-widget-editbutton="false"
							data-widget-togglebutton="false"
							data-widget-deletebutton="false"
							data-widget-fullscreenbutton="false"
							data-widget-custombutton="false"
							data-widget-collapsed="false"
							data-widget-sortable="false">
						<header>
							<span class="widget-icon"> <i class="fa fa-twitter text-info"></i> </span>
							<h2>Latest tweets</h2>

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
							<div class="widget-body no-padding">

								<!-- this is what the user will see -->
								<div class="chat-body custom-scroll" style="height: 599px !important;">
									<ul>
										<li class="message margin-bottom-10">
											<img src="img/avatars/5.png" alt="" class="img-circle">
											<div class="message-text">
												<a href="javascript:void(0);" class="username txt-color-blueDark">Sadi Orlaf</a>
												<span class="font-xs">
												Leverage agile frameworks to provide a robust synopsis for high level overviews #overpower
												</span>
												<time class="p-relative d-block margin-top-5"> 2017-01-13 </time>
											</div>
										</li>
										<li class="message margin-bottom-10">
											<img src="img/avatars/1.png" alt="" class="img-circle">
											<div class="message-text">
												<a href="javascript:void(0);" class="username txt-color-blueDark">Jessica Dodalf</a>
												<span class="font-xs">
												Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition @yura
												</span>
												<time class="p-relative d-block margin-top-5"> 2017-01-13 </time>
											</div>
										</li>
										<li class="message margin-bottom-10">
											<img src="img/avatars/3.png" alt="" class="img-circle">
											<div class="message-text">
												<a href="javascript:void(0);" class="username txt-color-blueDark">Zekarburg Almandalie</a>
												<span class="font-xs">
												Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
												</span>
												<time class="p-relative d-block margin-top-5"> 2017-01-13 </time>
											</div>
										</li>
										<li class="message margin-bottom-10">
											<img src="img/avatars/4.png" alt="" class="img-circle">
											<div class="message-text">
												<a href="javascript:void(0);" class="username txt-color-blueDark">Barley Krazurkth</a>
												<span class="font-xs">
												Bring to the table win-win survival strategies to ensure proactive domination.
												</span>
												<time class="p-relative d-block margin-top-5"> 2017-01-13 </time>
											</div>
										</li>
										<li class="message margin-bottom-10">
											<img src="img/avatars/female.png" alt="" class="img-circle">
											<div class="message-text">
												<a href="javascript:void(0);" class="username txt-color-blueDark">Farhana Amrin</a>
												<span class="font-xs">
												Going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution
												</span>
												<time class="p-relative d-block margin-top-5"> 2017-01-13 </time>
											</div>
										</li>
										<li class="message margin-bottom-10">
											<img src="img/avatars/2.png" alt="" class="img-circle">
											<div class="message-text">
												<a href="javascript:void(0);" class="username txt-color-blueDark">GoatCloud</a>
												<span class="font-xs">
												User generated content in real-time will have multiple touchpoints for offshoring.
												</span>
												<time class="p-relative d-block margin-top-5"> 2017-01-13 </time>
											</div>
										</li>
										<li class="v-align-m text-align-center">
											<a href="javascript:void(0);" class="btn btn-primary no-margin btn-xs">Load more</a>
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
<script src="<?php echo ASSETS_URL; ?>/js/plugin/YOURJS.js"></script>-->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/vectormap/jquery-jvectormap-world-mill-en.js"></script>

<script src="<?php echo ASSETS_URL; ?>/js/plugin/moment/moment.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/chartjs/chart.min.js"></script>

<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.cust.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.resize.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.fillbetween.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.orderBar.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.pie.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.time.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/flot/jquery.flot.tooltip.min.js"></script>

<script>

	var PieConfig;

	/* flot chart colors default */
	var $chrt_border_color = "#efefef";
	var $chrt_grid_color = "#DDD"
	var $chrt_main = "#E24913";			/* red       */
	var $chrt_second = "#6595b4";		/* blue      */
	var $chrt_third = "#FF9F01";		/* orange    */
	var $chrt_fourth = "#7e9d3a";		/* green     */
	var $chrt_fifth = "#BD362F";		/* dark red  */
	var $chrt_mono = "#000";

	var pagefunction = function() {
		// clears the variable if left blank


		/* sales chart */

		var myRandomNumber = function () {
			return ( Math.floor((Math.random() * 80) + 400) )
		}


		var saleschart = function() {

			if ($("#saleschart").length) {
				var d = [[1197068400000, 1086], [1197154800000, 676], [1197241200000, 1205], [1197327600000, 906], [1197414000000, 710], [1197500400000, 639], [1197586800000, 540], [1197673200000, 435], [1197759600000, 301], [1197846000000, 575], [1197932400000, 481], [1198018800000, 591], [1198105200000, 608], [1198191600000, 459], [1198450800000, 686], [1198537200000, 279], [1198623600000, 449], [1198710000000, 468], [1198796400000, 392], [1198882800000, 282], [1198969200000, 208], [1199055600000, 229], [1199142000000, 177], [1199228400000, 374], [1199314800000, 436], [1199401200000, 404], [1199487600000, 253], [1199574000000, 218], [1199660400000, 476], [1199746800000, 462], [1199833200000, 500], [1199919600000, 700], [1200006000000, 750], [1200092400000, 600], [1200178800000, 500], [1200265200000, 900], [1200351600000, 930], [1200438000000, 1200], [1200524400000, 980], [1200610800000, 950], [1200697200000, 900], [1200783600000, 1000], [1200870000000, 1050], [1200956400000, 1150], [1201042800000, 1100], [1201129200000, 1200], [1201215600000, 1300]];

				var e = [[1197068400000, 86], [1197154800000, 76], [1197241200000, 55], [1197327600000, 46], [1197414000000, 70], [1197500400000, 39], [1197586800000, 40], [1197673200000, 35], [1197759600000, 11], [1197846000000, 75], [1197932400000, 81], [1198018800000, 91], [1198105200000, 80], [1198191600000, 89], [1198450800000, 86], [1198537200000, 99], [1198623600000, 149], [1198710000000, 46], [1198796400000, 92], [1198882800000, 82], [1198969200000, 28], [1199055600000, 29], [1199142000000, 77], [1199228400000, 37], [1199314800000, 36], [1199401200000, 44], [1199487600000, 25], [1199574000000, 28], [1199660400000, 47], [1199746800000, 46], [1199833200000, 50], [1199919600000, 70], [1200006000000, 75], [1200092400000, 60], [1200178800000, 50], [1200265200000, 200], [1200351600000, 90], [1200438000000, 100], [1200524400000, 98], [1200610800000, 95], [1200697200000, 90], [1200783600000, 100], [1200870000000, 150], [1200956400000, 150], [1201042800000, 110], [1201129200000, 120], [1201215600000, 130]];

				var f = [[1197068400000, 16], [1197154800000, 71], [1197241200000, 51], [1197327600000, 41], [1197414000000, 70], [1197500400000, 39], [1197586800000, 10], [1197673200000, 31], [1197759600000, 11], [1197846000000, 71], [1197932400000, 81], [1198018800000, 91], [1198105200000, 81], [1198191600000, 18], [1198450800000, 86], [1198537200000, 199], [1198623600000, 119], [1198710000000, 11], [1198796400000, 91], [1198882800000, 81], [1198969200000, 21], [1199055600000, 129], [1199142000000, 77], [1199228400000, 37], [1199314800000, 16], [1199401200000, 104], [1199487600000, 121], [1199574000000, 21], [1199660400000, 47], [1199746800000, 46], [1199833200000, 51], [1199919600000, 100], [1200006000000, 71], [1200092400000, 16], [1200178800000, 50], [1200265200000, 100], [1200351600000, 91], [1200438000000, 100], [1200524400000, 91], [1200610800000, 19], [1200697200000, 90], [1200783600000, 100], [1200870000000, 115], [1200956400000, 110], [1201042800000, 110], [1201129200000, 120], [1201215600000, 110]];

				var g = [[1197068400000, 206], [1197154800000, 221], [1197241200000, 221], [1197327600000, 211], [1197414000000, 230], [1197500400000, 219], [1197586800000, 230], [1197673200000, 211], [1197759600000, 201], [1197846000000, 231], [1197932400000, 211], [1198018800000, 211], [1198105200000, 211], [1198191600000, 218], [1198450800000, 216], [1198537200000, 329], [1198623600000, 309], [1198710000000, 201], [1198796400000, 201], [1198882800000, 201], [1198969200000, 221], [1199055600000, 276], [1199142000000, 210], [1199228400000, 127], [1199314800000, 216], [1199401200000, 304], [1199487600000, 321], [1199574000000, 243], [1199660400000, 207], [1199746800000, 246], [1199833200000, 251], [1199919600000, 300], [1200006000000, 232], [1200092400000, 213], [1200178800000, 200], [1200265200000, 300], [1200351600000, 291], [1200438000000, 300], [1200524400000, 211], [1200610800000, 241], [1200697200000, 200], [1200783600000, 300], [1200870000000, 315], [1200956400000, 210], [1201042800000, 312], [1201129200000, 300], [1201215600000, 300]];

				for (var i = 0; i < d.length; ++i)
					d[i][0] += 60 * 60 * 1000;

				function weekendAreas(axes) {
					var markings = [];
					var d = new Date(axes.xaxis.min);
					// go to the first Saturday
					d.setUTCDate(d.getUTCDate() - ((d.getUTCDay() + 1) % 7))
					d.setUTCSeconds(0);
					d.setUTCMinutes(0);
					d.setUTCHours(0);
					var i = d.getTime();
					do {
						// when we don't set yaxis, the rectangle automatically
						// extends to infinity upwards and downwards
						markings.push({
							xaxis : {
								from : i,
								to : i + 2 * 24 * 60 * 60 * 1000
							}
						});
						i += 7 * 24 * 60 * 60 * 1000;
					} while (i < axes.xaxis.max);

					return markings;
				}

				var options = {
					xaxis : {
						mode : "time",
						tickLength : 5
					},
					series : {
						lines : {
							show : true,
							lineWidth : 1,
							fill : true,
							fillColor : {
								colors : [{
									opacity : 0.1
								}, {
									opacity : 0.15
								}]
							}
						},
	                   //points: { show: true },
						shadowSize : 0
					},
					selection : {
						mode : "x"
					},
					grid : {
						hoverable : true,
						clickable : true,
						tickColor : $chrt_border_color,
						borderWidth : 0,
						borderColor : $chrt_border_color,
					},
					tooltip : false,
					colors : [$chrt_second, $chrt_third, $chrt_main, $chrt_fourth],

				};

				plot_1 = $.plot($("#saleschart"), [d,e,f,g], options);


			};

		}

		var linechart = function() {
			if ($("#linechart").length) {
				var d = [[1197068400000, myRandomNumber()], [1197154800000, myRandomNumber()], [1197241200000, myRandomNumber()], [1197327600000, myRandomNumber()], [1197414000000, myRandomNumber()], [1197500400000, myRandomNumber()], [1197586800000, myRandomNumber()], [1197673200000, myRandomNumber()], [1197759600000, myRandomNumber()], [1197846000000, myRandomNumber()], [1197932400000, myRandomNumber()], [1198018800000, myRandomNumber()], [1198105200000, myRandomNumber()], [1198191600000, myRandomNumber()], [1198450800000, myRandomNumber()], [1198537200000, myRandomNumber()], [1198623600000, myRandomNumber()], [1198710000000, myRandomNumber()], [1198796400000, myRandomNumber()], [1198882800000, myRandomNumber()], [1198969200000, myRandomNumber()], [1199055600000, myRandomNumber()], [1199142000000, myRandomNumber()], [1199228400000, myRandomNumber()], [1199314800000, myRandomNumber()], [1199401200000, myRandomNumber()], [1199487600000, myRandomNumber()], [1199574000000, myRandomNumber()], [1199660400000, myRandomNumber()], [1199746800000, myRandomNumber()], [1199833200000, myRandomNumber()], [1199919600000, myRandomNumber()], [1200006000000, myRandomNumber()], [1200092400000, myRandomNumber()], [1200178800000, myRandomNumber()], [1200265200000, myRandomNumber()], [1200351600000, myRandomNumber()], [1200438000000, myRandomNumber()], [1200524400000, myRandomNumber()], [1200610800000, myRandomNumber()], [1200697200000, myRandomNumber()], [1200783600000, myRandomNumber()], [1200870000000, myRandomNumber()], [1200956400000, myRandomNumber()], [1201042800000, myRandomNumber()], [1201129200000, myRandomNumber()], [1201215600000, 900]];

				var e = [[1197068400000, 400], [1197154800000, myRandomNumber()], [1197241200000, myRandomNumber()], [1197327600000, myRandomNumber()], [1197414000000, myRandomNumber()], [1197500400000, myRandomNumber()], [1197586800000, myRandomNumber()], [1197673200000, myRandomNumber()], [1197759600000, myRandomNumber()], [1197846000000, myRandomNumber()], [1197932400000, myRandomNumber()], [1198018800000, myRandomNumber()], [1198105200000, 400], [1198191600000, myRandomNumber()], [1198450800000, myRandomNumber()], [1198537200000, myRandomNumber()], [1198623600000, myRandomNumber()], [1198710000000, myRandomNumber()], [1198796400000, myRandomNumber()], [1198882800000, myRandomNumber()], [1198969200000, myRandomNumber()], [1199055600000, myRandomNumber()], [1199142000000, myRandomNumber()], [1199228400000, myRandomNumber()], [1199314800000, myRandomNumber()], [1199401200000, myRandomNumber()], [1199487600000, myRandomNumber()], [1199574000000, 400], [1199660400000, myRandomNumber()], [1199746800000, myRandomNumber()], [1199833200000, myRandomNumber()], [1199919600000, myRandomNumber()], [1200006000000, myRandomNumber()], [1200092400000, myRandomNumber()], [1200178800000, myRandomNumber()], [1200265200000, myRandomNumber()], [1200351600000, myRandomNumber()], [1200438000000, myRandomNumber()], [1200524400000, myRandomNumber()], [1200610800000, myRandomNumber()], [1200697200000, myRandomNumber()], [1200783600000, myRandomNumber()], [1200870000000, 400], [1200956400000, myRandomNumber()], [1201042800000, myRandomNumber()], [1201129200000, myRandomNumber()], [1201215600000, 500]];

				for (var i = 0; i < d.length; ++i)
					d[i][0] += 60 * 60 * 1000;

				function weekendAreas(axes) {
					var markings = [];
					var d = new Date(axes.xaxis.min);
					// go to the first Saturday
					d.setUTCDate(d.getUTCDate() - ((d.getUTCDay() + 1) % 7))
					d.setUTCSeconds(0);
					d.setUTCMinutes(0);
					d.setUTCHours(0);
					var i = d.getTime();
					do {
						// when we don't set yaxis, the rectangle automatically
						// extends to infinity upwards and downwards
						markings.push({
							xaxis : {
								from : i,
								to : i + 2 * 24 * 60 * 60 * 1000
							}
						});
						i += 7 * 24 * 60 * 60 * 1000;
					} while (i < axes.xaxis.max);

					return markings;
				}

				var options = {
					xaxis : {
						mode : "time",
						tickLength : 5
					},
					series : {
						lines : {
							show : true,
							lineWidth : 2,
							fill : false,
							fillColor : {
								colors : [{
									opacity : 0.1
								}, {
									opacity : 0.15
								}]
							}
						},
	                   //points: { show: true },
						shadowSize : 0
					},
					selection : {
						mode : "x"
					},
					grid : {
						hoverable : true,
						clickable : true,
						tickColor : $chrt_border_color,
						borderWidth : 0,
						borderColor : $chrt_border_color,
					},
					tooltip : false,
					colors : [$chrt_second, $chrt_third],

				};

				plot_1 = $.plot($("#linechart"), [d,e], options);


			};
		}

		/* end sales chart */

		var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
            //return 0;
        };

		/*
		 * VECTOR MAP
		 */

		data_array = {
		    "US": 4977,
		    "AU": 4873,
		    "IN": 3671,
		    "BR": 2476,
		    "TR": 1476,
		    "CN": 146,
		    "CA": 134,
		    "BD": 100
		};

		function renderVectorMap() {
		    $('#vector-map').vectorMap({
		        map: 'world_mill_en',
		        backgroundColor: '#fff',
		        regionStyle: {
		            initial: {
		                fill: '#c4c4c4'
		            },
		            hover: {
		                "fill-opacity": 1
		            }
		        },
		        series: {
		            regions: [{
		                values: data_array,
		                scale: ['#85a8b6', '#4d7686'],
		                normalizeFunction: 'polynomial'
		            }]
		        },
		        onRegionLabelShow: function (e, el, code) {
		            if (typeof data_array[code] == 'undefined') {
		                e.preventDefault();
		            } else {
		                var countrylbl = data_array[code];
		                el.html(el.html() + ': ' + countrylbl + ' visits');
		            }
		        }
		    });
		}

		function renderPie(){

		    // pie chart example
		    PieConfig = {
		        type: 'pie',
		        data: {
		            datasets: [{
		                data: [
		                    randomScalingFactor(),
		                    randomScalingFactor(),
		                    randomScalingFactor(),
		                    randomScalingFactor(),
		                    randomScalingFactor(),
		                ],
		                backgroundColor: [
		                    "#3b5998",
		                    "#8b9dc3",
		                    "#dfe3ee",
		                    "#b0bcd5",
		                    "#293e6a",
		                ],
		            }],
		            labels: [
		                "(14-17)",
		                "(18-23)",
		                "(24-30)",
		                "(31-37)",
		                "(38-55)"
		            ]
		        },
		        options: {
		            responsive: true
		        }
		    };

			myPie = new Chart(document.getElementById("pieChart"), PieConfig);
		}

		renderVectorMap();
		renderPie();
		saleschart();
		linechart();

	};

	// end pagefunction

	// destroy generated instances
	// pagedestroy is called automatically before loading a new page
	// only usable in AJAX version!

	// end destroy

	// run pagefunction
	pagefunction();


</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>