<?php
require 'vendor/autoload.php';
require 'config.php';
$client = new MongoDB\Client("mongodb://139.59.177.80:27017");
$db = $client->selectDatabase('test');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>t h e m e l o c k . c o m</title>
        <!-- Global stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
        <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
        <link href="assets/css//bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/css//core.css" rel="stylesheet" type="text/css">
        <link href="assets/css//components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/colors.css" rel="stylesheet" type="text/css">
        <link href="assets/css/box-style.css" rel="stylesheet" type="text/css">
        <!-- /global stylesheets -->
        <!-- Core JS files -->

        <script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
        <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/ui/nicescroll.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/ui/drilldown.js"></script>
        <script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
        <script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/tables/datatables/extensions/tools.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>
        <script type="text/javascript" src="assets/js/pages/form_bootstrap_select.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_select.min.js"></script>
        <!-- /core JS files
        <!-- Theme JS files -->
        <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
        <script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
        <script type="text/javascript" src="assets/js/pages/datatables_extension_tools.js"></script>
        <script type="text/javascript" src="assets/js/pages/form_bootstrap_select.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_select.min.js"></script>
        <!-- For Elastic textarea plugin-->
        <script type="text/javascript" src="assets/js/plugins/forms/inputs/autosize.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/forms/inputs/formatter.min.js"></script>
        <script type="text/javascript" src="assets/js/core/app.js"></script>
        <script type="text/javascript" src="assets/js/plugins/notifications/bootbox.min.js"></script>
        <script type="text/javascript" src="assets/js/plugins/notifications/sweet_alert.min.js"></script>
        <script type="text/javascript" src="assets/js/modal.js"></script>
        
        <script type="text/javascript" src="assets/js/my_checkbox.js"></script>
		<script type="text/javascript">
		function Add(){ 
		$(".dynamicField").append('<div class="form-group"><select id="formInput41" class="bootstrap-select" data-live-search="true" data-width="100%"><option>Technology</option></select>'+'</div>');
        }
		
		/*$(".dynamicField").append( '<div class="form-group">'+ '<select id="formInput51" class="bootstrap-select" data-live-search="true" data-width="100%">														<option>Technology</option>                                                														<option>Human Resources</option>                                                 													<option>Sales and Support</ption>                                                													</select>'+ '<textarea class="form-control impact-value elastic" rows="1"></textarea>'+ '</div>'+ "<i class='btnDelete fa fa-trash'><i>"); $(".btnDelete").bind("click", Delete); 
		}*/
		
		/*function Delete(){ var par = $(this).parent().parent(); //tr 
			par.remove(); }*/

        
        
