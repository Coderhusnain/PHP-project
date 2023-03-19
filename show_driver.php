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
 .navbar-inverse{
  background-color:rgb(231, 177, 29);
 }
    

</style>
<body style="background-image:url('../Pakwheels/img/images (44).jpg');background-repeat:no-repeat;background-size:cover">


  <table class="table table-dark table-bordered " style="color:white">
  <thead>
    <tr  style="background-color:#8486A0">
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      
      <th scope="col">Email</th>
      <th scope="col">Years of Experience</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
   

  
</html>
<?php
  // include "index.php";
  include "db.php";
 


  

  
  $sql = "SELECT * FROM `driver`";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $id=$row['id'];
     
      $name=$row['Name'];
      $email=$row['email'];
      $year=$row['years'];
      $Date=$row['Date'];
      echo'<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$year.'</td>
      <td>'.$Date.'</td>
     
      
      
       

      <td>
      <button class="btn btn-warning"><a href="edit_driver.php ? id= '.$id.' " style="color:white" >Update</a></button>    
      <button class="btn btn-danger " ><a href ="delete_driver.php ? id='.$id.' " style="color:white"" >Delete</a></button></td>
      </tr>';
      

   
   
     
     
      
     
       

     
   
   
  

    }
  } else {
    echo "0 results";
  }
  ?>
</tbody>


</table>

