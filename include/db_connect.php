<?php
//Page from where the database is connected using the config page.
function connection(){
	$conn=mysqli_connect("localhost","root","Aba4333250","iuml");

	return $conn;
}


?>