</script>
		</script>
        <style type="text/css">
            div.DTTT_container {display: none;visibility: hidden;}
        </style>

        <!-- /theme JS files -->
    </head>
    <body>
        <!-- Main navbar -->
        <div class="navbar navbar-inverse">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <img src="assets/images/logo_light.png" alt="">
                </a>
                <ul class="nav navbar-nav pull-right visible-xs-block">
                    <li>
                        <a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a>
                    </li>
                </ul>
            </div>
            <div class="navbar-collapse collapse" id="navbar-mobile">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#"><i class="icon-search4"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-help"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-bell3"></i><span class="badge bg-warning-400">5</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="icon-bubbles4"></i><span class="visible-xs-inline-block position-right">Messages</span><span class="badge bg-warning-400">2</span></a>
                    </li>
                    <li class="dropdown dropdown-user">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <img src="assets/images/mary.png" alt="">
                            <span>Victoria Joe Baker</span>
                            <i class="caret"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="#"><i class="icon-user-plus"></i> My profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-coins"></i> My balance</a>
                            </li>
                            <li>
                                <a href="#"><span class="badge badge-warning pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="icon-cog5"></i> Account settings</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-switch2"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-switch2"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /main navbar -->
        <!-- Second navbar -->
        <div class="navbar navbar-default" id="navbar-second">
            <ul class="nav navbar-nav no-border visible-xs-block">
                <li>
                    <a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a>
                </li>
            </ul>
            <div class="navbar-collapse collapse" id="navbar-second-toggle">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-strategy position-left"></i> Starter kit <span class="caret"></span></a>
                        <ul class="dropdown-menu width-200">
                            <li class="dropdown-header">Basic layouts</li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-grid2"></i> Columns</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header highlight">Options</li>
                                    <li>
                                        <a href="starters/1_col.html">One column</a>
                                    </li>
                                    <li>
                                        <a href="starters/2_col.html">Two columns</a>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a href="#">Three columns</a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-header highlight">Sidebar position</li>
                                            <li>
                                                <a href="starters/3_col_dual.html">Dual sidebars</a>
                                            </li>
                                            <li>
                                                <a href="starters/3_col_double.html">Double sidebars</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="starters/4_col.html">Four columns</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-paragraph-justify3"></i> Navbars</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header highlight">Fixed navbars</li>
                                    <li>
                                        <a href="starters/layout_navbar_fixed_main.html">Fixed main navbar</a>
                                    </li>
                                    <li>
                                        <a href="starters/layout_navbar_fixed_secondary.html">Fixed secondary navbar</a>
                                    </li>
                                    <li>
                                        <a href="starters/layout_navbar_fixed_both.html">Both navbars fixed</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-header">Optional layouts</li>
                            <li>
                                <a href="starters/layout_boxed.html"><i class="icon-align-center-horizontal"></i> Fixed width</a>
                            </li>
                            <li>
                                <a href="starters/layout_sidebar_sticky.html"><i class="icon-flip-vertical3"></i> Sticky sidebar</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="changelog.html"><i class="icon-history position-left"></i>
						Changelog<span class="label label-inline position-right bg-success-400">1.0</span></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog3"></i><span class="visible-xs-inline-block position-right">Share</span><span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a href="#"><i class="icon-user-lock"></i> Account security</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-statistics"></i> Analytics</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-accessibility"></i> Accessibility</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="icon-gear"></i> All settings</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /second navbar -->
        <!-- Page header -->
        <div class="page-header">
            <div class="page-header-content">
                <div class="page-title">
                    <h4><i class="icon-stack2 position-left"></i><span class="text-semibold">Home</span> - Welcome<small class="display-block"></small></h4>
                </div>
                <div class="heading-elements">
                    <div class="heading-btn-group">
                        <a href="javascript:history.back()" class="btn btn-link btn-float has-text"><i class="icon-arrow-right6 text-primary"></i> <span>Back</span></a>
                    </div>
                </div>
            </div>
            <style>
            .flashSuccess{
    background: #449d44;
    color: white;
    padding: 15px 5px;
    font-size: 20px;
    position: absolute;
    width: 100%;
    text-align: center; position: relative;
   }
   </style>
            <script>
            

$( document ).ready(function() {
    $(".flashMsg").hide();
  $(".flashMsg").slideUp(2000);
});
</script>

