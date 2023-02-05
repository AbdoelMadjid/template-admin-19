<?php

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Products View";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["ecommerce"]["sub"]["prod-view"]["active"] = true;
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

				<div class="col-sm-6 col-md-6 col-lg-6">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<img src="img/demo/e-comm/1.png" alt="194x228" class="img-responsive"> 
										<span class="tag2 hot">
											HOT
										</span> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
										<h5 class="name">
											<a href="#">
												Product Name Title Here <span>Category</span>
											</a>
										</h5>
										<p class="price-container">
											<span>$99</span>
										</p>
										<span class="tag1"></span> 
								</div>
								<div class="description">
									<p>Proin in ullamcorper lorem. Maecenas eu ipsum </p>
								</div>
								<div class="product-info smart-form">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-6"> 
											<a href="javascript:void(0);" class="btn btn-success">Add to cart</a>
										</div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="rating">
												<input type="radio" name="stars-rating" id="stars-rating-5">
												<label for="stars-rating-5"><i class="fa fa-star"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-4">
												<label for="stars-rating-4"><i class="fa fa-star"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-3">
												<label for="stars-rating-3"><i class="fa fa-star text-primary"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-2">
												<label for="stars-rating-2"><i class="fa fa-star text-primary"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-1">
												<label for="stars-rating-1"><i class="fa fa-star text-primary"></i></label>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>	

				<div class="col-sm-6 col-md-6 col-lg-6">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<img src="img/demo/e-comm/2.png" alt="194x228" class="img-responsive"> 
										<span class="tag2 sale">
											Sale
										</span> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
										<h5 class="name">
											<a href="#">
												Product Name Title Here <span>Category</span>
											</a>
										</h5>
										<p class="price-container">
											<span>$109</span>
										</p>
										<span class="tag1"></span> 
								</div>
								<div class="description">
										<p>Proin in ullamcorper lorem. Maecenas eu ipsum </p>
								</div>
								<div class="product-info smart-form">
									<div class="row">
										<div class="col-md-6 col-sm-6 col-xs-6"> <a href="javascript:void(0);" class="btn btn-success">Add to cart</a> </div>
										<div class="col-md-6 col-sm-6 col-xs-6">
											<div class="rating">

												<input type="radio" name="stars-rating" id="stars-rating-5">
												<label for="stars-rating-5"><i class="fa fa-star"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-4">
												<label for="stars-rating-4"><i class="fa fa-star"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-3">
												<label for="stars-rating-3"><i class="fa fa-star text-primary"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-2">
												<label for="stars-rating-2"><i class="fa fa-star text-primary"></i></label>
												<input type="radio" name="stars-rating" id="stars-rating-1">
												<label for="stars-rating-1"><i class="fa fa-star text-primary"></i></label>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>	

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<img src="img/demo/e-comm/3.png" alt="194x228" class="img-responsive"> 
										<span class="tag2 hot">
											HOT
										</span> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
										<h5 class="name">
											<a href="#">
												Product Name Title Here <span>Category</span>
											</a>
										</h5>
										<p class="price-container">
											<span>$399</span>
										</p>
										<span class="tag1"></span> 
								</div>
								<div class="description">
										<p>Proin in ullamcorper lorem. Maecenas eu ipsum </p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>			

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<img src="img/demo/e-comm/4.png" alt="194x228" class="img-responsive"> 
										<span class="tag2 sale">
											Sale
										</span> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
										<h5 class="name">
											<a href="#">
												Product Name Title Here <span>Category</span>
											</a>
										</h5>
										<p class="price-container">
											<span>$19</span>
										</p>
										<span class="tag1"></span> 
								</div>
								<div class="description">
									<p>Proin in ullamcorper lorem. Maecenas eu ipsum </p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>	

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<img src="img/demo/e-comm/5.png" alt="194x228" class="img-responsive"> 
										<span class="tag2 sale">
											Sale
										</span> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
										<h5 class="name">
											<a href="#">
												Product Name Title Here <span>Category</span>
											</a>
										</h5>
										<p class="price-container">
											<span>$195</span>
										</p>
										<span class="tag1"></span> 
								</div>
								<div class="description">
										<p>Proin in ullamcorper lorem. Maecenas eu ipsum </p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>	

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<img src="img/demo/e-comm/7.png" alt="194x228" class="img-responsive"> 
										<span class="tag2 sale">
											Sale
										</span> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
										<h5 class="name">
											<a href="#">
												Product Name Title Here <span>Category</span>
											</a>
										</h5>
										<p class="price-container">
											<span>$99</span>
										</p>
										<span class="tag1"></span> 
								</div>
								<div class="description">
									<p>Proin in ullamcorper lorem. Maecenas eu ipsum </p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>	

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<img src="img/demo/e-comm/8.png" alt="194x228" class="img-responsive"> 
										<span class="tag2 sale">
											Sale
										</span> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
										<h5 class="name">
											<a href="#">
												Product Name Title Here <span>Category</span>
											</a>
										</h5>
										<p class="price-container">
											<span>$109</span>
										</p>
										<span class="tag1"></span> 
								</div>
								<div class="description">
										<p>Proin in ullamcorper lorem. Maecenas eu ipsum </p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>	

				<div class="col-sm-6 col-md-6 col-lg-4">
					<!-- product -->
					<div class="product-content product-wrap clearfix">
						<div class="row">
								<div class="col-md-5 col-sm-12 col-xs-12">
									<div class="product-image"> 
										<img src="img/demo/e-comm/9.png" alt="194x228" class="img-responsive"> 
										<span class="tag2 sale">
											Sale
										</span> 
									</div>
								</div>
								<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="product-deatil">
										<h5 class="name">
											<a href="#">
												Product Name Title Here <span>Category</span>
											</a>
										</h5>
										<p class="price-container">
											<span>$399</span>
										</p>
										<span class="tag1"></span> 
								</div>
								<div class="description">
										<p>Proin in ullamcorper lorem. Maecenas eu ipsum</p>
								</div>
							</div>
						</div>
					</div>
					<!-- end product -->
				</div>
				
				<div class="col-sm-12 text-center">
					<a href="javascript:void(0);" class="btn btn-primary btn-lg">Load more <i class="fa fa-arrow-down"></i></a>
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