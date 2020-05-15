<?php 
$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
include_once('../../include/db_connect.php');
session_start();
$conn=connection();
if($_SESSION['login_status']!="true")
{
    header('location:../');
}

if(isset($_SESSION['district']))
     $d=$_SESSION['district'] ;
if(isset($_SESSION['constituency']))
 $c=$_SESSION['constituency'] ;
if(isset($_SESSION['panchayath']))
 $p=$_SESSION['district'];
if(isset($_SESSION['unit']))
    $u=$_SESSION['unit'];

?>






<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->
<head>
    <?php  

if(isset($_POST['district'])){ 
    
$_SESSION['button']="b";
 $d =strtolower( $_POST['district']);
$c = strtolower($_POST['constituency']);
$p = strtolower($_POST['panchayath']);
 $u = strtolower($_POST['unit']);

 $_SESSION['district'] =strtolower( $_POST['district']);
 $_SESSION['constituency'] = strtolower($_POST['constituency']);
 $_SESSION['panchayath']= strtolower($_POST['panchayath']);
    $_SESSION['unit'] = strtolower($_POST['unit']);
 
    if(($d!=NULL)&&($c!=NULL)&&($p!=NULL)&&($u!=NULL))
       $queryq= $conn->query("SELECT * from registration_unit_msf where District='$d' and Constituency ='$c' and panchayath='$p' AND unit='$u'");
   elseif(($d!=NULL)&&($c!=NULL)&&($p!=NULL))
          $queryq= $conn->query("SELECT * from registration_unit_msf where District='$d' and Constituency ='$c' and panchayath='$p'");
      elseif(($d!=NULL)&&($c!=NULL))
         $queryq= $conn->query("SELECT * from registration_unit_msf where District='$d' and Constituency ='$c'");
     elseif($d!=NULL)
        $queryq= $conn->query("SELECT * from registration_unit_msf where District='$d'");




}  

