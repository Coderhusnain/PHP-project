
<?php

include 'db.php';
include 'header.php';







if(isset($_POST['submit'])){
  $id=$_POST['Id'];
  $name=$_POST['name'];
  $email=$_POST['email'];


  $cname=$_POST['cname'];
  $model=$_POST['model'];
  $price=$_POST['price'];
  $avg=$_POST['avg'];
  


  $sq2="UPDATE `cars` SET `status`='0' WHERE `id`='$id'";
  $res=mysqli_query($conn, $sq2);
  $sq3="INSERT INTO `customer`( `name`, `email`) VALUES ('$name','$email')";
  $res=mysqli_query($conn, $sq3);
  $Id=mysqli_insert_id($conn);

  
  $sql="INSERT INTO `orders`(  `carid`,`cstid`) VALUES ('$id','$Id')";
  $res=mysqli_query($conn, $sql);
  


  


 



  
  header("Location:thanks.html");

  if ($res) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  


 
  }
  $id=$_GET['id'];
  
  $sql="SELECT * FROM `cars` WHERE id='$id'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result)
  
 

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
<body style="background-image: url('../Pakwheels/img/download (1).jpg');background-repeat: no-repeat;background-size: cover;">
<div class="container-fluid">
<div class="row">
<div class="col-12">
	
    <a href="index.php"><button class="btn btn-secondary"  style="background-color: #F77D0A;height:48px;width: 180px;border-radius:27px; float:left;margin-top:1%">Back to Home Page</button></a>

	<hr>
  <div class="col-lg-12" style="margin-top:3%;margin-left:30%;width:650px;height:630px;background-color:lightgray;opacity:0.8">
	<form method="post"  action="" style="margin-left:10%;padding-top:36px" >
    <input type="hidden" name="Id" value="<?php echo $row['id'];?> "readonly>
    <div class="form-group">
			<label> <strong style="color:brown;font-size:large">Name</strong> </label>
			<input type="text" name="name" class="form-control" required  style="width: 480px;opacity:1.8">
		</div>
    <div class="form-group">
			<label> <strong style="color:brown;font-size:large">Email</strong> </label>
			<input type="email" name="email" class="form-control" required  style="width: 480px;opacity:1.8">
		</div>
		<div class="form-group">
			<label> <strong style="color:brown;font-size:large">Car Name</strong> </label>
			<input type="text" name="cname" class="form-control" value="<?php echo $row['cname']?>" readonly style="width: 480px;opacity:1.8">
		</div>
		
		<div class="form-group">
			<label><strong style="color:brown;">Model</strong></label>
			<input type="model" name="model" class="form-control"  value="<?php echo $row['year']?>"  readonly style="width: 480px;opacity:1.8">
		</div>
        
        <div class="form-group">
        <label><strong style="color:brown;">Price</strong></label>
			<input type="text" name="price" class="form-control"  value="<?php echo $row['price']?>"readonly   style="width: 480px;opacity:1.8">
		</div>
    <div class="form-group">
        <label><strong style="color:brown;">Average</strong></label>
			<input type="text" name="avg" class="form-control"   value="<?php echo $row['km']?>"readonly  style="width: 480px;opacity:1.8">
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

