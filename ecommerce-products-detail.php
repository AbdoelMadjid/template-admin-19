<?php

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Products Detail";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["ecommerce"]["sub"]["prod-detail"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs[$page_nav["ecommerce"]["title"]] = "";
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
						E-commerce
					<span>>  
						Products View
					</span>
				</h1>
			</div>
			<!-- end col -->
			
			<!-- right side of the page with the sparkline graphs -->
			<!-- col -->
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-8 text-right">
				
				<a href="javascript:void(0);" class="btn btn-default shop-btn">
					<i class="fa fa-3x fa-shopping-cart"></i>
					<span class="air air-top-right label-danger txt-color-white padding-5">10</span>
				</a>
				<a href="javascript:void(0);" class="btn btn-default">
					<i class="fa fa-3x fa-print"></i>
				</a>
				
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

				<div class="col-sm-12 col-md-12 col-lg-12">
					<!-- product -->
					<div class="product-content product-wrap clearfix product-deatil">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12 ">
									<div class="product-image"> 
										<div id="myCarousel-2" class="carousel slide">
										<ol class="carousel-indicators">
											<li data-target="#myCarousel-2" data-slide-to="0" class=""></li>
											<li data-target="#myCarousel-2" data-slide-to="1" class="active"></li>
											<li data-target="#myCarousel-2" data-slide-to="2" class=""></li>
										</ol>
										<div class="carousel-inner">
											<!-- Slide 1 -->
											<div class="item active">
												<img src="img/demo/e-comm/detail-1.png" alt="">
											</div>
											<!-- Slide 2 -->
											<div class="item">
												<img src="img/demo/e-comm/detail-2.png" alt="">
											</div>
											<!-- Slide 3 -->
											<div class="item">
												<img src="img/demo/e-comm/detail-3.png" alt="">
											</div>
										</div>
										<a class="left carousel-control" href="#myCarousel-2" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
										<a class="right carousel-control" href="#myCarousel-2" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
										</div>
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
							
								<h2 class="name">
									Product Name Title Here 
									<small>Product by <a href="javascript:void(0);">Adeline</a></small>
									<i class="fa fa-star fa-2x text-primary"></i>
									<i class="fa fa-star fa-2x text-primary"></i>
									<i class="fa fa-star fa-2x text-primary"></i>
									<i class="fa fa-star fa-2x text-primary"></i>
									<i class="fa fa-star fa-2x text-muted"></i>
									<span class="fa fa-2x"><h5>(109) Votes</h5></span>	
									
									<a href="javascript:void(0);">109 customer reviews</a>
		 
								</h2>
								<hr>
								<h3 class="price-container">
									$129.54
									<small>*includes tax</small>
								</h3>
							
								<div class="certified">
									<ul>
										<li><a href="javascript:void(0);">Delivery time<span>7 Working Days</span></a></li>
										<li><a href="javascript:void(0);">Certified<span>Quality Assured</span></a></li>
									</ul>
								</div>
								<hr>
								<div class="description description-tabs">


									<ul id="myTab" class="nav nav-pills">
										<li class="active"><a href="#more-information" data-toggle="tab" class="no-margin">Product Description </a></li>
										<li class=""><a href="#specifications" data-toggle="tab">Specifications</a></li>
										<li class=""><a href="#reviews" data-toggle="tab">Reviews</a></li>
									</ul>
									<div id="myTabContent" class="tab-content">
										<div class="tab-pane fade active in" id="more-information">
											<br>
											<strong>Description Title</strong>
											<p>Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec. </p>
										</div>
										<div class="tab-pane fade" id="specifications">
											<br>
											<dl class="">
													<dt>Gravina</dt>
			                                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
			                                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
			                                        <dd>Eget lacinia odio sem nec elit.</dd>
			                                        <br>

			                                        <dt>Test lists</dt>
			                                        <dd>A description list is perfect for defining terms.</dd>
			                                        <br>	

			                                        <dt>Altra porta</dt>
			                                        <dd>Vestibulum id ligula porta felis euismod semper</dd>
			                                    </dl>
										</div>
										<div class="tab-pane fade" id="reviews">
											<br>
											<form method="post" class="well padding-bottom-10" onsubmit="return false;">
												<textarea rows="2" class="form-control" placeholder="Write a review"></textarea>
												<div class="margin-top-10">
													<button type="submit" class="btn btn-sm btn-primary pull-right">
														Submit Review
													</button>
													<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Location"><i class="fa fa-location-arrow"></i></a>
													<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Voice"><i class="fa fa-microphone"></i></a>
													<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Photo"><i class="fa fa-camera"></i></a>
													<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add File"><i class="fa fa-file"></i></a>
												</div>
											</form>

											<div class="chat-body no-padding profile-message">
												<ul>
													<li class="message">
														<img src="img/avatars/1.png" class="online">
														<span class="message-text"> 
															<a href="javascript:void(0);" class="username">
																Alisha Molly 
																<span class="badge">Purchase Verified</span> 
																<span class="pull-right">
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-muted"></i>
																</span>
															</a> 
															
															
															Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very image let unto fowl isn't in blessed fill life yielding above all moved 
														</span>
														<ul class="list-inline font-xs">
															<li>
																<a href="javascript:void(0);" class="text-info"><i class="fa fa-thumbs-up"></i> This was helpful (22)</a>
															</li>
															<li class="pull-right">
																<small class="text-muted pull-right ultra-light"> Posted 1 year ago </small>
															</li>
														</ul>
													</li>
													<li class="message">
														<img src="img/avatars/2.png" class="online">
														<span class="message-text"> 
															<a href="javascript:void(0);" class="username">
																Aragon Zarko 
																<span class="badge">Purchase Verified</span> 
																<span class="pull-right">
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																	<i class="fa fa-star fa-2x text-primary"></i>
																</span>
															</a> 
															
															
															Excellent product, love it!
														</span>
														<ul class="list-inline font-xs">
															<li>
																<a href="javascript:void(0);" class="text-info"><i class="fa fa-thumbs-up"></i> This was helpful (22)</a>
															</li>
															<li class="pull-right">
																<small class="text-muted pull-right ultra-light"> Posted 1 year ago </small>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
							

								</div>
								<hr>
								<div class="row">
									<div class="col-sm-12 col-md-6 col-lg-6">
										
											<a href="javascript:void(0);" class="btn btn-success btn-lg">Add to cart ($129.54)</a>
										
									</div>
									<div class="col-sm-12 col-md-6 col-lg-6">
										<div class="btn-group pull-right">
				                            <button class="btn btn-white btn-default"><i class="fa fa-star"></i> Add to wishlist </button>
				                            <button class="btn btn-white btn-default"><i class="fa fa-envelope"></i> Contact Seller</button>
				                        </div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>	

				<div class="col-sm-12 col-md-12 col-lg-12">
					<!-- product -->
					<div class="product-content product-wrap clearfix product-deatil">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12 ">
									<div class="product-image"> 
										<div id="myCarousel-3" class="carousel fade">
										<ol class="carousel-indicators">
											<li data-target="#myCarousel-3" data-slide-to="0" class=""></li>
											<li data-target="#myCarousel-3" data-slide-to="1" class="active"></li>
											<li data-target="#myCarousel-3" data-slide-to="2" class=""></li>
										</ol>
										<div class="carousel-inner">
											<!-- Slide 1 -->
											<div class="item active">
												<img src="img/demo/e-comm/detail-1.png" alt="">
											</div>
											<!-- Slide 2 -->
											<div class="item">
												<img src="img/demo/e-comm/detail-2.png" alt="">
											</div>
											<!-- Slide 3 -->
											<div class="item">
												<img src="img/demo/e-comm/detail-3.png" alt="">
											</div>
										</div>
										<a class="left carousel-control" href="#myCarousel-3" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
										<a class="right carousel-control" href="#myCarousel-3" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
										</div>
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
							
								<h2 class="name">
									Product Name Title Here 
									<small>Product by <a href="javascript:void(0);">Adeline</a></small>
									<i class="fa fa-star fa-2x text-primary"></i>
									<i class="fa fa-star fa-2x text-primary"></i>
									<i class="fa fa-star fa-2x text-primary"></i>
									<i class="fa fa-star fa-2x text-primary"></i>
									<i class="fa fa-star fa-2x text-muted"></i>
									<span class="fa fa-2x"><h5>(109) Votes</h5></span>	
									
									<a href="javascript:void(0);">109 customer reviews</a>
		 
								</h2>
								<hr>
								<div class="row">
									
									<div class="col-sm-6">
									<h3 class="price-container">
										$129.54
										<small>*includes tax</small>
									</h3>
									</div>
									<div class="col-sm-6 text-right">
										<a href="javascript:void(0);" class="btn btn-primary">Add to cart ($129.54)</a>
									</div>
								</div>
								
								
							
								

								<hr>
								<div class="description description-tabs">


									<ul id="myTab2" class="nav nav-tabs">
										<li class="active"><a href="#more-information2" data-toggle="tab" class="no-margin">Product Description </a></li>
										<li class=""><a href="#specifications2" data-toggle="tab">Specifications</a></li>
										<li class=""><a href="#reviews2" data-toggle="tab">Reviews</a></li>
									</ul>
									<div id="myTabContent2" class="tab-content">
										<div class="tab-pane fade active in" id="more-information2">
											<br>
											<strong>Description Title</strong>
											<p>Integer egestas, orci id condimentum eleifend, nibh nisi pulvinar eros, vitae ornare massa neque ut orci. Nam aliquet lectus sed odio eleifend, at iaculis dolor egestas. Nunc elementum pellentesque augue sodales porta. Etiam aliquet rutrum turpis, feugiat sodales ipsum consectetur nec. </p>
										</div>
										<div class="tab-pane fade" id="specifications2">
											<br>
											<dl class="">
													<dt>Gravina</dt>
			                                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
			                                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
			                                        <dd>Eget lacinia odio sem nec elit.</dd>
			                                        <br>

			                                        <dt>Test lists</dt>
			                                        <dd>A description list is perfect for defining terms.</dd>
			                                        <br>	

			                                        <dt>Altra porta</dt>
			                                        <dd>Vestibulum id ligula porta felis euismod semper</dd>
			                                    </dl>
										</div>
										<div class="tab-pane fade" id="reviews2">
											<br>
											<form method="post" class="well padding-bottom-10" onsubmit="return false;">
												<textarea rows="2" class="form-control" placeholder="Write a review"></textarea>
												<div class="margin-top-10">
													<button type="submit" class="btn btn-sm btn-primary pull-right">
														Submit Review
													</button>
													<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Location"><i class="fa fa-location-arrow"></i></a>
													<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Voice"><i class="fa fa-microphone"></i></a>
													<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add Photo"><i class="fa fa-camera"></i></a>
													<a href="javascript:void(0);" class="btn btn-link profile-link-btn" rel="tooltip" data-placement="bottom" title="" data-original-title="Add File"><i class="fa fa-file"></i></a>
												</div>
											</form>

											<div class="chat-body no-padding profile-message">
												<ul>
													<li class="message">
														<img src="img/avatars/1.png" class="online">
														<span class="message-text"> <a href="javascript:void(0);" class="username">John Doe <small class="text-muted pull-right ultra-light"> 2 Minutes ago </small></a> Can't divide were divide fish forth fish to. Was can't form the, living life grass darkness very image let unto fowl isn't in blessed fill life yielding above all moved </span>
														<ul class="list-inline font-xs">
															<li>
																<a href="javascript:void(0);" class="text-info"><i class="fa fa-reply"></i> Reply</a>
															</li>
															<li>
																<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
															</li>
															<li>
																<a href="javascript:void(0);" class="text-muted">Show All Comments (14)</a>
															</li>
															<li>
																<a href="javascript:void(0);" class="text-primary">Hide</a>
															</li>
														</ul>
													</li>
													<li class="message message-reply">
														<img src="img/avatars/3.png" class="online">
														<span class="message-text"> <a href="javascript:void(0);" class="username">Serman Syla</a> eget lacinia odio sem nec eliteget lacinia odio sem nec elit. <i class="fa fa-smile-o txt-color-orange"></i> </span>

														<ul class="list-inline font-xs">
															<li>
																<a href="javascript:void(0);" class="text-muted">1 minute ago </a>
															</li>
															<li>
																<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
															</li>
														</ul>

													</li>
													<li class="message message-reply">
														<img src="img/avatars/4.png" class="online">
														<span class="message-text"> <a href="javascript:void(0);" class="username">Sadi Orlaf </a> Eet lacinia odio sem nec elit. <i class="fa fa-smile-o txt-color-orange"></i> </span>

														<ul class="list-inline font-xs">
															<li>
																<a href="javascript:void(0);" class="text-muted">a moment ago </a>
															</li>
															<li>
																<a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like</a>
															</li>
														</ul>

													</li>
												</ul>
											</div>
										</div>
									</div>
							

								</div>
								<hr>
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-12">
										<div class="btn-group">
				                            <button class="btn btn-white btn-default"><i class="fa fa-star"></i> Add to wishlist </button>
				                            <button class="btn btn-white btn-default"><i class="fa fa-envelope"></i> Contact Seller</button>
				                        </div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<!-- end product -->
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