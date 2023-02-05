<?php

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Image Cropping";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["forms"]["sub"]["imagecrop"]["active"] = true;
include("inc/nav.php");

?>

<style type="text/css">
	/* Apply these styles only when #preview-pane has
	 been placed within the Jcrop widget */
	.jcrop-holder #preview-pane {
		display: block;
		position: absolute;
		z-index: 200;
		right: -280px;
		padding: 3px;
		border: 1px rgba(0,0,0,.4) solid;
		background-color: white;
		-webkit-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.1);
		-moz-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.1);
		box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.1);
	}

	/* The Javascript code will set the aspect ratio of the crop
	 area based on the size of the thumbnail preview,
	 specified here */
	#preview-pane .preview-container {
		width: 250px;
		height: 170px;
		overflow: hidden;
	}
	
	.optdual {
		position: relative;
	}
	.optdual .offset {
		position: absolute;
		left: 18em;
	}
	.optlist label {
		width: 16em;
		display: block;
	}
	#dl_links {
		margin-top: .5em;
	}

</style>

<!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
	<?php
		//configure ribbon (breadcrumbs) array("name"=>"url"), leave url empty if no url
		//$breadcrumbs["New Crumb"] => "http://url.com"
		$breadcrumbs[$page_nav["forms"]["title"]] = "";
		include("inc/ribbon.php");
	?>
	
	<!-- MAIN CONTENT -->
	<div id="content">
		<!-- row -->
		<div class="row">

			<!-- col -->
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<h1 class="page-title txt-color-blueDark"><!-- PAGE HEADER --><i class="fa-fw fa fa-pencil-square-o"></i> Forms <span>>
					Image Editor </span></h1>
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
				<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<div class="alert alert-danger hidden-lg hidden-md hidden-sm">
						<b>Please note:</b>
						This plugin is non-responsive
					</div>

					<!-- Widget ID (each widget will need unique ID)-->

					<div class="jarviswidget jarviswidget-sortable" id="wid-id-0" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false" role="widget" style="">
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
						<header role="heading">
							<span class="widget-icon"> <i class="fa fa-file-image-o txt-color-darken"></i> </span>
							<h2 class="hidden-xs hidden-sm">jcrop </h2>

							<ul class="nav nav-tabs pull-right in" id="myTab">
								
								<li class="active">
									<a data-toggle="tab" href="#s1"><i class="fa fa-crop text-success"></i> <span class="hidden-mobile hidden-tablet">API</span></a>
								</li>
								
								<li>
									<a data-toggle="tab" href="#s2"><i class="fa fa-crop text-primary"></i> <span class="hidden-mobile hidden-tablet">Default</span></a>
								</li>

								<li>
									<a data-toggle="tab" href="#s3"><i class="fa fa-crop text-warning"></i> <span class="hidden-mobile hidden-tablet">Basic</span></a>
								</li>

								<li>
									<a data-toggle="tab" href="#s4"><i class="fa fa-crop text-danger"></i> <span class="hidden-mobile hidden-tablet">Aspect Ratio</span></a>
								</li>

								<li>
									<a data-toggle="tab" href="#s5"><i class="fa fa-crop txt-color-purple"></i> <span class="hidden-mobile hidden-tablet">Animations</span></a>
								</li>

								<li>
									<a data-toggle="tab" href="#s6"><i class="fa fa-crop txt-color-pink"></i> <span class="hidden-mobile hidden-tablet">Styling</span></a>
								</li>

							</ul>

							<span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
						</header>

						<!-- widget div-->
						<div role="content">
							<!-- widget edit box -->

							<div class="widget-body">
								<!-- content -->
								<div id="myTabContent" class="tab-content">

									<!-- new tab: API interface -->
									<div class="tab-pane fade clearfix active in" id="s1">

										<h4 class="margin-bottom-10">API Interface — real-time API example</h4>
										
										<div class="alert alert-info">
											<b>Experimental shader active.</b>
											Jcrop now includes a shading mode that facilitates building
											better transparent Jcrop instances. The experimental shader is less
											robust than Jcrop's default shading method and should only be
											used if you require this functionality.
											<br>
											View jcrop's documentation by going to: <a href="http://deepliquid.com/content/Jcrop.html" target="_blank">http://deepliquid.com/content/Jcrop.html</a>
										</div>
										
										<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-7.jpg" id="target-5" alt="[Jcrop Example]" class="pull-left" />
				
										<div class="pull-left padding-gutter padding-top-0 padding-bottom-0 jcrop-api-tabs-options">
											
											<fieldset>

												<legend>
													Option Toggles
												</legend>										

												<span class="requiresjcrop">
													<button id="setSelect" class="btn btn-default btn-sm">
														setSelect
													</button>
													<button id="animateTo" class="btn btn-default btn-sm">
														animateTo
													</button>
													<button id="release" class="btn btn-default btn-sm">
														Release
													</button>
													<button id="disable" class="btn btn-default btn-sm">
														Disable
													</button> 
												</span>
												<button id="enable" class="btn btn-default btn-sm" style="display:none;">
													Re-Enable
												</button>
												<button id="unhook" class="btn btn-default btn-sm">
													Destroy!
												</button>
												<button id="rehook" class="btn btn-default btn-sm" style="display:none;">
													Attach Jcrop
												</button>
											</fieldset>
											
											<fieldset class="optdual requiresjcrop">
												<legend>
													Option Toggles
												</legend>
												<div class="optlist offset">
													<label class="margin-top-0">
													  <input type="checkbox" class="checkbox style-0" id="ar_lock">
													  <span>Aspect ratio</span>
													</label>
													
													<label class="">
													  <input type="checkbox" class="checkbox style-0" id="size_lock">
													  <span>minSize/maxSize setting</span>
													</label>
												</div>
												<div class="optlist">
													<label class="margin-top-0">
													  <input type="checkbox" class="checkbox style-0" id="can_click">
													  <span>Allow new selections</span>
													</label>
													
													<label class="">
													  <input type="checkbox" class="checkbox style-0" id="can_move">
													  <span>Selection can be moved</span>
													</label>
													
													<label class="">
													  <input type="checkbox" class="checkbox style-0" id="can_size">
													  <span>Resizable selection</span>
													</label>

												</div>
											</fieldset>
				
											<fieldset class="requiresjcrop changeImages">
												<legend>
													Change Image
												</legend>
												<div class="btn-group">
													<button class="btn btn-default" id="img2">
														Lego
													</button>
													<button class="btn btn-default active" id="img1">
														Breakdance
													</button>
													<button class="btn btn-default" id="img3">
														Dragon Fly
													</button>
												</div>
											</fieldset>
										
										</div>	

									</div>
									<!-- end s1 tab pane -->

									<!-- new tab: Default -->
									<div class="tab-pane clearfix fade" id="s2">

										<h4 class="margin-bottom-10">Default Behaviour</h4>

										<div class="alert alert-info">
											<b>This example demonstrates the default behavior of Jcrop.</b>
											<br />
											Since no event handlers have been attached it only performs
											the cropping behavior.
										</div>

										<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-11.jpg" id="target" alt="[Jcrop Example]" />

									</div>
									<!-- end s1 tab pane -->

									<!-- new tab: Basic handler -->
									<div class="tab-pane clearfix fade" id="s3">

										<h4 class="margin-bottom-10">Basic Handler — basic form integration</h4>

										<div class="alert alert-info">
											<b>An example with a basic event handler.</b> Here we've tied
											several form values together with a simple event handler invocation.
											The result is that the form values are updated in real-time as
											the selection is changed using Jcrop's <em>onChange</em> handler.
										</div>

										<!-- This is the image we're attaching Jcrop to -->
										<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-10.jpg" id="target-2" alt="[Jcrop Example]" />

										<!-- This is the form that our event handler fills -->
										<form id="coords"
										class="coords margin-top-10"
										onsubmit="return false;"
										action="http://example.com/post.php">

											<div class="inline-labels">
												<label>X1
													<input type="text" size="4" id="x1" name="x1" />
												</label>
												<label>Y1
													<input type="text" size="4" id="y1" name="y1" />
												</label>
												<label>X2
													<input type="text" size="4" id="x2" name="x2" />
												</label>
												<label>Y2
													<input type="text" size="4" id="y2" name="y2" />
												</label>
												<label>W
													<input type="text" size="4" id="w" name="w" />
												</label>
												<label>H
													<input type="text" size="4" id="h" name="h" />
												</label>
											</div>
										</form>

									</div>
									<!-- end s2 tab pane -->

									<!-- new tab: Aspect ratio -->
									<div class="tab-pane clearfix fade" id="s4">

										<h4 class="margin-bottom-10">Aspect Ratio w/ Preview Pane — nice visual example</h4>

										<div class="alert alert-info">
											<b>An example implementing a preview pane.</b>
											Obviously the most visual demo, the preview pane is accomplished
											entirely outside of Jcrop with a simple jQuery-flavored callback.
											This type of interface could be useful for creating a thumbnail
											or avatar. The onChange event handler is used to update the
											view in the preview pane.
										</div>

										<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-9.jpg" id="target-3" alt="[Jcrop Example]" />

									</div>
									<!-- end s3 tab pane -->

									<!-- new tab: animation/transitions -->
									<div class="tab-pane clearfix fade" id="s5">

										<h4 class="margin-bottom-10">Animation/Transitions — animation/fading demo</h4>

										<div class="alert alert-info">
											<b>Experimental shader active.</b>
											Jcrop now includes a shading mode that facilitates building
											better transparent Jcrop instances. The experimental shader is less
											robust than Jcrop's default shading method and should only be
											used if you require this functionality.
										</div>

										<div class="row">

											<div class="col-sm-12 col-md-12 col-lg-12">

												<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-7.jpg" id="target-4" alt="Jcrop Image" class="pull-left" />

					
												<div id="interface" class="pull-left padding-gutter padding-top-0 padding-bottom-0">
													<p>
														<label>
														  <input type="checkbox" class="checkbox style-0" id="fadetog">
														  <span>Enable fading (bgFade: true)</span>
														</label>
													</p>
													<p>
													<label>
													  <input type="checkbox" class="checkbox style-0" id="shadetog">
													  <span>Use experimental shader (shade: true)</span>
													</label>
													</p>
												
												</div>
											</div>

										</div>

									</div>
									<!-- end s4 tab pane -->

									<!-- new tab: Styling -->
									<div class="tab-pane fade clearfix padding-10 no-padding-bottom" id="s6">

										<h4 class="margin-bottom-10">Styling Example — style Jcrop dynamically with CSS</h4>

										<img src="<?php echo ASSETS_URL; ?>/img/superbox/superbox-full-16.jpg" id="target-6" alt="[Jcrop Example]" />
				
										<div class="pull-left pull-left padding-gutter padding-top-0 padding-bottom-0">
											<fieldset>
												<legend>
													Manipulate classes
												</legend>
												<div class="btn-group" id="buttonbar">
													<button class="btn btn-default active" data-setclass="jcrop-light" id="radio1">
														jcrop-light
													</button>
													<button class="btn btn-default" data-setclass="jcrop-dark" id="radio2">
														jcrop-dark
													</button>
													<button class="btn btn-default" data-setclass="jcrop-normal" id="radio3">
														normal
													</button>
												</div>
											</fieldset>
										</div>

									</div>
									<!-- end s6 tab pane -->

								</div>

								<!-- end content -->
							</div>

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