<p class='flashMsg flashSuccess'> Action Successfully Executed! </p>


        </div>
        <!-- /page header -->
        <!-- Page container -->
        <div class="page-container">
            <!-- Page content -->
            <div class="page-content">
                <!-- Main content : row for risk identification list-->
                <div class="row" id="risk_identification_list">
                    <?php //require('risk_identification_list.php'); ?>
                    <div class="col-md-12"> 
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title"><b>Manage Risk Identification</b></h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li>
                                            <a data-action="collapse"></a>
                                        </li>
                                        <li>
                                            <a data-action="reload"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body">
                                Basic panel with panel controls
                                <!-- Basic TableTools example -->
                                <table class="table" id="risk_table">
                                    <thead>
                                        <tr>
                                            <th class="col-md-1">Risk ID</th>
                                            <th class="col-md-4">Risk Defination</th>
                                            <th class="col-md-2">Risk Category</th>
                                            <th class="col-md-2">Business Unit</th>
                                            <th class="col-md-1">Status</th>
                                            <th class="col-md-1 text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="risk_identification_list">
                                        
                                        <!-- <tr>
                                            <td>R.2</td>
                                            <td>Risk of sensitive information loss due to vulnerability in IT systems, resulting in financial loss of few minllion pounds. This may become serious reputation risk in short to medium term.</td>
                                            <td>Regulatory</td>
                                            <td>
                                                <a href="#">Sales and Support</a>
                                            </td>
                                            <td><span class="label label-info">Active</span></td>
                                            <td>
                                                <ul class="icons-list text-center">
                                                    <li>
                                                        <button type="button" class="btn btn-default btn-xs">
                                                            <i class="icon-eye2"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-default btn-xs">
                                                            <i class="icon-database-edit2"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-default btn-xs">
                                                            <i class="icon-copy3"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-danger btn-xs">
                                                            <i class="icon-cross"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>R.3</td>
                                            <td>Risk of sensitive information loss due to vulnerability in IT systems, resulting in financial loss of few minllion pounds. This may become serious reputation risk in short to medium term.</td>
                                            <td>Regulatory</td>
                                            <td>
                                                <a href="#">Information Technology</a>
                                            </td>
                                            <td><span class="label label-info">Active</span></td>
                                            <td>
                                                <ul class="icons-list text-center">
                                                    <li>
                                                        <button type="button" class="btn btn-default btn-xs">
                                                            <i class="icon-eye2"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-default btn-xs">
                                                            <i class="icon-database-edit2"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-default btn-xs">
                                                            <i class="icon-copy3"></i>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="btn btn-danger btn-xs">
                                                            <i class="icon-cross"></i>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr> -->
                                    </tbody>
                                </table>
                                <!-- /basic TableTools example -->
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /main content -->
                <div class="row">
                <form id="risk_identification">
                    <div class="col-md-12">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h6 class="panel-title"><b>Risk Identification Record</b></h6>
                                <div class="heading-elements">
                                    <ul class="icons-list">
                                        <li>
                                            <a data-action="collapse"></a>
                                        </li>
                                        <li>
                                            <a data-action="reload"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group"> 
                                                    <label class="control-label" for="formInput35">Risk ID</label>
                                                    <input type="text" name="risk_id" class="form-control" id="formInput35">
                                                </div>                                                 
                                            </div>
                                            <div class="col-md-10">
                                                <div class="form-group"> 
                                                    <label class="control-label" for="formInput41">Risk Category</label>                                                     
                                                <a data-toggle="modal" data-target="#modal_riskcategoryinfo" style="color:#333333;"><i class="icon-help pull-right"></i></a>
                                                    <select name="risk_category" id="risk_category" class="bootstrap-select" data-live-search="true" data-width="100%"> 
                                                        <option>Legal and Regulatory</option>                                                         
                                                        <option>Operational</option>                                                         
                                                        <option>Strategic</option>                                                         
                                                    </select>
                                                </div>                                                 
                                            </div>
                                        </div>
                                        <style type="text/css">
                                            .event-textarea{
                                                margin-top: 26px;
                                            }
                                            .risk-status{
                                                margin-top: 9px;
                                            }
                                        </style>
                                         <div class="form-group">
                                            <label class="control-label ">Risk Status</label>
                                            <div class="risk-status">
  <?php
    $collection = $db->MasterRiskStatus;
    $cursor = $collection->find(); 
    foreach ($cursor as $entry) {
     
?>
                                                <label class="radio-inline">
                                                    <input type="radio" name="risk_status" class="styled" checked="checked" value="<?php echo $entry['risk-status'];?>">
                                                    <?php echo $entry['risk-status'];?>
                                                </label>
<?php } ?>                                                

                                                <!-- <label class="radio-inline">
                                                    <input type="radio" value="inactive" name="risk_status" class="styled">
                                                    Inactive
                                                </label>
                                                     <label class="radio-inline">
                                                    <input type="radio" value="emerging" name="risk_status" class="styled">
                                                    Emerging
                                                </label>
                                                     <label class="radio-inline">
                                                    <input type="radio" value="archived" name="risk_status" class="styled">
                                                    Archived
                                                </label> -->
                                            </div>             
                                        </div>
                                     
                                    
                                        <div class="form-group event-textarea"> 
                                            <label class="control-label" for="formInput57">Event </label>                                             
                                            <a data-toggle="modal" data-target="#modal_event" style="color:#333333;"><i class="icon-plus-circle2 pull-right"></i></a>
                                            <textarea id="event_selected_text" name="event_selected_text" class="form-control elastic event-value" rows="1"></textarea>
                                        </div>
                                        <div class="form-group"> 
                                            <label class="control-label" for="formInput58">Vulnerability</label>                                             
                                            <a data-toggle="modal" data-target="#modal_vulnerability" style="color:#333333;"><i class="icon-plus-circle2 pull-right"></i></a>
                                            <textarea name="vul_selected_text" id="vul_selected_text" class="form-control vulnerability-value elastic" rows="1"></textarea>
                                        </div>
                                        <div class="form-group"> 
                                            <label class="control-label" for="formInput57">Impact</label>                                             
                                            <a data-toggle="modal" data-target="#modal_impact" style="color:#333333;"><i class="icon-plus-circle2 pull-right"></i></a> 
                                            <textarea name="impact_selected_text" id="impact_selected_text" class="form-control impact-value elastic" rows="1"></textarea>
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group"> 
                                            <label class="control-label" for="formInput51">Select Business Unit</label>                                             
                                            <select name="business_unit" id="business_unit" class="bootstrap-select" data-live-search="true" data-width="100%">
