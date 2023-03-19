
<!DOCTYPE html>
<html>
<head>
	<title> Image Upload</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
  h1{
    background-color:rgb(231, 177, 29);
    text-align: center;
  }
  
    

</style>
<body style="background-color:#8486A0">
<div class="container-fluid">
<div class="row">
<div class="col-12">

	<h1>Insert Data</h1>
	<a href="index.php"><button class="btn btn-secondary" style="background-color:rgb(231, 177, 29)">Back to Home Page</button></a>
	

	
	<hr>
	<div class="col-lg-12 col-sm-8" style="margin-top:1%;margin-left:30%;width:650px;height:550px;background-color:lightgray;opacity:0.9">
	<form method="post" enctype="multipart/form-data" action=""  style="margin-left:10%;padding-top:45px;">
		<div class="form-group">
			<label>Car Name</label>
			<input type="text" name="name" class="form-control"style="width: 480px;opacity:0.9;" required>
		</div>
		
		<div class="form-group">
			<label>Price</label>
			<input type="text" name="price" class="form-control"style="width: 480px;opacity:0.9;"required >
		</div>
		<div class="form-group">
			<label>Year</label>
			<input type="text" name="year" class="form-control" style="width: 480px;opacity:0.9;"required>
		</div>
    <div class="form-group">
			<label>KM/Litre</label>
			<input type="text" name="km" class="form-control" style="width: 480px;opacity:0.9;"required >
		</div>
		<div class="form-group">
			<label>Image</label>
			<input type="file" name="img" class="form-control" style="width: 480px;opacity:0.9;"required >
		</div>
		
		<input type="submit" name="submit" value="Submit" class="btn btn-primary"style="background-color: #F77D0A;height:38px;width: 120px;border-radius:27px ;border-color:#F77D0A;color:white">
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

include 'db.php';





if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $price=$_POST['price'];
  $year=$_POST['year'];
  $km=$_POST['km'];
  $img=$_POST['img'];
   
 
	$filename=$_FILES["img"]["name"];
	$tempname=$_FILES["img"]["tmp_name"];
	$folder="uploads/".$filename;
	// move_uploaded_file($tempname,$folder);
	if (move_uploaded_file($_FILES["img"]["tmp_name"], $folder)) {
		echo "The file has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}


  $sql="INSERT INTO `cars`( `cname`, `price`, `year`, `km`,`img`) VALUES ('$name','$price','$year','$km','$filename')";
  
  header("Location:display.php");

  if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  }




?>

