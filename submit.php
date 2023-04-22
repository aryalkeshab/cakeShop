<?php
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "Carform";
$tablename= "contact";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $contact= $_POST['contact'];
    $address= $_POST['address'];
    $message= $_POST['message'];
}

//connect to database
$conn = mysqli_connect($servername, $username, $password) or die(mysql_error());   //connect to server
mysqli_select_db($conn, $dbname) or die("Cannot connect to database");           //connect to database



//insert value to database
mysqli_query($conn,"INSERT INTO contact(name, email, contact, address, message) VALUES('$name', '$email', '$contact', '$address', '$message')");
print'<script>alert("Congrats! Your Submission is Successfully Registered!");</script>';

header("Location: index.html");
?>
