<?php
include_once('../include/db_connect.php');
$conn=connection();
session_start();
$id=$_GET['id'];
$url=$_GET['redirect'];

if(isset($_GET['dl']))
mysqli_query($conn,"DELETE FROM `registration_panchayath_msf` WHERE `id` = '$id'");
else if($id!=Null)
mysqli_query($conn,"DELETE FROM `registration_unit_msf` WHERE `id` = '$id'");



header('location:'.$url);
?>