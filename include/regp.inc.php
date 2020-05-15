<?php
session_start();
include_once('db_connect.php');
class Register{
		protected $dbcon;
		public function __construct(){
			$this->dbcon=connection();

		}
public function reginto($President_name,$President_number,$President_course,
						$Vice_President_name1,$Vice_President_number1,$Vice_President_course1,$Vice_President_name2,$Vice_President_number2,$Vice_President_course2,
						$General_Secretary_name,$General_Secretary_number,$General_Secretary_course,
						$Secretary_name,$Secretary_number,$Secretary_course,
						$jointSecretary_name1,$jointSecretary_number1,$jointSecretary_course1,$jointSecretary_name2,$jointSecretary_number2,$jointSecretary_course2,
						$treasurer_name,$treasurer_number,$treasurer_course,
						$name_Little_Wing,$Little_Wing_number,$Little_Wing_course,
						$Membership_Number,$district,$constituency,$panchayath){
		
			if(!($this->dbcon)){
					$_SESSION['msg']="Oops, something went wrong!. Please contact your administrator";
				$_SESSION['color']="alert alert-danger alert-dismissible";
				header('location:../index.php');
					}
			else{
				$sumbit=$this->dbcon->query("INSERT INTO `registration_panchayath_msf` (`id`, `President_name`, `President_number`, `President_course`, `Vice_President_name1`, `Vice_President_numerber1`, `Vice_President_course1`,`Vice_President_name2`, `Vice_President_numerber2`, `Vice_President_course2`, `General_Secretary_name`, `General_Secretary_number`, `General_Secretary_course`, `Secretary_name`, `Secretary_number`, `Secretary_course`,`Joint_Secretary_name1`, `Joint_Secretary_numerber1`,`Joint_Secretary_course1`,`Joint_Secretary_name2`, `Joint_Secretary_numerber2`,`Joint_Secretary_course2`,`treasurer_name`, `treasurer_number`, `treasurer_course`, `name_Little_Wing`, `Little_Wing_number`, `Little_Wing_course`, `Membership_Number`, `District`, `Constituency`, `panchayath`) VALUES (NULL, '$President_name', '$President_number', '$President_course', '$Vice_President_name1', '$Vice_President_number1', '$Vice_President_course1', '$Vice_President_name2', '$Vice_President_number2', '$Vice_President_course2','$General_Secretary_name', '$General_Secretary_number', '$General_Secretary_course', '$Secretary_name', '$Secretary_number', '$Secretary_course', '$jointSecretary_name1','$jointSecretary_number1','$jointSecretary_course1','$jointSecretary_name2','$jointSecretary_number2','$jointSecretary_course2' ,'$treasurer_name', '$treasurer_number', '$treasurer_course', '$name_Little_Wing', '$Little_Wing_number', '$Little_Wing_course', '$Membership_Number', '$district', '$constituency', '$panchayath');");




				if($sumbit==1){
					$_SESSION['msg']="Thank you for registering :) ";
				$_SESSION['color']="alert alert-success";
				header('location:../panchayathreg.php');
				}
				else
				{
						$_SESSION['msg']="Oops, something went wrong!. Please contact your administrator";
						$_SESSION['color']="alert alert-danger alert-dismissible";
						header('location:../reg.php');
				}
			}
			
		}
}
$President_name = $_POST['President_name'];
$President_number = $_POST['President_number'];
$President_course = $_POST['President_course'];

$Vice_President_name1 = $_POST['Vice_President_name1'];
$Vice_President_number1 = $_POST['Vice_President_number1'];
$Vice_President_course1 = $_POST['Vice_President_course1'];

$Vice_President_name2 = $_POST['Vice_President_name2'];
$Vice_President_number2 = $_POST['Vice_President_number2'];
$Vice_President_course2 = $_POST['Vice_President_course2'];

$General_Secretary_name = $_POST['General_Secretary_name'];
$General_Secretary_number = $_POST['General_Secretary_number'];
$General_Secretary_course = $_POST['General_Secretary_course'];

$Secretary_name = $_POST['Secretary_name'];
$Secretary_number = $_POST['Secretary_number'];
$Secretary_course = $_POST['Secretary_course'];

$jointSecretary_name1 = $_POST['jointSecretary_name1'];
$jointSecretary_number1 = $_POST['jointSecretary_number1'];
$jointSecretary_course1 = $_POST['jointSecretary_course1'];

$jointSecretary_name2 = $_POST['jointSecretary_name2'];
$jointSecretary_number2 = $_POST['jointSecretary_number2'];
$jointSecretary_course2 = $_POST['jointSecretary_course2'];

$treasurer_name = $_POST['treasurer_name'];
$treasurer_number = $_POST['treasurer_number'];
$treasurer_course = $_POST['treasurer_course'];

$name_Little_Wing=$_POST['name_Little_Wing'];
$Little_Wing_number=$_POST['Little_Wing_number'];
$Little_Wing_course=$_POST['Little_Wing_course'];

$Membership_Number = $_POST['Membership_Number'];


$district =  $_SESSION['district'];
$constituency =  $_SESSION['constituency'];
$panchayath =  $_SESSION['panchayath'] ;



$ob= new Register;
$ob->reginto($President_name,$President_number,$President_course,
						$Vice_President_name1,$Vice_President_number1,$Vice_President_course1,$Vice_President_name2,$Vice_President_number2,$Vice_President_course2,
						$General_Secretary_name,$General_Secretary_number,$General_Secretary_course,
						$Secretary_name,$Secretary_number,$Secretary_course,
						$jointSecretary_name1,$jointSecretary_number1,$jointSecretary_course1,$jointSecretary_name2,$jointSecretary_number2,$jointSecretary_course2,
						$treasurer_name,$treasurer_number,$treasurer_course,
						$name_Little_Wing,$Little_Wing_number,$Little_Wing_course,$Membership_Number,$district,$constituency,$panchayath);



?>