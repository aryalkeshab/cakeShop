<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "carshop";
$tablename = "orders";

($conn = mysqli_connect($servername, $username, $password, $dbname))
    or die("Cannot connect to database"); //connect to server
mysqli_select_db($conn, $dbname) or die("Cannot connect to database"); //connect to database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    $carId = $_POST["car_id"];

    echo $carId;

    $sql = "INSERT INTO orders (name, email, phone, address, car_id) VALUES ('$name', '$email', '$phone', '$address', '$carId')";
    echo $sql;

    if ($conn->query($sql) === true) {
        $message =
            "Order placed successfully!. You will get a call for confirmation.";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: index.php?message=" . urlencode($message));
    } else {
        $error = "Failed to place order. Please try again later.";
        echo "<script type='text/javascript'>alert('$error');</script>";
        header("Location: car_info.php?id=$carId&error=" . urlencode($error));
    }
}