if(isset($_SESSION['district'])){ 
    

 $d = $_SESSION['district'];
$c =  $_SESSION['constituency'] ;
$p = $_SESSION['panchayath'];
 $u =  $_SESSION['unit'];

 
    if(($d!=NULL)&&($c!=NULL)&&($p!=NULL)&&($u!=NULL))
       $queryq= $conn->query("SELECT * from registration_unit_msf where District='$d' and Constituency ='$c' and panchayath='$p' AND unit='$u'");
   elseif(($d!=NULL)&&($c!=NULL)&&($p!=NULL))
          $queryq= $conn->query("SELECT * from registration_unit_msf where District='$d' and Constituency ='$c' and panchayath='$p'");
      elseif(($d!=NULL)&&($c!=NULL))
         $queryq= $conn->query("SELECT * from registration_unit_msf where District='$d' and Constituency ='$c'");
     elseif($d!=NULL)
        $queryq= $conn->query("SELECT * from registration_unit_msf where District='$d'");
        $count=mysqli_affected_rows($conn);



}  
?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>View Unit Registration</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!--bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- data tables -->
    <link href="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
	<!-- animation -->
	<link href="assets/css/pages/animate_page.css" rel="stylesheet">
	<!-- Template Styles -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme-color.css" rel="stylesheet" type="text/css" />
	


    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/#" /> 




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
                            
                            
                            <li class="nav-item start active">
                                <a href="#" class="nav-link nav-toggle">
                                    <i class="material-icons">business_center</i>
                                    <span class="title">Registrations</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <!--<li class="nav-item">
                                        <a href="new_registrations.php" class="nav-link ">
                                            <span class="title">New Registration</span>
                                        </a>
                                    </li>-->
                                    <li class="nav-item start active">
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
                            

                            
                          <br><br><br><br><br><br><br><br><br><br><br>


                               <br><br><br><br><br>
                               <br><br><br><br>



                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             <?php 
                        if(isset($_SESSION['button']))
                        {
                    ?>
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
                                <div class="page-title">All Registrations </div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="view_Registrations.php">Registrations</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">All Registrations</li>
                            </ol>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>All Registrations (Total : <?php echo $count; ?>)</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row p-b-20">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                                <a href="../../include/back.php?url=<?php echo $url; ?>" id="addRow" class="btn btn-info">
                                                    Back <i class="fa fa-arrow-left"></i>
                                                </a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="table-scrollable">
                                    <table class="table table-hover table-checkable order-column full-width" id="example4">
                                        <thead>
                                            <tr>
                                                <th class="center"> No </th>
                                                <th class="center">President Name </th>
                                                <th class="center">  President Contact Number  </th>
                                                <th class="center"> President Course </th>

                                                <th class="center"> Vice President-I Name</th>
                                                <th class="center"> Vice President-I Phone </th>
                                                <th class="center"> Vice President-I Course </th>

                                                <th class="center"> Vice President-II Name</th>
                                                <th class="center"> Vice President-II Phone </th>
                                                <th class="center"> Vice President-II Course </th>

                                                 <th class="center"> General Secretary Name </th>
                                                <th class="center"> General Secretary Phone </th>
                                                <th class="center"> General Secretary Course </th>

                                                <th class="center"> Secretary Name </th>
                                                <th class="center"> Secretary Phone </th>
                                                <th class="center"> Secretary Course </th>

                                                  <th class="center">Joint Secretary-I Name </th>
                                                <th class="center"> Joint Secretary-I Phone </th>
                                                <th class="center">Joint Secretary-I Course </th>

                                                <th class="center">Joint Secretary-II Name </th>
                                                <th class="center"> Joint Secretary-II Phone </th>
                                                <th class="center">Joint Secretary-II Course </th>



                                                <th class="center"> Treasure Name </th>
                                                <th class="center"> Treasure Phone </th>
                                                 <th class="center"> Treasure Course </th>

                                                
                                                  <th class="center"> Little Wing Name </th>
                                                  <th class="center"> Little Wing Phone </th>
                                                  <th class="center"> Little Wing Course </th>
                                                    <th class="center"> Total Memberships </th>
                                                 <th class="center"> Action </th>

                                          
                                            </tr>
                                        </thead>
                                        <tbody>
                                      
                                            <?php
                                            while($data=mysqli_fetch_array($queryq))
                                            {
                                            ?>
                                     
                                            
                                            <tr class="odd gradeX">
                                                 <td class="center">1</td>
                                                <td class="center"><?php echo ucfirst($data['President_name']);   ?></td>
                                                  <td class="center"><?php echo ucfirst($data['President_number']);   ?></td>
                                                    <td class="center"><?php echo ucfirst($data['President_course']);   ?></td>

                                                      <td class="center"><?php echo ucfirst($data['Vice_President_name1']);   ?></td>
                                                        <td class="center"><?php echo ucfirst($data['Vice_President_numerber1']);   ?></td>
                                                          <td class="center"><?php echo ucfirst($data['Vice_President_course1']);   ?></td>

                                                          <td class="center"><?php echo ucfirst($data['Vice_President_name2']);   ?></td>
                                                        <td class="center"><?php echo ucfirst($data['Vice_President_numerber2']);   ?></td>
                                                          <td class="center"><?php echo ucfirst($data['Vice_President_course2']);   ?></td>

                                                            <td class="center"><?php echo ucfirst($data['General_Secretary_name']);   ?></td>
                                                              <td class="center"><?php echo ucfirst($data['General_Secretary_number']);   ?></td>
                                                                <td class="center"><?php echo ucfirst($data['General_Secretary_course']);   ?></td>

                                                                  <td class="center"><?php echo ucfirst($data['Secretary_name']);   ?></td>
                                                                    <td class="center"><?php echo ucfirst($data['Secretary_number']);   ?></td>
                                                                 <td class="center"><?php echo ucfirst($data['Secretary_course']);   ?></td>


                                                                  <td class="center"><?php echo ucfirst($data['Joint_Secretary_name1']);   ?></td>
                                                                    <td class="center"><?php echo ucfirst($data['Joint_Secretary_numerber1']);   ?></td>
                                                                 <td class="center"><?php echo ucfirst($data['Joint_Secretary_course1']);   ?></td>

                                                                 <td class="center"><?php echo ucfirst($data['Joint_Secretary_name2']);   ?></td>
                                                                    <td class="center"><?php echo ucfirst($data['Joint_Secretary_numerber2']);   ?></td>
                                                                 <td class="center"><?php echo ucfirst($data['Joint_Secretary_course2']);   ?></td>


                                                                 <td class="center"><?php echo ucfirst($data['treasurer_name']);   ?></td>
                                                                  <td class="center"><?php echo ucfirst($data['treasurer_number']);   ?></td>
                                                                 <td class="center"><?php echo ucfirst($data['treasurer_course']);   ?></td>

                                                                <td class="center"><?php echo ucfirst($data['name_Little_Wing']);   ?></td>
                                                                <td class="center"><?php echo ucfirst($data['Little_Wing_number']);   ?></td>
                                                                <td class="center"><?php echo ucfirst($data['Little_Wing_course']);   ?></td>

                                                                  <td class="center"><?php echo ucfirst($data['Membership_Number']);   ?></td>
                                                          
                                               
                                                




                                                <td class="center">
                                                            
                                                            
                                                            <a class="btn btn-tbl-delete btn-xs" href="../delete.php?id=<?php echo $data['id']; ?>&redirect=<?php echo $url; ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-trash-o " ></i>
                                                            </a>

                                                        </td>
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
            </div>


            </div>
        </form>
            <!-- end page content -->
          
        </div>

             <!-- end sidebar menu -->
            <!-- start page content -->
            <!--
            <div class="page-content-wrapper">
                <div class="page-content">
                    <div class="page-bar">
                        <div class="page-title-breadcrumb">
                            <div class=" pull-left">
                                <div class="page-title">All Registrations</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="view_Registrations.php">Registrations</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">All Registrations</li>
                            </ol>
                        </div>
                    </div>
                     <div class="row">
                        <div class="col-md-12">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>All Registrations</header>
                                    <div class="tools">
                                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="row p-b-20">
                                        <div class="col-md-6 col-sm-6 col-6">
                                            <div class="btn-group">
                                                <a href="new_registrations.php" id="addRow" class="btn btn-info">
                                                    Add New <i class="fa fa-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="table-scrollable">
                                    <table class="table table-hover table-checkable order-column full-width" id="example4">
                                        <thead>
                                            <tr>
                                                
                                                <th class="center"> District </th>
                                                <th class="center">   Constituency </th>
                                                <th class="center"> Panchayath </th>
                                                <th class="center"> Unit </th>

                                            <th class="">Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $full_bookexe = mysqli_query($conn,"SELECT * FROM booking ORDER BY id DESC");
                                        $i=1;
                                        while($full_book=mysqli_fetch_array($full_bookexe)){



                                        ?>  
                                            
                                            
                                            
                                            
                                            
                                            
                                            <tr class="odd gradeX">
                                                
                                                <td class="center"><?php echo strtoupper($full_book['name']);   ?></td>
                                                <td class="center"><a href="tel:<?php echo $full_book['phno'];   ?>">
                                                        <?php echo $full_book['phno'];   ?> </a></td>
                                                <td class="center"><a href="mailto:<?php echo $full_book['email'];   ?>">
                                                        <?php echo $full_book['email'];   ?> </a></td>
                                                <td class="center"><?php echo $full_book['arrival'];   ?></td>
                                                
                                                <td>
                                                            <a href="edit_registrations.php?id=<?php echo $full_book['id']; ?>" class="btn btn-tbl-edit btn-xs">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                            
                                                            <a class="btn btn-tbl-delete btn-xs" href="../delete.php?id=<?php echo $full_book['id']; ?>&redirect=<?php echo $url; ?>" onclick="return confirm('Are you sure you want to delete this item?');">
                                                                <i class="fa fa-trash-o " ></i>
                                                            </a>

                                                        </td>
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
            </div>
-->


                        <?php
}
else
{

        ?>
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

                                <div class="page-title">View Unit Registration</div>
                            </div>
                            <ol class="breadcrumb page-breadcrumb pull-right">
                                <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li><a class="parent-item" href="">Registrations</a>&nbsp;<i class="fa fa-angle-right"></i>
                                </li>
                                <li class="active">View Unit Registration</li>
                            </ol>
                        </div>
                    </div>
                    <form  method='post'>
                     <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="card-head">
                                    <header>View Unit Registration</header>
                                    
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
                                            <input class="mdl-textfield__input" list="constituency" type="text" id="list2" name="constituency"   tabIndex="-1" >
                                                                <datalist id="constituency">
        
                                                                </datalist>
                                             <span class = "mdl-textfield__error">Choose Constituency</span>
                                            
                                            <label for="list2" class="mdl-textfield__label">Constituency / മണ്ഡലം

                                        </div>
                                    </div>

                                  
                                    <div class="col-lg-6 p-t-20"> 
                                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                            <input class="mdl-textfield__input" type="text" list="panchayath" id="list3"  name='panchayath'  tabIndex="-1" >
                                             <datalist id="panchayath">
        
                                                                </datalist>
                                             <span class = "mdl-textfield__error">Choose Panchayath</span>
                                            
                                            <label for="list3" class="mdl-textfield__label">Panchayath / പഞ്ചായത്ത്</label>
                                           
                                                
                                        </div>
                                    </div>

                                    <div class="col-lg-6 p-t-20"> 
                                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                                            <input class="mdl-textfield__input" type="text" id="list10" list="unit" name="unit"  tabIndex="-1">
                                             <datalist id="unit">
        
                                                                </datalist>
                                             <span class = "mdl-textfield__error">Choose Unit</span>
                                            
                                            <label for="list10" class="mdl-textfield__label">Unit / ശാഖ</label>
                                          
                                                
                                        </div>
                                    </div>
                                   
                                    
                                     <div class="col-lg-12 p-t-20 text-center"> 
                                        <input type="submit" value="Search" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 

                </div>

        
            <!-- end page content -->
               <?php
        }
        ?>
        </div>
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
    <!-- Common js-->
    <script src="assets/js/app.js" ></script>
    <script src="assets/js/layout.js" ></script>
    <script src="assets/js/theme-color.js" ></script>
    <!-- Material -->
    <script src="assets/plugins/material/material.min.js"></script>
    <script src="assets/js/pages/material_select/getmdl-select.js" ></script>

    <script src="assets/js/pages/ui/animations.js" ></script>
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
    <!-- end js include path -->
</body>
</html>