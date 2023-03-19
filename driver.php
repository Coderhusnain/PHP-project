
<?php

include 'db.php';
include 'header.php';







if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $Experience=$_POST['Experience'];
  


  $sql="INSERT INTO `driver`( `Name`, `email`, `years`) VALUES ('$name','$email','$Experience')";
  $res=mysqli_query($conn, $sql);
  $sq3="INSERT INTO `customer`( `name`, `email`) VALUES ('$name','$email')";
  $res=mysqli_query($conn, $sq3);

  header("Location:thanks.html");

  if ($res) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  


 
  }

 

?>

<!DOCTYPE html>
<html>
<head>
	<title>Driver Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
  h1{
    background-image: linear-gradient(to right,blue,orange, yellow,green,brown);
    text-align: center;
	height: 70px;
  }
  
    

</style>
<body style="background-image: url('../Pakwheels/img/m.jpg');background-repeat: no-repeat;background-size: cover;">
<div class="container-fluid">
<div class="row">
<div class="col-12">
	
    <a href="index.php"><button class="btn btn-secondary"  style="background-color: #F77D0A;height:48px;width: 180px;border-radius:27px; float:left;">Back to Home Page</button></a>

	<hr>
  <div class="col-lg-12" style="margin-top:10%;margin-left:30%;width:650px;height:430px;background-color:lightgray;opacity:0.8">
	<form method="post"  action="" style="margin-left:10%;padding-top:36px" >
    <input type="hidden" name="Id">
		<div class="form-group">
			<label> <strong style="color:brown;font-size:large">Name</strong> </label>
			<input type="text" name="name" class="form-control" required  style="width: 480px;opacity:1.8">
		</div>
		
		<div class="form-group">
			<label><strong style="color:brown;">Email</strong></label>
			<input type="email" name="email" class="form-control" required  style="width: 480px;opacity:1.8">
		</div>
        
        <div class="form-group">
        <label><strong style="color:brown;">Years of Experience</strong></label>
			<input type="text" name="Experience" class="form-control"  required  style="width: 480px;opacity:1.8">
		</div>
		
		<input type="submit" name="submit" value="Submit" style="background-color: #F77D0A;height:38px;width: 120px;border-radius:27px ;border-color:#F77D0A;color:white" >
	</form>
  </div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>