<?php
    $collection = $db->MsterRiskBUnit;
    $cursor = $collection->find(); 
    $data['event'] = array();
    foreach ($cursor as $entry) {
        echo "<option value='". $entry['bu-name'] ."'>". $entry['bu-name'] ."</option>";
    }
?>                                                  
                                            </select>
                                        </div>
                                        
                                         <div class="form-group"> 
                                            <label class="control-label" for="formInput57">Risk Manager</label>                                             
                                            <a data-toggle="modal" data-target="#modal_riskmanager" style="color:#333333;"><i class="icon-plus-circle2 pull-right"></i></a> 
                                            <textarea id="risk_manager" name="risk_manager" class="form-control impact-value elastic" rows="1"></textarea>
                                        </div>
                                        
                                         
                                        
                                        
                                        <div class="form-group">
                                            <label class="control-label" for="formInput29">Risk Defination</label>
                                            <textarea name="risk_definition" class="form-control elastic risk-defination" id="formInput29" rows="5"></textarea>
                                            <div class="checkbox">
												<label>
													<input name="override_definition" type="checkbox" class="styled">
													Override auto generated defination
												</label>
											</div>
                                    	</div>
                                       
                                    </div>
									
                                </div>
                                <div class="m_additional_data">
                                    <label class="control-label" for="formInput51">Additional Data</label>
									<div class="data-list"><div class="row">
									<div class="col-md-2">
									<div class="form-group">     
											<select id="additional_data"  name="additional_data" class="bootstrap-select" data-live-search="true" data-width="100%"> 
												<option value="fdf">Select Field</option>                                        
												<option value="Phone">Phone No</option>                                                        
												<option value="Adress">Address</option>                                                        
											</select>
										</div>                                                 
									</div>
									<div class="col-md-5">
										<div class="form-group">
											<textarea class="form-control elastic" id="formInput29" rows="1" style="width:92%;display: inline-block;vertical-align: top;"></textarea>
											<span type="button" id="v3_add_data" class="delete_data1 btn-success">
												<i class="icon-plus22"></i>
											</span>
										</div>
									</div>
									</div><div class="clearfix"></div></div>			
								</div>
							   
							
								<div class="form-group">
										
										<button type="button" id="save_record" class="btn btn-default pull-right">Save Record</button>
								
								</div>
                                
                              
                                
                                
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <!-- /page content -->
            <!-- Footer -->
            <div class="footer text-muted">
                &copy; 2015. 
                <a href="#">Limitless Web App Kit</a> by 
                <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
            </div>
            <!-- /footer -->
            <!-- Basic modal -->
            <div id="modal_event" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Event Knowledgebase</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                            <div class="col-md-12">
                                                <div class="form-group"> 
                                                    <label class="control-label" for="formInput41">Event Category</label>                                                     

                                                    <select id="event_select" class="bootstrap-select" data-live-search="true" data-width="100%"> 
<?php
    $collection = $db->MasterEvent;
    $cursor = $collection->find(); 
    $data['event'] = array();
    foreach ($cursor as $entry) {
        echo "<option value='". $entry['event-category'] ."'>". $entry['event-category'] ."</option>";
    }
