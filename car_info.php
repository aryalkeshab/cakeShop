<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/search.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Info</title>
</head>

<body>
    <div class="header">
        <nav>
            <div class="logo">
                <a href="index.php" class="logo"><img src="img/shopLogo.png" height="50"></a>
                <p class="logoFont">BLUE BIRD</p>
            </div>
            <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <!-- <li><a href="registration.html">Registration</a></li> -->
                <li><a href="search.php">Search</a></li>
                <li><a href="advertise.php">Advertisement</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <?php
                session_start();
                if (isset($_SESSION["username"])) { ?>
                    <li><a href="logout.php">Logout</a></li>
                <?php echo "Welcome " . $_SESSION["username"];
                } else { ?>
                    <li><a href="login.php">Login</a></li>
                <?php echo "Welcome Guest";
                }
                ?>
            </ul>
        </nav>
    </div><br><br><br>

    <h1 style="text-align: center;">Search Result Information:</h1>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "carshop";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $carId = $_GET["id"];
    $sql = "SELECT * FROM carinfo WHERE id = '$carId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            $imageName = $row["image"];
            $imagePath = "uploads/" . $imageName;

            $sqlForSellerName = "SELECT * FROM users WHERE id = '$row[user_id]'";
            $resultForSellerName = $conn->query($sqlForSellerName);
            $rowForSellerName = $resultForSellerName->fetch_assoc();

            // $sellerName = $rowForSellerName['username'];
    ?>

            <div class="card">
                <div class="card-image">
                    <img src="<?php echo $imagePath; ?>" alt="<?php echo $imageName; ?>" style="width:100%">
                </div>
                <div class="card-info">
                    <p>
                        <font color="black"><?php echo $row["description"]; ?></font>
                    </p>
                    <p class="price" style="color:black;">Price: $<?php echo $row["price"]; ?></p>
                    <p class="price" style="color:black;">Model: <?php echo $row["model"]; ?></p>
                    <p class="price" style="color:black;">Year: <?php echo $row["year"]; ?></p>
                    <p class="price" style="color:black;">Mileage: <?php echo $row["mileage"]; ?></p>
                    <p class="price" style="color:black;">Seller Name: <?php echo $rowForSellerName["name"]; ?></p>

                    <p style="color:red;text-align: center;">
                        <?php if (isset($_GET["error"])) {
                            echo $_GET["error"];
                        } ?>
                    </p>

                    <p>

                        <button class="open-button" onclick="openForm()">Buy</button>

                    </p>
                </div>
            </div>
    <?php
        }
    } else {
        echo "Car not found.";
    }

    $conn->close();
    ?>


    <div class="form-popup" id="myForm">
        <!-- we have code to validate using js but for ease we use required.onsubmit="script.js" -->
        <form action="save_order.php" class="form-container" onsubmit="Validate()" method="post">
            <h1 style="color:brown; font-weight:bold;">Car Order</h1>

            <label for="name"><b>Name</b></label>
            <input id="name" type="text" placeholder="Enter Name" name="name" required>

            <label for="email"><b>Email</b></label>
            <input id="email" type="text" placeholder="Enter Email" name="email" required>

            <label><b>Phone No.</b></label>
            <input id="phone" type="text" placeholder="Enter Phone no." name="phone" required>


            <label for="text"><b>Address</b></label>
            <input id="address" type="text" placeholder="Enter Your Address" name="address" required>
            <input type="hidden" name="car_id" value="<?php echo $carId; ?>">





            <button type="submit" class="btn" style="font-weight:bold;"> Place Order</button>
            <button type="button" class="btn cancel" onclick="closeForm()" style=" font-weight:bold;">Close</button>
        </form>
    </div>
    <!-- End form for cart. -->

    </div>
    </div>

    <script src="script.js"></script>

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

</body>

</html>