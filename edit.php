

<?php

include 'db.php';



if(isset($_POST['submit'])){
  $name=$_POST['name'];
  
  $id=$_POST['Id'];
  $price=$_POST['price'];
  $year=$_POST['year'];
  $km=$_POST['km'];
  $img=$_POST['img'];
  $st=$_POST['st'];
   
$sql="UPDATE `cars` SET `cname`='$name',`price`='$price',`year`='$year',`km`='$km',`img`='$img',`status`='$st' WHERE `id`='$id'";

header("Location:display.php");
if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// mysqli_close($conn);
}

$id=$_GET['id'];
$sql="SELECT * FROM `cars` WHERE id='$id'";
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

  <div class="col-lg-12 col-sm-8" style="margin-top:3%;margin-left:30%;width:650px;height:590px;background-color:lightgray;opacity:0.9">
        <form action="" method="POST"  enctype="multipart/form-data" style="margin-left:12%;padding-top:45px;">
        <input type="hidden" name="Id" value="<?php echo $row['id'];?>">
        <div class="form-group">
			<label>Name</label>
			<input type="text" name="name" class="form-control" value="<?php echo $row['cname'];?>" style="width: 480px;opacity:0.9;" >
		</div><br>
		<div class="form-group">
			<label>Price</label>
			<input type="text" name="price" class="form-control" value="<?php echo $row['price'];?>" style="width: 480px;opacity:0.9;">
		</div><br>
    <div class="form-group">
			<label>Year</label>
			<input type="text" name="year" class="form-control" value="<?php echo $row['year'];?>" style="width: 480px;opacity:0.9;">
		</div><br>
    <div class="form-group">
			<label>KM/Litre</label>
			<input type="text" name="km" class="form-control" value="<?php echo $row['km'];?>"style="width: 480px;opacity:0.9;" >
		</div><br>
    <div class="form-group">
			<label>Image</label>
			<input type="file" name="img" class="form-control" style="width: 480px;opacity:0.9;" value="<?php echo $row['img'];?>">
		</div>
    <div class="form-group">
			<label>Status</label>
			<input type="text" name="st" class="form-control" style="width: 480px;opacity:0.9;" value="<?php echo $row['status'];?>">
		</div>
		<br>
		
		<input type="submit" name="submit" value="Submit" class="btn btn-primary"  style="background-color: #F77D0A;height:38px;width: 120px;border-radius:27px ;border-color:#F77D0A;color:white">
        </form>
        </div>
</body>
</html>

 