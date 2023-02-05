<?php

//initilize the page
require_once 'init.web.php';

/*---------------- PHP Custom Scripts ---------

YOU CAN SET CONFIGURATION VARIABLES HERE BEFORE IT GOES TO NAV, RIBBON, ETC.
E.G. $page_title = "Custom Title" */

$page_title = "Projects";

/* ---------------- END PHP Custom Scripts ------------- */

//include header
//you can add your custom css in $page_css array.
//Note: all css files are inside css/ folder
$page_css[] = "your_style.css";
include("inc/header.php");

//include left panel (navigation)
//follow the tree in inc/config.ui.php
$page_nav["views"]["sub"]["projects"]["active"] = true;
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

		<!-- row -->
		<div class="row">
			
			<!-- col -->
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
				<h1 class="page-title txt-color-blueDark">
					
					<!-- PAGE HEADER -->
					<i class="fa-fw fa fa-file-text-o"></i> 
						Projects 
					<span>>  
						Overview
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
				<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					
					<div class="alert alert-info">
						<strong>NOTE:</strong> All the data is loaded from a seperate JSON file
					</div>

					<!-- Widget ID (each widget will need unique ID)-->
					<div class="jarviswidget well" id="wid-id-0">
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
							<span class="widget-icon"> <i class="fa fa-comments"></i> </span>
							<h2>Widget Title </h2>				
							
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
								
								<table id="example" class="display projects-table table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th></th><th>Projects</th><th><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> EST</th>
											<th>Contacts</th>
											<th>Status</th>
											<th><i class="fa fa-circle txt-color-darken font-xs"></i> Target/ <i class="fa fa-circle text-danger font-xs"></i> Actual</th>
											<th><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Starts</th>
											<th><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Ends</th>
											<th>Tracker</th>
										</tr>
									</thead>
								</table>

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

				<!-- a blank row to get started -->
				<div class="col-sm-12">
					<!-- your contents here -->
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
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/dataTables.colVis.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/dataTables.tableTools.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo ASSETS_URL; ?>/js/plugin/datatable-responsive/datatables.responsive.min.js"></script>

<script type="text/javascript">

	$(document).ready(function() {
		
		/* Formatting function for row details - modify as you need */
		function format ( d ) {
		    // `d` is the original data object for the row
		    return '<table cellpadding="5" cellspacing="0" border="0" class="table table-hover table-condensed">'+
		        '<tr>'+
		            '<td style="width:100px">Project Title:</td>'+
		            '<td>'+d.name+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Deadline:</td>'+
		            '<td>'+d.ends+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Extra info:</td>'+
		            '<td>And any further details here (images etc)...</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Comments:</td>'+
		            '<td>'+d.comments+'</td>'+
		        '</tr>'+
		        '<tr>'+
		            '<td>Action:</td>'+
		            '<td>'+d.action+'</td>'+
		        '</tr>'+
		    '</table>';
		}

		// clears the variable if left blank
	    var table = $('#example').DataTable( {
	    	"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
				"t"+
				"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
	        "ajax": "data/dataList.json",
	        "bDestroy": true,
	        "iDisplayLength": 15,
	        "oLanguage": {
			    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
			},
	        "columns": [
	            {
	                "class":          'details-control',
	                "orderable":      false,
	                "data":           null,
	                "defaultContent": ''
	            },
	            { "data": "name" },
	            { "data": "est" },
	            { "data": "contacts" },
	            { "data": "status" },
	            { "data": "target-actual" },
	            { "data": "starts" },
	            { "data": "ends" },
	            { "data": "tracker" },
	        ],
	        "order": [[1, 'asc']],
	        "fnDrawCallback": function( oSettings ) {
		       runAllCharts()
		    }
	    } );


	     
	    // Add event listener for opening and closing details
	    $('#example tbody').on('click', 'td.details-control', function () {
	        var tr = $(this).closest('tr');
	        var row = table.row( tr );
	 
	        if ( row.child.isShown() ) {
	            // This row is already open - close it
	            row.child.hide();
	            tr.removeClass('shown');
	        }
	        else {
	            // Open this row
	            row.child( format(row.data()) ).show();
	            tr.addClass('shown');
	        }
	    });

	})

</script>

<?php 
	//include footer
	include("inc/google-analytics.php"); 
?>