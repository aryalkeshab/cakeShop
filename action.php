<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="Carform";
$tablename="Carorder";

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $orderdate=$_POST['orderdate'];
  $flavor=$_POST['flavor'];
  $weight=$_POST['weight'];

$conn =mysqli_connect($servername,$username,$password )or die(mysql_error());

mysqli_select_db($conn,$dbname)or die("Cannot connect to database");

$query="INSERT INTO `Carorder`(`name`, `email`, `phone`, `address`, `orderdate`, `flavour`, `weight`) VALUES('$name','$email','$phone','$address','$orderdate','$flavor','$weight')";
// echo $query;
mysqli_query($conn,$query);

print'<script>alert("Congrats! Your Submission is Successfully Registered!"); </script>';
 header("Location: index.html");

}



 ?>
