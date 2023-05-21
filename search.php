<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/search.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
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
                <li><a href="search.php" class="active">Search</a></li>
                <li><a href="advertise.php">Advertisement</a></li>
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
        ?>            </ul>
        </nav>
    </div><br><br><br>
    <div class="mainBody" style="background-image: url('img/car1.png');">
        <div class="overlay">
            <h1 class="hidden">Test</h1><br><br><br><br>
            <div class="search">
                <form action="search_submit.php" method="post">
                    <h1>Search the car you want</h1>
                    <div class="form-group">
                        <label for="">Model:</label>
                        <input type="text" name ="model">
                    </div>
                    <div class="form-group">
                        <label for="">Location:</label>
                        <input type="text" name ="location">
                    </div>
                                    <p style="color:red;">

                    <?php
                      if (isset($_GET['error'])) {
                echo $_GET['error'];
                }
?>
</p>
                    <div class="form-group submit">
                        <button>Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
  

    <script src="script.js"></script>

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

    
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <script type="text/javascript">
        function Validate() {
            var name = document.getElementById("name");
            var email = document.getElementById("email");
            var phone = document.getElementById("phone");
            var address = document.getElementById("address");


            if (name.value.trim() == "" || email.value.trim() == "" || phone.value.trim() == "" || address.value.trim() == "") {
                alert(" Username and Password Field can't be empty");
                return false;
            }
            else {
                return true;
            }
        }

        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>

</body>

</html>