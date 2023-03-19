
<?php

include 'db.php';
include 'header.php';






if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $service=$_POST['service'];
  


  $sql="INSERT INTO `services`(`Name`, `email`, `service`) VALUES ('$name','$email','$service')";
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
  .img{
    opacity: 1;
    background-image: url('../Pakwheels/img/carousel-1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
  }
  
    

</style>
<body class="img">
<div class="container-fluid">
<div class="row">
<div class="col-12">
	
  <a href="index.php"><button class="btn btn-secondary"  style="background-color: #F77D0A;height:48px;width: 180px;border-radius:27px; float:left;margin-top:11px;">Back to Home Page</button></a>

	<hr>
  <div class="col-lg-12 col-sm-8" style="margin-top:10%;margin-left:30%;width:650px;height:460px;background-color:lightgray;opacity:0.8">
	<form method="post"  action="" style="margin-left:10%;padding-top:49px">
    <input type="hidden" name="Id">
		<div class="form-group">
			<label> <strong style="color:brown;font-size:large">Name</strong> </label>
			<input type="text" name="name" class="form-control" required style="width: 480px;opacity:1.8;">
		</div>
		
		<div class="form-group">
			<label><strong style="color:brown;font-size:large">Email</strong></label>
			<input type="email" name="email" class="form-control" required style="width: 480px;opacity:1.8">
		</div>
        
        <div class="form-group">
     <label><strong style="color:brown;font-size:large">Choose a Service:</strong></label><br>

            <select name="service" >
            <option value="Car Financing">Car Financing</option>
            <option value="Car Inspection">Car Inspection</option>
            <option value="Auto Repairing">Auto Repairing</option>
            <option value="Auto Cleaning">Auto Cleaning</option>
            <option value="Auto Painting">Auto Painting</option>
            </select>
		</div><br>
		
		<input type="submit" name="submit" value="Submit" class="btn btn-primary"  style="background-color: #F77D0A;height:38px;width: 120px;border-radius:27px ;border-color:#F77D0A;color:white"   >
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
