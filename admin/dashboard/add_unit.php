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

<?php  

if(isset($_POST['district']) && isset($_POST['constituency']) &&  isset($_POST['panchayath'])&&(isset($_POST['panchayath']))){ 
 $d = $_POST['district'];
 $c = $_POST['constituency'];
 $p = $_POST['panchayath'];
  $u = $_POST['unit'];
$submit = $conn->query("INSERT INTO `web_select_new` (`id`, `district`, `constituency`, `user_panchayath`, `unit`) VALUES (NULL, '$d', '$c', '$p', '$u');");
        if($submit==1){

            $_SESSION['alert_type']='w3-panel w3-green w3-display-container';
            $_SESSION['alert_typeclass']='w3-button w3-green w3-large w3-display-topright';
            $_SESSION['alert_msg']='Unit Submitted Successfully';
            $_SESSION['alert_typei']='Success!';
            header('location:../admin/dashboard/new_booking.php');
            
        }else
        {
                    $_SESSION['alert_type']='w3-panel w3-red w3-display-container';
                    $_SESSION['alert_typeclass']='w3-button w3-red w3-large w3-display-topright';
                    $_SESSION['alert_msg']='Something Went Wrong Please Try Again';
                    $_SESSION['alert_typei']='Error';
                   
        }

 header('location:'.$url.'');

 uset($_POST['district']);
 unset($_POST['constituency']);
 unset($_POST['panchayath']);
 unet($_POST['panchayath']);
}    
?>

    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>IUML</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!--bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- animation -->
	<link href="assets/css/pages/animate_page.css" rel="stylesheet">
	<!-- Template Styles -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- dropzone -->
    <link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
    <!-- Date Time item CSS -->
    
	<!-- favicon -->
    <link rel="shortcut icon" href="assets/img/" /> 
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
                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- end header -->
        <!-- start page container -->
        <div class="page-container">
 			<!-- start sidebar menu -->
      <div class="sidebar-container">
                <div class="sidemenu-container navbar-collapse collapse fixed-menu" style="background:  #006600;">
                    <div id="remove-scroll">
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
                            
                            <li class="nav-item">
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
                                    <li class="nav-item">  <!-- 
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
                            <li class="nav-item start active">
                                <a href="add_unit.php" class="nav-link nav-toggle">
                                    <i class="fa fa-plus"></i>
                                    <span class="title">Add New Unit</span>
                                    <span class="selected"></span>
                                    
                                </a>
                               
                            </li>

                            
                          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


                          
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
                            <!--  alert_start -->
                            <?php 
                            if(isset($_SESSION['alert_type'])&&(isset($_SESSION['alert_msg']))){
                            ?>
                            <div class="<?php echo $_SESSION['alert_type'];  ?>">
                               
                            <span onclick="this.parentElement.style.display='none'"
                            class="<?php echo $_SESSION['alert_typeclass'] ;?>" >&times;</span>
                            <h3><?php echo $_SESSION['alert_typei']; ?></h3>
                            <p><?php echo $_SESSION['alert_msg']; ?></p>
                            </div>
                            <?php
                        }
                        unset($_SESSION['alert_type']);
                         unset($_SESSION['alert_msg']);

                            ?>

                           <!--  alert_end -->

                   
                            <div class=" pull-left">

                                <div class="page-title">Add Unit</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Add Unit</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">Add Unit</li>
                            </ol>
                        </div>
                    </div>
                    <form  method='post'>
                     <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="card-head">
                                    <header>Add Unit</header>
                                    
                                    <ul class = "mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                                       data-mdl-for = "panel-button">
                                       <li class = "mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                                       <li class = "mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                                       <li class = "mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                                    </ul>
                                </div>
                                <div class="card-body row">
                                    <div class="col-lg-6 p-t-20"> 
                                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                            <input class="mdl-textfield__input" type="text" name="district" id="list5"   tabIndex="-1" required>
                                             <span class = "mdl-textfield__error">Select District</span>
                                            <label for="list5" class="pull-right margin-0">
                                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                            </label>
                                            <label for="list4" class="mdl-textfield__label">District / ജില്ല</label>
                                            <ul data-mdl-for="list5" class="mdl-menu mdl-menu--bottom-left mdl-js-menu" id="district">


                                                <li class="mdl-menu__item" data-val="Thiruvananthapuram">Thiruvananthapuram</li>
                                                <li class="mdl-menu__item" data-val="Kollam">Kollam</li>
                                                <li class="mdl-menu__item" data-val="Alappuzha">Alappuzha</li>
                                                <li class="mdl-menu__item" data-val="Pathanamthitta">Pathanamthitta</li>
                                                <li class="mdl-menu__item" data-val="Kottayam">Kottayam</li>
                                                <li class="mdl-menu__item" data-val="Idukki">Idukki</li>
                                                <li class="mdl-menu__item" data-val="Ernakulam">Ernakulam</li>
                                                <li class="mdl-menu__item" data-val="Thrissur">Thrissur</li>
                                                <li class="mdl-menu__item" data-val="Palakkad">Palakkad</li>
                                                <li class="mdl-menu__item" data-val="Malappuram">Malappuram</li>
                                                <li class="mdl-menu__item" data-val="Kozhikode">Kozhikode</li>
                                                <li class="mdl-menu__item" data-val="Wayanad">Wayanad</li>
                                                <li class="mdl-menu__item" data-val="Kannur">Kannur</li>
                                                <li class="mdl-menu__item" data-val="Kasaragod">Kasaragod</li>
                                               
                                            </ul>
                                        </div>
                                    </div>

                                     <div class="col-lg-6 p-t-20"> 
                                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                            <input class="mdl-textfield__input" list="constituency" type="text" id="list2" name="constituency"   tabIndex="-1" required>
                                                                <datalist id="constituency">
        
                                                                </datalist>
                                             <span class = "mdl-textfield__error">Choose Constituency</span>
                                            
                                            <label for="list2" class="mdl-textfield__label">Constituency / മണ്ഡലം

                                        </div>
                                    </div>

                                  
                                    <div class="col-lg-6 p-t-20"> 
                                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                            <input class="mdl-textfield__input" type="text" list="panchayath" id="list3"  name='panchayath'  tabIndex="-1" required>
                                             <datalist id="panchayath">
        
                                                                </datalist>
                                             <span class = "mdl-textfield__error">Choose Panchayath</span>
                                            
                                            <label for="list3" class="mdl-textfield__label">Panchayath / പഞ്ചായത്ത്</label>
                                           
                                                
                                        </div>
                                    </div>

                                    <div class="col-lg-6 p-t-20"> 
                                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                            <input class="mdl-textfield__input" type="text" id="list10" list="unit" name="unit"  tabIndex="-1" required>
                                             <datalist id="unit">
        
                                                                </datalist>
                                             <span class = "mdl-textfield__error">Choose Unit</span>
                                            
                                            <label for="list10" class="mdl-textfield__label">Unit / ശാഖ</label>
                                          
                                                
                                        </div>
                                    </div>
                                   
                                    
                                     <div class="col-lg-12 p-t-20 text-center"> 
                                        <input type="submit"  class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                </div>
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
    <!-- Common js-->
	<script src="assets/js/app.js" ></script>
    <script src="assets/js/layout.js" ></script>
	<script src="assets/js/theme-color.js" ></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
    <script src="assets/js/pages/material_select/getmdl-select.js" ></script>
              <script>
    
                    
                    
                   $( document ).ready(function() {
                       
                       $('#list5').on('change',function(){ 
        var district = $(this).val();
        if(district){
            $.ajax({
                type:'POST',
                url:'../../ajax/ajaxDataadmin.php',
                data:'district='+district,

                success:function(html){
                 
                     $('#constituency').html(html);
                                      }
                   }); 



                      }
    });
    
    $('#list2').on('change',function(){//change state to display all city
        var constituency = $(this).val();

        if(constituency){
            $.ajax({
                type:'POST',
                url:'../../ajax/ajaxDataadmin.php',
                data:'constituency='+constituency,
                success:function(html){
                     
                    $('#panchayath').html(html);
                                      }
                   }); 
                    }
    });

$('#list3').on('change',function(){//change state to display all city
        var panchayath = $(this).val();

        if(panchayath){
            $.ajax({
                type:'POST',
                url:'../../ajax/ajaxDataadmin.php',
                data:'panchayath='+panchayath,
                success:function(html){
               
                    $('#unit').html(html);
                                      }
                   }); 
                    }
    });
    });
 </script>
	<script src="assets/js/pages/ui/animations.js" ></script>
    <!-- end js include path -->
</body>
</html>