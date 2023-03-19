<?php
include "db.php"
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
  .h1{
    background-image: linear-gradient(to right,green,blue, yellow,chocolate,aqua);
    text-align: center;
  }
  
    

</style>
<body>
  <h1 class="h1">Cars Data</h1>
  <a href="index.php"><button class="btn btn-secondary">Back to Home Page</button></a>

  <a href="add.php"><button type="button" class="btn btn-primary">Add new Record</button></a><br><br>

  <table class="table table-dark table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Model</th>
      <th scope="col">Average</th>
      <th scope="col">Price</th>
      
     

    </tr>
  </thead>
  <tbody>
   

  
</html>
<?php
  // include "index.php";
  include "db2.php";
 


  

  
  $sql = "SELECT * FROM `detail`";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $id=$row['id'];
     
      $name=$row['cname'];
      $year=$row['model'];
      $avg=$row['avg'];
      $price=$row['price'];
      
     
      echo'<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      
      <td>'.$year.'</td>
      <td>'.$avg.'</td>
      <td>'.$price.'</td>
     
      
      
       

      
      </tr>';
      

   
   
     
     
      
     
       

     
   
   
  

    }
  } else {
    echo "0 results";
  }
  ?>
</tbody>


</table>

