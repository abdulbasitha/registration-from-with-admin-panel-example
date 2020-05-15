<?php
session_start();
include('include/db_connect.php');
$mysqlii=connection();
mysqli_set_charset($mysqlii,"utf8");
if(isset($_POST['district']) && isset($_POST['constituency']) &&  isset($_POST['panchayath'])){ 
 $_SESSION['district'] = $_POST['district'];
 $_SESSION['constituency'] = $_POST['constituency'];
 $_SESSION['panchayath'] = $_POST['panchayath'];
  $_SESSION['unit'] = $_POST['unit'];
 header('location:reg.php');
} 
?>
<!DOCTYPE html>
<html>


<head>
   
    
	<title>MSF Unit Committee Registration</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	 <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><h4><b>&nbsp;Unit Committee Registration</b></h4>
</a>
		</div>
		<!-- menu items -->
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="index.php" >Registration</a></li>
				
			</ul>
		</div>
	</div>
</nav>

  <?php
if(isset($_SESSION['msg']))
{
?>
  <div class="<?php echo $_SESSION['color']; ?>" align="center">
    <strong><?php echo $_SESSION['msg'];  ?></strong>
  </div>
  <?php
  session_unset($_SESSION['msg']);
}
  ?>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form name="signupform" method="post">
				<fieldset>
					<legend>Registration</legend>

					<div class="form-group">
						<label for="name">Select District</label>
						<select type="text" name="district" id="district"   placeholder="* District" required  class="form-control" />
						<option value="">Select District</option>
			       	<option>Thiruvananthapuram</option>
					<option>Kollam</option>
					<option>Alappuzha</option>
					<option>Pathanamthitta</option>
					<option>Kottayam</option>
					<option>Idukki</option>
					<option>Ernakulam</option>
					<option>Thrissur</option>
					<option>Palakkad</option>
					<option>Malappuram</option>
					<option>Kozhikode</option>
					<option>Wayanad</option>
					<option>Kannur</option>
					<option>Kasaragod</option>
                    </select>

					                  

						

					</select>

						<span class="text-danger"></span>
					</div>
				
						<div class="form-group">
						<label for="name">Select Constituency</label>
						<select type="text" name="constituency" id="constituency"  placeholder="* Constituency" required  class="form-control" />
						 <option value="">Select an Option</option> 
					                  

						

					</select>

						<span class="text-danger"></span>
					</div>


						<div class="form-group">
						<label for="name">Select panchayath</label>
						<select type="text" name="panchayath" id="panchayath"  placeholder="* Panchayath" required  class="form-control" />
						 <option value="">Select an Option</option> 
					           </select>
					           </div>       
	<div class="form-group">
						<label for="name">Enter Unit</label>
						<select type="text" name="unit" id="unit"   placeholder="* Unit" required  class="form-control" />
					 <option value="">Select an Option</option> 
						</select>

				

						<span class="text-danger"></span>
					</div>

					<div class="form-group">
						<input type="submit" name="Next" value ="Next" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-success"></span>
			<span class="text-danger"></span>
		</div>
	</div>
	
	</div>
</div>
 <script>
    
					
					
				   $( document ).ready(function() {
					   
					   $('#district').on('change',function(){ 
        var district = $(this).val();
        if(district){
            $.ajax({
                type:'POST',
                url:'ajax/ajaxData.php',
                data:'district='+district,

                success:function(html){
                   
                    $('#constituency').html(html);
                    $('#panchayath').html('<option value="">Select Constituency first</option>'); 
                    $('#unit').html('<option value="">Select Constituency first</option>');
                                      }
                   }); 



                      }else{
                           $('#constituency').html('<option value="">Select District first</option>');
                           $('#panchayath').html('<option value="">Select District first</option>'); 
                           $('#unit').html('<option value="">Select District first</option>');
                           }
    });
    
    $('#constituency').on('change',function(){//change state to display all city
        var constituency = $(this).val();

        if(constituency){
            $.ajax({
                type:'POST',
                url:'ajax/ajaxData.php',
                data:'constituency='+constituency,
                success:function(html){
                	 $('#unit').html('<option value="">Select Panchayath first</option>'); 
                    $('#panchayath').html(html);
                                      }
                   }); 
                    }else{
                          $('#panchayath').html('<option value="">Select Constituency first</option>'); 
     						$('#unit').html('<option value="">Select Constituency first</option>'); 

                         }
    });

$('#panchayath').on('change',function(){//change state to display all city
        var panchayath = $(this).val();

        if(panchayath){
            $.ajax({
                type:'POST',
                url:'ajax/ajaxData.php',
                data:'panchayath='+panchayath,
                success:function(html){
                	 
                    $('#unit').html(html);
                                      }
                   }); 
                    }else{
                           $('#unit').html('<option value="">Select Panchayath first</option>'); 

                         }
    });





	});





	 
				   </script>

<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>