?>                                                        
                                                    </select>
                                                </div>                                                 
                                            </div>
                             </div>
                                                    <!--     <div class="row">

                            <div class="col-md-12">
                                                <div class="form-group"> 
                                                    <label class="control-label" for="formInput41">Events</label>                                                     

                                                    <select id="formInput41" class="bootstrap-select" data-live-search="true" data-width="100%"> 
                                                        <option>Legal and Regulatory</option>                                    <option>Operational</option>                      
                                                        <option>Operational</option>                                                <option>Operational lorem dfsf  sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sd sdf df sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf 444 fdg sdfg sdfg sdfg sdfg sdfg sdfg sdfgsdfg sdfg sdfg 55 dfadf gsdfg sfdg s55</option>          
                                                        <option>Strategic</option>                                                         
                                                    </select>
                                                </div>                                                 
                                            </div>
                              
                        </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" id="event_select_insert" class="btn btn-default">Insert</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /basic modal -->
            <!-- Basic modal -->
            <div id="modal_vulnerability" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Vulnerability Knowledgebase</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                            <div class="col-md-12">
                                                <div class="form-group"> 
                                                    <label class="control-label" for="formInput41">Vulnerability Category</label>                                                     

                                                    <select id="vul_select" class="bootstrap-select" data-live-search="true" data-width="100%"> 
<?php
    $collection = $db->MasterVulnerability;
    $cursor = $collection->find(); 
    foreach ($cursor as $entry) {
        echo "<option value='". $entry['vulnerability-category'] ."'>". $entry['vulnerability-category'] ."</option>";
    }
?>                                                         
                                                    </select>
                                                </div>                                                 
                                            </div>
                             </div>
                                                        <!-- <div class="row">

                            <div class="col-md-12">
                                                <div class="form-group"> 
                                                    <label class="control-label" for="formInput41">Vulnerability</label>                                                     

                                                    <select id="formInput41" class="bootstrap-select" data-live-search="true" data-width="100%"> 
                                                        <option>Legal and Regulatory</option>                                    
                                                        <option>Operational</option>                      
                                                        <option>Operational</option>                                                
                                                        <option>Operational lorem dfsf  sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sd sdf df sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf 444 fdg sdfg sdfg sdfg sdfg sdfg sdfg sdfgsdfg sdfg sdfg 55 dfadf gsdfg sfdg s55</option>          
                                                        <option>Strategic</option>                                                         
                                                    </select>
                                                </div>                                                 
                                            </div>
                                        </div> -->

                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" id="vul_select_insert" class="btn btn-default">Insert</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /basic modal -->
        <!-- Basic modal -->
            <div id="modal_impact" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Impact Knowledgebase</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                            <div class="col-md-12">
                                                <div class="form-group"> 
                                                    <label class="control-label" for="formInput41">Impact Category</label>                                                     

                                                    <select id="impact_select" class="bootstrap-select" data-live-search="true" data-width="100%"> 
<?php
    $collection = $db->MasterImpact;
    $cursor = $collection->find(); 
    foreach ($cursor as $entry) {
        echo "<option value='". $entry['impact-category'] ."'>". $entry['impact-category'] ."</option>";
    }
?>                                                         
                                                    </select>
                                                </div>                                                 
                                            </div>
                             </div>
                                                        <!-- <div class="row">

                            <div class="col-md-12">
                                                <div class="form-group"> 
                                                    <label class="control-label" for="formInput41">Impact</label>                                                     

                                                    <select id="formInput41" class="bootstrap-select" data-live-search="true" data-width="100%"> 
                                                        <option>Legal and Regulatory</option>                                    <option>Operational</option>                      
                                                        <option>Operational</option>                                                <option>Operational lorem dfsf  sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sd sdf df sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf 444 fdg sdfg sdfg sdfg sdfg sdfg sdfg sdfgsdfg sdfg sdfg 55 dfadf gsdfg sfdg s55</option>          
                                                        <option>Strategic</option>                                                         
                                                    </select>
                                                </div>                                                 
                                            </div>
                                                                                                        </div>

                            
                        </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button"  class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" id="impact_select_insert" class="btn btn-default">Insert</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /basic modal -->
            
            <!-- Basic modal -->
            <div id="modal_riskcategoryinfo" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Risk Category Information</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                            <div class="col-md-12">
                                                <div class="form-group"> 
                                                    <label class="control-label" for="formInput41">Impact Category</label>                                                     

                                                    <select id="riskcategoryinfo_select" class="bootstrap-select" data-live-search="true" data-width="100%"> 
<?php
    $collection = $db->MasterRiskCategory;
    $cursor = $collection->find(); 
    foreach ($cursor as $entry) {
        echo "<option value='". $entry['risk-category'] ."'>". $entry['risk-category'] ."</option>";
    }
