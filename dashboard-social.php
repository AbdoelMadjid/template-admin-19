<?php

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Social Wall";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["dashboard"]["sub"]["social"]["active"] = true;
include("inc/nav.php");

?>
<!-- ==========================CONTENT STARTS HERE ========================== -->
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
				<h1 class="page-title txt-color-blueDark"><!-- PAGE HEADER --><i class="fa-fw fa fa-home"></i> Dashboard <span>>
					Social Wall </span></h1>
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

				<!-- a blank row to get started -->
				<div class="col-sm-6 col-lg-4">

					<!-- your contents here -->
					<div class="panel panel-default">
						<div class="panel-body status">
							<div class="who clearfix">
								<img src="<?php echo ASSETS_URL; ?>/img/avatars/5.png" alt="img" class="online">
								<span class="name"><b>Karrigan Mean</b> shared a photo</span>
								<span class="from"><b>1 days ago</b> via Mobile, Sydney, Australia</span>
							</div>
							<div class="image"><img src="<?php echo ASSETS_URL; ?>/img/realestate/6.png" alt="img">
							</div>
							<ul class="links">
								<li>
									<a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i> Like</a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa fa-comment-o"></i> Comment</a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa fa-share-square-o"></i> Share</a>
								</li>
							</ul>
							<ul class="comments">
								<li>
									<img src="<?php echo ASSETS_URL; ?>/img/avatars/sunny.png" alt="img" class="online">
									<span class="name">John Doe</span>
									Looks like a nice house, when did you get it? Are we having the party there next week? ;)
								</li>
								<li>
									<img src="<?php echo ASSETS_URL; ?>/img/avatars/2.png" alt="img" class="online">
									<span class="name">Alice Wonder</span>
									Seems cool.
								</li>
								<li>
									<img src="<?php echo ASSETS_URL; ?>/img/avatars/sunny.png" alt="img" class="online">
									<input type="text" class="form-control" placeholder="Post your comment...">
								</li>
							</ul>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-body status">
							<div class="who clearfix">
								<h4>See anyone you know? Connect with them</h4>
							</div>
							<div class="row">
								<div class="text">
									<div class="col-sm-12 col-md-6 col-lg-4">
										<div class="well text-center connect">
											<img src="<?php echo ASSETS_URL; ?>/img/avatars/female.png" alt="img" class="margin-bottom-5 margin-top-5">
											<br>
											<span class="font-xs"><b>Jennifer Lezly</b></span>
											<a href="javascript:void(0);" class="btn btn-xs btn-success margin-top-5 margin-bottom-5"> <span class="font-xs">Connect</span> </a>
										</div>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-4">
										<div class="well text-center connect">
											<img src="<?php echo ASSETS_URL; ?>/img/avatars/female.png" alt="img" class="margin-bottom-5 margin-top-5">
											<br>
											<span class="font-xs"><b>Jennifer Lezly</b></span>
											<a href="javascript:void(0);" class="btn btn-xs btn-success margin-top-5 margin-bottom-5"> <span class="font-xs">Connect</span> </a>
										</div>
									</div>
									<div class="col-sm-12 col-md-6 col-lg-4">
										<div class="well text-center connect">
											<img src="<?php echo ASSETS_URL; ?>/img/avatars/female.png" alt="img" class="margin-bottom-5 margin-top-5">
											<br>
											<span class="font-xs"><b>Jennifer Lezly</b></span>
											<a href="javascript:void(0);" class="btn btn-xs btn-success margin-top-5 margin-bottom-5"> <span class="font-xs">Connect</span> </a>
										</div>
									</div>
								</div>
							</div>
							<ul class="links text-right">
								<li class="">
									<a href="javascript:void(0);">Find people you know <i class="fa fa-arrow-right"></i> </a>
								</li>
							</ul>
						</div>
					</div>

				</div>

				<div class="col-sm-6 col-lg-4">

					<div class="panel panel-default">
						<div class="panel-body status">
							<div class="who clearfix">
								<img src="<?php echo ASSETS_URL; ?>/img/avatars/sunny.png" alt="img" class="online">
								<span class="name"><b>John Doe</b> sent you a message</span>
								<span class="from"><b>1 days ago</b> via Mobile, Dubai</span>
							</div>
							<div class="text">
								Just landed in Dubai. My body must have lost like 4 liters of moisture, its 50 degrees here!!
							</div>
							<ul class="links">
								<li>
									<a href="javascript:void(0);"><i class="fa fa-comment"></i> Reply</a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa fa-share-square-o"></i> Share</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-body status smart-form vote">
							<div class="who clearfix">
								<img src="<?php echo ASSETS_URL; ?>/img/avatars/3.png" alt="img" class="offline">
								<span class="name"><b>Alliz Yaen</b> started a question poll</span>
								<span class="from"><b>2 days ago</b> via Mobile, Sydney, Australia</span>
							</div>
							<div class="image">
								<strong>How did you guys like the movie <i>"Albert The Einstine?"</i> I reckon it was an awesome movie! </strong>
							</div>
							<ul class="comments">
								<li>
									<label class="radio">
										<input type="radio" name="radio">
										<i></i>It was a great movie! </label>
								</li>
								<li>
									<label class="radio">
										<input type="radio" name="radio">
										<i></i>The Movie could have been better... </label>
								</li>
								<li>
									<label class="radio">
										<input type="radio" name="radio">
										<i></i>It was a boring documentry :( </label>
								</li>
								<li class="text-right">
									<a href="javascript:void(0);" class="btn btn-xs btn-primary">Submit Vote</a>
								</li>
							</ul>

							<ul class="links">
								<li>
									<a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i> Like</a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa fa-comment-o"></i> Comment</a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa fa-share-square-o"></i> Share</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="panel panel-default">

						<div class="panel-body status">

							<div class="who clearfix">
								<h4>Latest Forum Posts</h4>
							</div>

							<div class="who clearfix">
								<img src="<?php echo ASSETS_URL; ?>/img/avatars/2.png" alt="img" class="busy">
								<span class="name font-sm"> <span class="text-muted">Posted by</span> <b> Karrigan Mean <span class="pull-right font-xs text-muted"><i>3 minutes ago</i></span> </b>
									<br>
									<a href="javascript:void(0);" class="font-md">Business Requirement Docs</a> </span>
							</div>

							<div class="who clearfix">
								<img src="<?php echo ASSETS_URL; ?>/img/avatars/3.png" alt="img" class="offline">
								<span class="name font-sm"> <span class="text-muted">Posted by</span> <b> Alliz Yaen <span class="pull-right font-xs text-muted"><i>2 days ago</i></span> </b>
									<br>
									<a href="javascript:void(0);" class="font-md">Maecenas nec odio et ante tincidun</a> </span>
							</div>

							<div class="who clearfix">
								<img src="<?php echo ASSETS_URL; ?>/img/avatars/4.png" alt="img" class="away">
								<span class="name font-sm"> <span class="text-muted">Posted by</span> <b> Barley Kartzukh <span class="pull-right font-xs text-muted"><i>1 month ago</i></span> </b>
									<br>
									<a href="javascript:void(0);" class="font-md">Tincidun nec Gasket Mask </a> </span>
							</div>

						</div>

					</div>

				</div>

				<div class="col-sm-6 col-lg-4">

					<div class="panel panel-default">
						<div class="panel-body status">
							<div class="who clearfix">
								<img src="<?php echo ASSETS_URL; ?>/img/avatars/sunny.png" alt="img" class="busy">
								<span class="name"><b>You</b> shared a blog</span>
								<span class="from"><b>1 days ago</b> via Mobile, Sydney, Australia</span>
							</div>
							<div class="text">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Quisque in mauris elit. Ut nec arcu pretium eros varius porta vitae sit amet ipsum. Suspendisse porttitor, libero in rutrum pretium, lectus arcu maximus massa, ut condimentum metus libero laoreet lectus. Phasellus a lectus pulvinar, lacinia sem quis, suscipit turpis.
									<br>
									<br>
									Nam ipsum orci, blandit in lectus ut, viverra vehicula nisl. Proin eu arcu ut neque tempus viverra nec ac tellus. <strong>[</strong><a href="javascript:void(0);">Keep reading</a><strong>]</strong>
							</div>
							<ul class="links">
								<li>
									<a href="javascript:void(0);"><i class="fa fa-thumbs-o-up"></i> Like</a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa fa-comment-o"></i> Comment</a>
								</li>
								<li>
									<a href="javascript:void(0);"><i class="fa fa-share-square-o"></i> Share</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-body status">
							<div class="who clearfix">
								<h4>Live Twitter Feed</h4>
							</div>
							<div class="text">

								<blockquote class="twitter-tweet">
									<p lang="en" xml:lang="en">
										Sunsets don’t get much better than this one over <a href="https://twitter.com/GrandTetonNPS" target="_blank">@GrandTetonNPS</a>. <a href="https://twitter.com/hashtag/nature?src=hash" target="_blank">#nature</a> <a href="https://twitter.com/hashtag/sunset?src=hash">#sunset</a> <a href="http://t.co/YuKy2rcjyU" target="_blank">pic.twitter.com/YuKy2rcjyU</a>
									</p>
									— US Dept of Interior (@Interior) <a href="https://twitter.com/Interior/status/463440424141459456" target="_blank">May 5, 2014</a>
								</blockquote>

							</div>
							<ul class="links text-right">
								<li class="">
									<a href="javascript:void(0);">Next <i class="fa fa-arrow-right"></i> </a>
								</li>
							</ul>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-body status">
							<div class="who clearfix">
								<h4>Live Chat</h4>
							</div>
							
							<div id="chat-body" class="chat-body custom-scroll">
								<ul>
									<li class="message">
										<img src="<?php echo ASSETS_URL; ?>/img/avatars/5.png" class="online" alt="">
										<div class="message-text">
											<time>
												2014-01-13
											</time> <a href="javascript:void(0);" class="username">Sadi Orlaf</a> Hey did you meet the new board of director? He's a bit of an geek if you ask me...anyway here is the report you requested. I am off to launch with Lisa and Andrew, you wanna join?
											<p class="chat-file row">
												<b class="pull-left col-sm-6"> <!--<i class="fa fa-spinner fa-spin"></i>--> <i class="fa fa-file"></i> report-2013-demographic-report-annual-earnings.xls </b>
												<span class="col-sm-6 pull-right"> <a href="javascript:void(0);" class="btn btn-xs btn-default">cancel</a> <a href="javascript:void(0);" class="btn btn-xs btn-success">save</a> </span>
											</p>
										</div>
									</li>
									<li class="message">
										<img src="<?php echo ASSETS_URL; ?>/img/avatars/sunny.png" class="online" alt="">
										<div class="message-text">
											<time>
												2014-01-13
											</time> <a href="javascript:void(0);" class="username">John Doe</a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i> 
										</div>
									</li>
								</ul>
							</div>

							<div class="chat-footer">

									<!-- CHAT TEXTAREA -->
									<div class="textarea-div">

										<div class="typearea">
											<textarea placeholder="Write a reply..." id="textarea-expand" class="custom-scroll"></textarea>
										</div>

									</div>

									<!-- CHAT REPLY/SEND -->
									<span class="textarea-controls">
										<button class="btn btn-sm btn-primary pull-right">
											Reply
										</button> <span class="pull-right smart-form" style="margin-top: 3px; margin-right: 10px;"> <label class="checkbox pull-right">
												<input type="checkbox" name="subscription" id="subscription">
												<i></i>Press <strong> ENTER </strong> to send </label> </span> <a href="javascript:void(0);" class="pull-left"><i class="fa fa-camera fa-fw fa-lg"></i></a> </span>

								</div>
						</div>
					</div>

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
		// PAGE RELATED SCRIPTS
	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>