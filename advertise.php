<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/advertise.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisement Page</title>
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
                <li><a href="advertise.php" class="active">Advertisement</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <?php
        session_start();
        if(isset($_SESSION['username'])) {

          ?>
                <li><a href="logout.php">Logout</a></li>


                <?php
          echo "Welcome " . $_SESSION['username'];

        }
        else {
        ?>
                <li><a href="login.php">Login</a></li>
                <?php

          echo "Welcome Guest";
        }
        ?>
            </ul>
        </nav>
    </div><br><br><br><br>
    <div class="mainBody">
        <form action="advertise_submit.php" method="post" enctype="multipart/form-data">
            <h1>Advertisement</h1>
            <h2>Add Car</h2>
            <div class="form-group">
                <label for="name">Make:</label><br>
                <input name="make" type="text" required>
            </div>
            <div class="form-group">
                <label for="name">Model:</label><br>
                <input name="model" type="text" required>
            </div>
            <div class="form-group">
                <label for="name">Year:</label><br>
                <input name="year" type="number" required>
            </div>
            <div class="form-group">
                <label for="name">Mileage:</label><br>
                <input name="mileage" type="text" required>
            </div>
            <div class="form-group">
                <label for="name">Location:</label><br>
                <input name="location" type="text" required>
            </div>
            <div class="form-group">
                <label for="name">Price:</label><br>
                <input name="price" type="number" required>
            </div>
            <div class="form-group">
                <label for="name">Description:</label><br>
                <input name="description" type="text" required>
            </div>
            <div class="form-group">
                <label for="name"> Choose Image:</label><br>
                <input name="image" type="file" required>

                <p style="color:red;text-align: center;">
                    <?php
                if (isset($_GET['error'])) {
                echo $_GET['error'];
                }
                ?>
                </p>
                <p style="color:green;text-align: center;">
                    <?php
                
                if (isset($_GET['message'])) {
                echo $_GET['message'];
                }
                ?>
                </p>


                <div class="submit">
                    <button type="submit">Submit</button>
                </div>
        </form>
    </div>



    <script>
    const inputs = document.querySelectorAll('input');

    inputs.forEach(input => {
        input.addEventListener('focus', () => {
            input.style.backgroundColor = 'yellow';
        });

        input.addEventListener('blur', () => {
            input.style.backgroundColor = '';
        });
    });
    </script>

</body>

</html>