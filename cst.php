
<?php

include 'db.php';





if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $car=$_POST['car'];
  


  $sql="INSERT INTO `order`(`Name`, `email`, `car`) VALUES ('$name','$email','$car')";
  header("Location:th.php");

  if (mysqli_query($conn, $sql)) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  


 
  }

  $id=$_GET['id'];
  $sq="SELECT * FROM `cars` WHERE id='$id'";
  $result = mysqli_query($conn, $sq);
  $ro = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html>
<head>
	<title> Image Upload</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
   .img{
    opacity: 1;
    background-image: url('../Pakwheels/img/about.png');
    background-size: cover;
    background-repeat: no-repeat;
  }
 
  
    

</style>
<body class="img">
<div class="container-fluid">
<div class="row">
<div class="col-12">
	
<a href="index.php"><button class="btn btn-secondary"  style="background-color: #F77D0A;height:48px;width: 180px;border-radius:27px; float:left;margin-top:12px;">Back to Home Page</button></a>
	<hr>
  <div class="col-lg-12 col-sm-8" style="margin-top:5%;margin-left:30%;width:650px;height:500px;background-color:lightgray;opacity:0.9">
	<form method="post"  action="" style="margin-left:10%;padding-top:29px;">
    <input type="hidden" name="Id" value="<?php echo $ro['id'];?>">
		<div class="form-group">
			<label> <strong  style="color:brown;font-size:large">Name</strong> </label>
			<input type="text" name="name" class="form-control" required style="width: 480px;opacity:1.8;">
		</div>
		
		<div class="form-group">
			<label><strong  style="color:brown;font-size:large">Email</strong></label>
			<input type="email" name="email" class="form-control" required style="width: 480px;opacity:1.8;">
		</div>
        <p><strong  style="color:brown;font-size:large">Please select Payment Method:</strong></p>
        <input type="radio" id="html" name="fav_language" value="Paypal" required>
            <label for="html">Paypal</label><br>
            <input type="radio" id="css" name="fav_language" value="Easypaisa">
            <label for="css">Easypaisa</label><br>
            <input type="radio" id="javascript" name="fav_language" value="Debitcard">
            <label for="javascript">Debitcard</label>
        <div class="form-group">
        <label><strong  style="color:brown;font-size:large">Car</strong></label>
			<input type="text" name="car" class="form-control" value="<?php echo $ro['cname'];?>" style="width: 480px;opacity:1.8;" required>
		</div>
		
		<input type="submit" name="submit" value="Submit" class="btn btn-primary" style="background-color: #F77D0A;height:38px;width: 120px;border-radius:27px ;border-color:#F77D0A;color:white" >
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