<script src="<?php echo ASSETS_URL; ?>/js/plugin/jcrop/jquery.Jcrop.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/jcrop/jquery.color.min.js"></script>

<script type="text/javascript">
			
$(document).ready(function() {

	//console.log("load and ready");


	// default
	
	var default_handler = function(){
		$('#target').Jcrop();
	}

	var basic_handler = function() {

		var jcrop_api;

		$('#target-2').Jcrop({
			onChange : showCoords,
			onSelect : showCoords,
			setSelect: [ 48, 34, 391, 302, 343, 268 ]
		}, function() {
			jcrop_api = this;
		});

		$('#coords').on('change', 'input', function(e) {
			var x1 = $('#x1').val(), x2 = $('#x2').val(), y1 = $('#y1').val(), y2 = $('#y2').val();
			jcrop_api.setSelect([x1, y1, x2, y2]);
		});

		// Simple event handler, called from onChange and onSelect
		// event handlers, as per the Jcrop invocation above
		function showCoords(c) {
			$('#x1').val(c.x);
			$('#y1').val(c.y);
			$('#x2').val(c.x2);
			$('#y2').val(c.y2);
			$('#w').val(c.w);
			$('#h').val(c.h);
		};

		function clearCoords() {
			$('#coords input').val('');
		};

	};


	// aspect ratio

	var aspect_ratio = function() {
		var thumbnail, jcrop_api;

		  // Instantiate Jcrop
		  $('#target-3').Jcrop({
		    aspectRatio: 3/2,
		    setSelect: [ 0, 50, 250, 170 ]
		  },function(){
		    var jcrop_api = this;
		    thumbnail = this.initComponent('Thumbnailer', { width: 250, height: 170 });
		    this.ui.preview = thumbnail;
		  });
	}
	// end aspect_ratio



	var animation_handler = function() {

		var jcrop_api;

		$('#target-4').Jcrop({
			bgFade : true,
			bgOpacity : .8,
			setSelect : [60, 70, 540, 330]
		}, function() {
			jcrop_api = this;
		});

		$('#fadetog').change(function() {
			jcrop_api.setOptions({
				bgFade : this.checked
			});
		}).attr('checked', 'checked');

		$('#shadetog').change(function() {
			if (this.checked)
				$('#shadetxt').slideDown();
			else
				$('#shadetxt').slideUp();
			jcrop_api.setOptions({
				shade : this.checked
			});
		}).attr('checked', false);

		// Define page sections
		var sections = {
			bgc_buttons : 'Change bgColor',
			bgo_buttons : 'Change bgOpacity',
			anim_buttons : 'Animate Selection'
		};
		// Define animation buttons
		var ac = {
			anim1 : [50, 50, 300, 300],
			anim2 : [20, 20, 560, 360],
			anim3 : [70, 70, 256, 276],
			anim4 : [150, 100, 200, 200],
			anim5 : [136, 55, 372, 183]
		};
		// Define bgOpacity buttons
		var bgo = {
			Low : .8,
			Mid : .5,
			High : .2,
			Full : 0
		};
		// Define bgColor buttons
		var bgc = {
			R : '#900',
			B : '#4BB6F0',
			Y : '#F0B207',
			G : '#46B81C',
			W : 'white',
			K : 'black'
		};
		// Create fieldset targets for buttons
		for (i in sections)insertSection(i, sections[i]);

		function create_btn(c) {
			var $o = $('<button />').addClass('btn btn-default btn-small');
			if (c)
				$o.append(c);
			return $o;
		}

		var a_count = 1;
		// Create animation buttons
		for (i in ac) {
			$('#anim_buttons .btn-group').append(create_btn(a_count++).click(animHandler(ac[i])), ' ');
		}

		$('#anim_buttons .btn-group').append(create_btn('Bye!').click(function(e) {
			$(e.target).addClass('active');
			$(e.target).closest('.btn-group').find('.active').removeClass('active');
			jcrop_api.animateTo([300, 200, 300, 200]);
			return false;
		}));

		// Create bgOpacity buttons
		for (i in bgo) {
			$('#bgo_buttons .btn-group').append(create_btn(i).click(setoptHandler('bgOpacity', bgo[i])), ' ');
		}
		// Create bgColor buttons
		for (i in bgc) {
			$('#bgc_buttons .btn-group').append(create_btn(i).css({
				background : bgc[i],
				color : ((i == 'K') || (i == 'R')) ? 'white' : 'black'
			}).click(setoptHandler('bgColor', bgc[i])), ' ');
		}
		// Function to insert named sections into interface
		function insertSection(k, v) {
			$('#interface').prepend($('<fieldset></fieldset>').attr('id', k).append($('<legend></legend>').append(v), '<div class="btn-toolbar"><div class="btn-group"></div></div>'));
		};
		// Handler for option-setting buttons
		function setoptHandler(k, v) {
			return function(e) {
				$(e.target).closest('.btn-group').find('.active').removeClass('active');
				$(e.target).addClass('active');
				var opt = { };
				opt[k] = v;
				jcrop_api.setOptions(opt);
				return false;
			};
		};
		// Handler for animation buttons
		function animHandler(v) {
			return function(e) {
				$(e.target).addClass('active');
				$(e.target).closest('.btn-group').find('.active').removeClass('active');
				jcrop_api.animateTo(v);
				return false;
			};
		};

		$('#bgo_buttons .btn:first,#bgc_buttons .btn:last').addClass('active');
		$('#interface').show();

	}
	// end animation_handler

	// styling_handler
	var styling_handler = function () {
		var api;
		$('#target-6').Jcrop({
			// start off with jcrop-light class
			bgOpacity : 0.5,
			bgColor : 'white',
			addClass : 'jcrop-light'
		}, function() {
			api = this;
			api.setSelect([130, 65, 130 + 350, 65 + 285]);
			api.setOptions({
				bgFade : true
			});
			
		});
		$('#buttonbar').on('click', 'button', function(e) {
			var $t = $(this), $g = $t.closest('.btn-group');
			$g.find('button.active').removeClass('active');
			$t.addClass('active');
			$g.find('[data-setclass]').each(function() {
				var $th = $(this), c = $th.data('setclass'), a = $th.hasClass('active');
				if (a) {
					switch(c) {

						case 'jcrop-light':
							api.setOptions({
								bgColor : 'white',
								bgOpacity : 0.5
							});
							break;

						case 'jcrop-dark':
							api.setOptions({
								bgColor : 'black',
								bgOpacity : 0.8
							});
							break;

						case 'jcrop-normal':
							api.setOptions({
								bgColor : $.Jcrop.defaults.bgColor,
								bgOpacity : $.Jcrop.defaults.bgOpacity
							});
							break;
					}
				} 
					
			});
		});

	};
	function random_coords() {
      return [
        Math.random()*300,
        Math.random()*200,
        (Math.random()*400),
        (Math.random()*300)
      ];
    }

	var api_handler = function() {
		// The variable jcrop_api will hold a reference to the
		// Jcrop API once Jcrop is instantiated.
		var cb;
		$('#target-5').Jcrop({
			}, function() {
				interface_load(this);
		});
		function interface_load(obj){
			cb = obj;
			cb.newSelection();
			cb.setSelect(random_coords());
			 function run_cleanup(){
		      var m = cb.ui.multi, s = cb.ui.selection;
		      
		      for(var i=0;i<m.length;i++)
		        if (s !== m[i]) m[i].remove();
		        
		      cb.ui.multi = [ s ];
		      s.center();
		      s.focus();
		    }
			$('.jcrop-api-tabs-options').on('click', 'button', function () {
				id = $(this).attr('id');
				switch(id){
					case 'setSelect':
						cb.setSelect(random_coords());
						break;
					case 'animateTo':
						cb.animateTo(random_coords());
						break;
					case 'release':
						cb.setOptions({setSelect: null});
						run_cleanup();
						break;
					case 'disable' : 
						cb.setOptions(allOptions(false));
						$('#enable').show();
						$('.requiresjcrop').hide();
					break;
					case 'enable' :
						cb.setOptions(allOptions(true));
						console.log(allOptions(true));
						$('#enable').hide();
						$('.requiresjcrop').show();
					break;
					case 'unhook' :
						cb.destroy();
						$('#unhook,.requiresjcrop,#enable').hide();
						$('#rehook').show();
					break;
					case 'rehook' :									
						api_handler();
						$('#rehook').hide();
						$('#unhook,.requiresjcrop').show();
					break;
				}
			})
			function allOptions(boolean) {
			 	var array = {
					canResize : boolean,
					allowSelect: boolean,
					canDrag: boolean,
					canResize: boolean
				};
				return array;
			};
			function checked(element) {
				return document.getElementById(element).checked;
			}
			$('.optlist').on('change', 'input[type="checkbox"]', function () {
				id = $(this).attr('id');
				switch(id){
					case 'can_click':
						cb.setOptions({
							allowSelect: checked(id) ? true : false
						});
						break;
					case 'ar_lock' : 
						cb.setOptions({
							aspectRatio: checked(id) ? 5/3 : false
						});
						break;
					case 'can_move' : 
						cb.setOptions({
							canDrag : checked(id) ? true : false
						});
						break;
					case 'can_size' : 
						cb.setOptions({
							canResize : checked(id) ? true : false
						});
						break;
					case 'size_lock' : 
						cb.setOptions({
							minSize: checked(id) ? [100,100]: [50,50],
							maxSize: checked(id) ? [400,350]: [0,0]
						});
						break;
					

				}

			});
			function checkActive(element,cl) {
				if($(element).hasClass(cl)){
					return true;
				}else{
					$(element).parent().children().removeClass(cl);
					$(element).addClass(cl);
					return true;
				}
			}
			$('.changeImages').on('click', 'button', function () {
				var id = $(this).attr('id');
				checkActive(this, 'active');
				switch(id){
					case 'img1':
						cb.setImage('img/superbox/superbox-full-7.jpg', function () {
							cb.destroy();
							api_handler();
						});
					break;
					case 'img2':
						cb.setImage('img/superbox/superbox-full-24.jpg',function () {
							cb.destroy();
							api_handler();
						});
					break;
					case 'img3':
						cb.setImage('img/superbox/superbox-full-20.jpg');
						cb.destroy();
						api_handler();
					break;
				}
			})
			
		}
	};
	$('#can_click, #can_move, #can_size').attr('checked','checked');
	basic_handler();
	default_handler();
	api_handler();
	styling_handler();
	animation_handler();
	aspect_ratio();
	
});

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>