?>                                                        
                                                    </select>
                                                </div>                                                 
                                            </div>
                             </div>
                                                       <!--  <div class="row">

                            <div class="col-md-12">
                                                <div class="form-group"> 
                                                    <label class="control-label" for="formInput41">Impact</label>                                                     

                                                    <select id="formInput41" class="bootstrap-select" data-live-search="true" data-width="100%"> 
                                                        <option>Legal and Regulatory</option>                                    <option>Operational</option>                      
                                                        <option>Operational</option>                                                <option>Operational lorem dfsf  sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sd sdf df sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf 444 fdg sdfg sdfg sdfg sdfg sdfg sdfg sdfgsdfg sdfg sdfg 55 dfadf gsdfg sfdg s55</option>          
                                                        <option>Strategic</option>                                                         
                                                    </select>
                                                </div>                                                 
                                            </div>
                                                                                                        </div>

                            
                        </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" id="riskcategoryinfo_select_insert" class="btn btn-default">Insert</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /basic modal -->
            
            
            
            <!-- Basic modal -->
            <div id="modal_riskmanager" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Select User</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                            <div class="col-md-12">
                                                <div class="form-group"> 
                                                    <label class="control-label" for="formInput41">User Category</label>                                                     

                                                    <select id="riskmanager_select" class="bootstrap-select" data-live-search="true" data-width="100%"> 
<?php
    $collection = $db->MasterRiskManager;
    $cursor = $collection->find(); 
    foreach ($cursor as $entry) {
        echo "<option value='". $entry['risk-manager'] ."'>". $entry['risk-manager'] ."</option>";
    }
?>                                                        
                                                    </select>
                                                </div>                                                 
                                            </div>
                             </div>
                                                        <!-- <div class="row">

                            <div class="col-md-12">
                                                <div class="form-group"> 
                                                    <label class="control-label" for="formInput41">User</label>                                                     

                                                    <select id="formInput41" class="bootstrap-select" data-live-search="true" data-width="100%"> 
                                                        <option>Select User</option>                                    <option>Operational</option>                      
                                                        <option>Operational</option>                                                <option>Operational lorem dfsf  sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sd sdf df sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf sdf 444 fdg sdfg sdfg sdfg sdfg sdfg sdfg sdfgsdfg sdfg sdfg 55 dfadf gsdfg sfdg s55</option>          
                                                        <option>Strategic</option>                                                         
                                                    </select>
                                                </div>                                                 
                                            </div>
                                                                                                        </div>

                            
                        </div> -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                            <button type="button" id="riskmanager_select_insert" class="btn btn-default">Insert</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /basic modal -->
            
            
            <!-- Basic modal -->
            <div id="view_risk_modal" class="modal fade">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h5 class="modal-title">Risk Identifiction</h5>
                        </div>
                        <div class="modal-body">
                            <div class="row" id="risk_view_items">
                                <!-- <div class="col-md-12">
                                    <div class="form-group" > 
                                
          
                                    </div>  

                                </div> -->
                             </div>
                                    
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /basic modal -->

            <style type="text/css">
                .bootstrap-select.btn-group .dropdown-menu > li > a .text {
                   
                    white-space: normal;
                }
            </style>
        <!-- /page container -->
	
