

<?php

include 'db.php';



if(isset($_POST['submit'])){
  $name=$_POST['name'];
  
  $id=$_POST['Id'];
  $email=$_POST['email'];
  $car=$_POST['carid'];
  $date=$_POST['date'];
$sql="UPDATE `orders` SET `Name`='$name',`email`='$email',`carid`='$car',`date`='$date' WHERE  `id`='$id'";

header("Location:car_book.php");
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// mysqli_close($conn);
}

$id=$_GET['id'];
$sql="SELECT * FROM `orders` WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
   .bd{
        margin-left: 10px;
        width: 300px;
        
    }
    .h1{
    background-color:rgb(231, 177, 29);
    text-align: center;
  }
  
</style>

<body style="background-color:#8486A0">
  <h1 class="h1">Update Record</h1>

  <div class="col-lg-12 col-sm-8" style="margin-top:5%;margin-left:30%;width:650px;height:500px;background-color:lightgray;opacity:0.9">
        <form action="" method="POST"  enctype="multipart/form-data" style="margin-left:12%;padding-top:45px;">
        <input type="hidden" name="Id" value="<?php echo $row['id'];?>">
        <div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo $row['Name'];?>" style="width: 480px;opacity:0.9;" >
		</div><br>
		<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control" value="<?php echo $row['email'];?>" style="width: 480px;opacity:0.9;">
		</div><br>
    <div class="form-group">
			<label>Car</label>
			<input type="text" name="car" class="form-control" value="<?php echo $row['carid'];?>" style="width: 480px;opacity:0.9;">
		</div><br>
    <div class="form-group">
			<label>Date</label>
			<input type="text" name="date" class="form-control" value="<?php echo $row['date'];?>"style="width: 480px;opacity:0.9;" >
		</div><br>
		
		<input type="submit" name="submit" value="Submit" class="btn btn-primary"  style="background-color: #F77D0A;height:38px;width: 120px;border-radius:27px ;border-color:#F77D0A;color:white">
        </form>
        </div>
</body>
</html>

 