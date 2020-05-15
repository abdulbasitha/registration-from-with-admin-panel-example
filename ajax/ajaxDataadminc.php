<?php
//Include database configuration file
include('../include/db_connect.php');





$mysqli=connection();
mysqli_set_charset($mysqli,"utf8");
if(isset($_POST["district"]) && !empty($_POST["district"])){
    $dis=$_POST["district"];
   
    $query = $mysqli->query("SELECT DISTINCT constituency from web_select WHERE district='$dis' ORDER BY constituency ASC");

  
    $rowCount = $query->num_rows;

   
    if($rowCount > 0){
        while($row = $query->fetch_assoc()){
          
            echo '<option>'.$row['constituency'].'</option>';
        }
    }else{
        echo '<option value="">Not available</option>';
    }
}

if(isset($_POST["constituency"]) && !empty($_POST["constituency"])){
 
	$constituency=$_POST["constituency"];
    $query = $mysqli->query("SELECT DISTINCT user_panchayath from web_select WHERE constituency='$constituency' ORDER BY user_panchayath ASC");

    $rowCount = $query->num_rows;

   
    if($rowCount > 0){
       
        while($row = $query->fetch_assoc()){
             echo '<option>'.$row['user_panchayath'].'</option>';
        }
    }else{
        echo '<option value="">Not available</option>';
    }
}


?>
