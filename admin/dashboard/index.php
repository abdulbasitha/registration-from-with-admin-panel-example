<?php 
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include_once('../../include/db_connect.php');
session_start();

$conn=connection();
if($_SESSION['login_status']!="true")
{
    header('location:../');
}


?>




<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Admin
</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!--bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/plugins/summernote/summernote.css" rel="stylesheet">
	<!-- morris chart -->
    <link href="assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- animation -->
	<link href="assets/css/pages/animate_page.css" rel="stylesheet">
	<!-- Template Styles -->
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme-color.css" rel="stylesheet" type="text/css" />

 
	<!-- favicon -->
    <link rel="shortcut icon" href="#" /> 

</head>

 <!-- END HEAD -->
<body class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
    <div class="page-wrapper">
        <!-- start header -->
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <!-- logo start -->
                <div class="page-logo" style="background:  #006600;">
                    <a href="index.php">
                    <img alt="" src="assets/img/#">
                    <span class="logo-default" >IUML</span> </a>
                </div>
                <!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
                
                
                <!-- start mobile menu -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
               <!-- end mobile menu -->
                <!-- start header menu -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- start notification dropdown -->
                      
                        <!-- end notification dropdown -->
                        <!-- start message dropdown -->
 						
                        <!-- end message dropdown -->
 						<!-- start manage user dropdown -->
 						<li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle " src="assets/img/dp.jpg" />
                                <span class="username username-hide-on-mobile"> <?php echo strtoupper($_SESSION['admin_name']); ?> </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default animated jello">
                              
                                <li>
                                    <a href="#">
                                        <i class="icon-directions"></i> Help
                                    </a>
                                </li>
                              
                                <li>
                                    <a href="../logout.php">
                                        <i class="icon-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                        <!-- end manage user dropdown -->
                        <li class="dropdown dropdown-quick-sidebar-toggler">
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
 			<div class="sidebar-container" >
 				<div class="sidemenu-container navbar-collapse collapse fixed-menu" style="background:  #006600;">
	                <div id="remove-scroll" >
	                    <ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
	                        <li class="sidebar-toggler-wrapper hide">
	                            <div class="sidebar-toggler">
	                                <span></span>
	                            </div>
	                        </li>
	                        <li class="sidebar-user-panel">
	                            <div class="user-panel">
	                                <div class="row">
                                            <div class="sidebar-userpic">
                                                <img src="assets/img/dp.jpg" class="img-responsive" alt=""> </div>
                                        </div>
                                        <div class="profile-usertitle">
                                            <div class="sidebar-userpic-name">  <?php echo strtoupper($_SESSION['admin_name']); ?> </div>
                                           
                                        </div>
                                        <div class="sidebar-userpic-btn">
									       
									        <a class="tooltips" href="https://accounts.google.com/signin" data-placement="top" data-original-title="Mail">
									        	<i class="material-icons">mail_outline</i>
									        </a>
									       
									        <a class="tooltips" href="../logout.php" data-placement="top" data-original-title="Logout">
									        	<i class="material-icons">input</i>
									        </a>
									    </div>
	                            </div>
	                        
	                        <li class="nav-item start active">
	                            <a href="index.php" class="nav-link nav-toggle">
	                                <i class="material-icons">dashboard</i>
	                                <span class="title">Dashboard</span>
                                	<span class="selected"></span>
                                	
	                            </a>
	                           
	                        </li>
	                        
	                        <li class="nav-item">
	                            <a href="#" class="nav-link nav-toggle">
	                                <i class="material-icons">business_center</i>
	                                <span class="title">Registrations</span>
	                                <span class="arrow"></span>
	                            </a>
	                            <ul class="sub-menu">
	                               <!-- <li class="nav-item">
	                                    <a href="new_registrations.php" class="nav-link ">
	                                        <span class="title">New Registration</span>
	                                    </a>
	                                </li>-->
	                                <li class="nav-item">
	                                    <a href="view_registrations.php" class="nav-link ">
	                                        <span class="title">View Unit Registrations</span>
	                                    </a>
	                                </li>
	                                 <li class="nav-item">
                                        <a href="view_registrations_Panchayath.php" class="nav-link ">
                                            <span class="title">View Panchayath Registrations</span>
                                        </a>
                                    </li>
	                            </ul>
	                        </li>
	                        <li class="nav-item">
	                            <a href="add_unit.php" class="nav-link nav-toggle">
	                                <i class="fa fa-plus"></i>
	                                <span class="title">Add New Unit</span>
                                	<span class="selected"></span>
                                	
	                            </a>
	                           
	                        </li>
	                       
	                         

	                        
	                      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>





	                            </ul>
	                        </li>
	                    </ul>
	                </div>
                </div>
            </div>
            <!-- end sidebar menu --> 
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">Dashboard</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                   <!-- start widget -->
					
					<!-- end widget -->
                     <!-- chart start -->
                  

                     <!-- start Payment Details -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-box">
                                <div class="card-head">
                                    <header>Unit Committee Registration
 Status</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
	                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
	                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
										<div class="table-responsive">
											<table class="table display product-overview mb-30" id="support_table5">
												 <thead>
                                            <tr>
                                            	
                                                <th class="center"> District </th>
                                                <th class="center">   Total Registration </th>
                                               
                                           
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
                                       
                                        
                                        $District=array("Thiruvananthapuram","Kollam","Alappuzha","Pathanamthitta","Kottayam","Idukki","Ernakulam","Thrissur","Palakkad","Malappuram","Kozhikode","Wayanad","Kannur","Kasaragod");
                                                 
                                         for($i=0;$i<13;$i++){
                                            $dis=$District[$i];
                                            $conn->query("select * from registration_unit_msf where District='$dis'");
                                                
                                        ?>	
											
											
											
											
											
											
											<tr class="odd gradeX">
												
												<td class="center"><?php echo $District[$i] ;  ?></td>
                                                <td class="center"><?php echo mysqli_affected_rows($conn);  ?></td>
												
												
												
											</tr>
                                            <?php
                                        }
                                            ?>
                                       
                                    

										</tbody>
											</table>
										</div>
									</div>	
                                </div>
                            </div>
                        </div>
                    </div>
                                   <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card  card-box">
                                <div class="card-head">
                                    <header>Panchayath Committee Registration
 Status</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                  <div class="table-wrap">
                                        <div class="table-responsive">
                                            <table class="table display product-overview mb-30" id="support_table5">
                                                 <thead>
                                            <tr>
                                                
                                                <th class="center"> District </th>
                                                <th class="center">   Total Registration </th>
                                               
                                           
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                       
                                        
                                        $District=array("Thiruvananthapuram","Kollam","Alappuzha","Pathanamthitta","Kottayam","Idukki","Ernakulam","Thrissur","Palakkad","Malappuram","Kozhikode","Wayanad","Kannur","Kasaragod");
                                                 
                                         for($i=0;$i<13;$i++){
                                            $dis=$District[$i];
                                            $conn->query("select * from registration_panchayath_msf where District='$dis'");
                                                
                                        ?>  
                                            
                                            
                                            
                                            
                                            
                                            
                                            <tr class="odd gradeX">
                                                
                                                <td class="center"><?php echo $District[$i] ;  ?></td>
                                                <td class="center"><?php echo mysqli_affected_rows($conn);  ?></td>
                                                
                                                
                                                
                                            </tr>
                                            <?php
                                        }
                                            ?>
                                       
                                    

                                        </tbody>
                                            </table>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Payment Details -->
                    
							
                                   
							
                                            </li>
                                        </ul>
                                 </div>
                             </div>
                         </div>
						</div>
                </div>
            </div>
            <!-- end page content -->
            <!-- start chat sidebar -->
           
        <!-- end page container -->
        <!-- start footer -->
        <div class="page-footer">
            <div class="page-footer-inner"> <?php echo date("Y"); ?> &copy; IUML 

            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- end footer -->
    </div>
    <!-- start js include path -->
    <script src="assets/plugins/jquery/jquery.min.js" ></script>
    <script src="assets/plugins/popper/popper.min.js" ></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js" ></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js" ></script>
	<script src="assets/js/pages/sparkline/sparkline-data.js" ></script>
    <!-- Common js-->
	<script src="assets/js/app.js" ></script>
    <script src="assets/js/layout.js" ></script>
    <script src="assets/js/theme-color.js" ></script>
    <!-- material -->
    <script src="assets/plugins/material/material.min.js"></script>
    <!-- animation -->
    <script src="assets/js/pages/ui/animations.js" ></script>
    <!-- morris chart -->
    <script src="assets/plugins/morris/morris.min.js" ></script>
    <script src="assets/plugins/morris/raphael-min.js" ></script>
    <script src="assets/js/pages/chart/morris/morris_home_data.js" ></script>
    
    <!-- end js include path -->
  </body>
</html>