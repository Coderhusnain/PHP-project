<?php
include "db.php";
include "header1.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<style>
 

</style>
<body style="background-image:url('../Pakwheels/img/form.jpg');background-repeat:no-repeat;background-size:cover">

<a href="add.php"><button type="button" class="btn btn-primary">Add new Record</button></a><br><br>

  <table class="table table-dark table-bordered table-hover-dark table-responsive" style="color:white">
  <thead>
    <tr style="background-color:#8486A0">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      
      <th scope="col">Price</th>
      <th scope="col">Model</th>
      <th scope="col">KM/Litre</th>
      <th scope="col">Status</th>
      <th scope="col">Image</th>



      
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
   

  
</html>
<?php
  // include "index.php";
  include "db.php";
 


  

  
  $sql = "SELECT * FROM `cars`";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $id=$row['id'];
     
      $name=$row['cname'];
      $price=$row['price'];
      $year=$row['year'];
      $km=$row['km'];
      $img=$row['img'];
      $status=$row['status'];



      echo'<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$price.'</td>
      <td>'.$year.'</td>
      <td>'.$km.'</td>
      <td>'.$status.'</td>

      <td style="padding-left:7%"><img src="../Pakwheels/uploads/'.$img.' " width="300" height="100" ></td>

     
      
      
       

      <td>
      <button class="btn btn-warning"><a href="edit.php ? id= '.$id.' " style="color:white" >Update</a></button>    
      <button class="btn btn-danger " ><a href ="delete.php ? id='.$id.' " style="color:white"" >Delete</a></button></td>
      </tr>';
      

   
   
     
     
      
     
       

     
   
   
  

    }
  } else {
    echo "0 results";
  }
  ?>
</tbody>


</table>

