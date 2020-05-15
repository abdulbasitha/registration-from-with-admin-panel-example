<?php
session_start();
unset($_SESSION['button']);
unset($_SESSION['buttonc']);
$u=$_GET['url'];
header("location:{$u}");


?>