<script>
$(document).ready(function() {
    //var table = $('#risk_table').DataTable();
    //$('#risk_identification_list').find('.DTTT_container').remove();
    var table;
     var table_data = $('#risk_table').DataTable( {
        ajax:  'risk_identification_list.php' 
        /*,
        "columnDefs": [
            {
              "data": null,
              "defaultContent": "<button class='abc'>Edit</button>",
              "targets": -1
            }
         ]*/
    } );
     //table_data.find('.DTTT_container').hide();
    console.log(table_data);
   // table_data.ajax.reload();
    ///risk_delete
    $('#risk_table').on('click','tbody button.risk_delete', function(){ //alert('gg');
        //console.log(this); //console.log(table_data);
        var rid = $(this).attr('rid');
        //alert(rid);
        $('#'+rid).remove();
            $.ajax({
              method: "POST",
              url: "<?php echo $config['base_url'];?>api/delete_risk_identification",
              data: { id: rid }
            })
            .done(function( data) {
                $('#'.rid).hide();
                console.log(data);
                console.log(table_data);
                table_data.ajax.reload();
                $(".flashMsg").show();
                $(".flashMsg").slideUp(2000);
                //table.ajax.url( 'risk_identification.php' ).load();
            });

    })
     $('#risk_table').on('click','tbody button.risk_copy', function(){ //alert('gg');
        //console.log(this); //console.log(table_data);
        var rid = $(this).attr('rid');
        //alert(rid);
        //$('#'+rid).remove();
            $.ajax({
              method: "POST",
              url: "<?php echo $config['base_url'];?>api/copy_risk_identification",
              data: { id: rid }
            })
            .done(function( data) {
                console.log(data);
                table_data.ajax.reload();
                $(".flashMsg").show();
                $(".flashMsg").slideUp(2000);
            });

    })
     $('#risk_table').on('click','tbody button.risk_view', function(){ 
        //console.log(this); //console.log(table_data);
        var rid = $(this).attr('rid');
        //alert(rid);
        //$('#'+rid).remove();
            $.ajax({
              method: "POST",
              url: "<?php echo $config['base_url'];?>api/view_risk_identification",
              data: { id: rid }
            })
            .done(function( data) {
                console.log(data);
                $('#view_risk_modal').modal('show');
                var html = '<div class="col-md-12">';
                    html += '<div class="row"><div class="col-md-6"><b>Risk Category: </b></div><div class="col-md-6">' +data.risk_category+'</div></div>'; 
                    html += '<div class="row"><div class="col-md-6"><b>Risk Status: </b></div><div class="col-md-6">' +data.risk_status+'</div></div>'; 
                    html += '<div class="row"><div class="col-md-6"><b>Event: </b></div><div class="col-md-6">' +data.event_selected_text+'</div></div>'; 
                    html += '<div class="row"><div class="col-md-6"><b>Vulnerability: </b></div><div class="col-md-6">' +data.impact_selected_text+'</div></div>'; 
                    html += '<div class="row"><div class="col-md-6"><b>Impact: </b></div><div class="col-md-6">' +data.vul_selected_text+'</div></div>'; 
                    html += '<div class="row"><div class="col-md-6"><b>Business Unit: </b></div><div class="col-md-6">' +data.business_unit+'</div></div>';
                    html += '<div class="row"><div class="col-md-6"><b>Manager: </b></div><div class="col-md-6">' +data.risk_manager+'</div></div>';
                    html += '<div class="row"><div class="col-md-6"><b>Risk Defination: </b></div><div class="col-md-6">' +data.risk_definition+'</div></div>';
                    html += '</div>';

                $('#risk_view_items').html(html);

            });

    })


        

    function load_list(){
            $.ajax({
                url: "risk_identification_list.php",
                context: document.body
            }).done(function(data) {
                //$( this ).addClass( "done" );
                $('#risk_identification_list').html(data);
            });
        }
        //load_list();
    $( "#save_record" ).on( "click", function( event ) {
          //event.preventDefault();
          console.log( $('#risk_identification').serialize() );
        $.ajax({
          method: "POST",
          url: "<?php echo $config['base_url'];?>api/risk_identification",
          data: { form: $( '#risk_identification' ).serialize() }
        })
        .done(function( data) {
            console.log(data);
            table_data.ajax.reload();
            $(".flashMsg").show();
            $(".flashMsg").slideUp(2000);
        });
    });
    

    $('#event_select_insert').on('click', function(){
        $('#event_selected_text').val($('#event_select').val());
        $('#modal_event').hide(); $("#modal_event .close").click();
    });
    $('#impact_select_insert').on('click', function(){
        $('#impact_selected_text').val($('#impact_select').val());
        $('#modal_impact').hide(); $("#modal_impact .close").click();
    });
    $('#vul_select_insert').on('click', function(){
        $('#vul_selected_text').val($('#vul_select').val());
        $('#vulnerability_impact').hide(); $("#modal_vulnerability .close").click();
    });
    $('#riskmanager_select_insert').on('click', function(){
        $('#risk_manager').val($('#riskmanager_select').val());
        $('#modal_riskmanager').hide(); $("#modal_riskmanager .close").click();
    });
    $('#riskcategoryinfo_select_insert').on('click', function(){
        $('#risk_category').val($('#riskcategoryinfo_select').val());
        $('#modal_riskcategoryinfo').hide(); $("#modal_riskcategoryinfo .close").click();
    });




})

</script>

    </body>
</html>