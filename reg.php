<?php
session_start();

?>
<!DOCTYPE html>
<html>

<head>
   
    
	<title>MSF Unit Committee Registration</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	 
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
			<form name="signupform" method="post" action="include/reg.inc.php">
				<fieldset>
					<legend>Registration</legend>

					<div class="form-group">
						<h4><u>President</u></h4>
						<label for="name">Name</label>
						<input type="text" name="President_name"   placeholder="* President Name" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
						<div class="form-group">
						
						<label for="name">Contact Number</label>
						<input type="number" name="President_number"   placeholder="* President Contact Number (10 Digit)" min="1111111111" max="9999999999" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
					<div class="form-group">
						
						<label for="name">Course</label>
						<input type="text" name="President_course"   placeholder="*Course"  required  class="form-control" />
						<span class="text-danger"></span>
					</div>
						<div class="form-group">
						<h4><u>Vice President-I</u></h4>
						<label for="name">Name</label>
						<input type="text" name="Vice_President_name1"   placeholder="* Vice President Name" required  class="form-control" />
						<span class="text-danger"></span>
					</div>

							<div class="form-group">
						
						<label for="name">Contact Number</label>
						<input type="number" name="Vice_President_number1"   placeholder="* Vice President Contact Number (10 Digit)" min="1111111111" max="9999999999" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
						<div class="form-group">
						
						<label for="name">Course</label>
						<input type="text" name="Vice_President_course1"   placeholder="*Course"  required  class="form-control" />
						<span class="text-danger"></span>
					</div>
						<div class="form-group">
						<h4><u>Vice President-II</u></h4>
						<label for="name">Name</label>
						<input type="text" name="Vice_President_name2"   placeholder="* Vice President Name" required  class="form-control" />
						<span class="text-danger"></span>
					</div>

							<div class="form-group">
						
						<label for="name">Contact Number</label>
						<input type="number" name="Vice_President_number2"   placeholder="* Vice President Contact Number (10 Digit)" min="1111111111" max="9999999999" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
						<div class="form-group">
						
						<label for="name">Course</label>
						<input type="text" name="Vice_President_course2"   placeholder="*Course"  required  class="form-control" />
						<span class="text-danger"></span>
					</div>
						<div class="form-group">
						<h4><u>General Secretary</u></h4>
						<label for="name">Name</label>
						<input type="text" name="General_Secretary_name"   placeholder="* General Secretary Name" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
						<div class="form-group">
						
						<label for="name">Contact Number</label>
						<input type="number" name="General_Secretary_number"   placeholder="* General Secretary Contact Number (10 Digit)" min="1111111111" max="9999999999" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
					<div class="form-group">
						
						<label for="name">Course</label>
						<input type="text" name="General_Secretary_course"   placeholder="*Course"  required  class="form-control" />
						<span class="text-danger"></span>
					</div>


						<div class="form-group">
						<h4><u>Secretary</u></h4>
						<label for="name">Name</label>
						<input type="text" name="Secretary_name"   placeholder="* Secretary Name" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
						<div class="form-group">
						
						<label for="name">Contact Number</label>
						<input type="number" name="Secretary_number"   placeholder="* Secretary Contact Number (10 Digit)" min="1111111111" max="9999999999" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
					<div class="form-group">
						
						<label for="name">Course</label>
						<input type="text" name="Secretary_course"   placeholder="*Course"  required  class="form-control" />
						<span class="text-danger"></span>
					</div>

						<div class="form-group">
						<h4><u>Joint Secretary-I</u></h4>
						<label for="name">Name</label>
						<input type="text" name="jointSecretary_name1"   placeholder="* Secretary Name" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
						<div class="form-group">
						
						<label for="name">Contact Number</label>
						<input type="number" name="jointSecretary_number1"   placeholder="* Secretary Contact Number (10 Digit)" min="1111111111" max="9999999999" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
					<div class="form-group">
						
						<label for="name">Course</label>
						<input type="text" name="jointSecretary_course1"   placeholder="*Course"  required  class="form-control" />
						<span class="text-danger"></span>
					</div>

						<div class="form-group">
						<h4><u>Joint Secretary-II</u></h4>
						<label for="name">Name</label>
						<input type="text" name="jointSecretary_name2"   placeholder="* Joint Secretary Name" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
						<div class="form-group">
						
						<label for="name">Contact Number</label>
						<input type="number" name="jointSecretary_number2"   placeholder="* Joint Secretary Contact Number (10 Digit)" min="1111111111" max="9999999999" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
					<div class="form-group">
						
						<label for="name">Course</label>
						<input type="text" name="jointSecretary_course2"   placeholder="*Course"  required  class="form-control" />
						<span class="text-danger"></span>
					</div>
					
						<div class="form-group">
						<h4><u>Treasure</u></h4>
						<label for="name">Name</label>
						<input type="text" name="treasurer_name"   placeholder="* Treasurer Name" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
						<div class="form-group">
						
						<label for="name">Contact Number</label>
						<input type="number" name="treasurer_number"   placeholder="* Treasurer Contact Number (10 Digit)" min="1111111111" max="9999999999" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
					<div class="form-group">
						
						<label for="name">Course</label>
						<input type="text" name="treasurer_course"   placeholder="*Course"  required  class="form-control" />
						<span class="text-danger"></span>
					</div>

						<div class="form-group">
						<h4><u>Little Wing</u></h4>
						<label for="name">Name</label>
						<input type="text" name="name_Little_Wing"   placeholder="* Name" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
						<div class="form-group">
						
						<label for="name">Contact Number</label>
						<input type="number" name="Little_Wing_number"   placeholder="*Contact Number (10 Digit)" min="1111111111" max="9999999999" required  class="form-control" />
						<span class="text-danger"></span>
					</div>
					<div class="form-group">
						
						<label for="name">Course</label>
						<input type="text" name="Little_Wing_course"   placeholder="*Course"  required  class="form-control" />
						<span class="text-danger"></span>
					</div>
						<div class="form-group">
						
						<label for="name">Total Memberships </label>
						<input type="number" name="Membership_Number" placeholder="*Total Memberships" required  class="form-control" />
						<span class="text-danger"></span>
					</div>




					<div class="form-group">
						<input type="submit" name="Next" value ="Submit" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-success"></span>
			<span class="text-danger"></span>
		</div>
	</div>
	
	</div>
</div>


<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>





