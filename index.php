<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/bc607b3e78.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>

    <title>Home Page</title>
    <?php
    if (isset($_GET["message"])) {
        $message = $_GET["message"];
        echo "<script>alert('$message');</script>";
    }

    ?>
</head>


<body>

    <div class="header">
        <nav>
            <div class="logo">
                <a href="index.php" class="logo"><img src="img/shopLogo.png" height="50"></a>
                <p class="logoFont">BLUE BIRD</p>
            </div>
            <ul class="menu">
                <li><a href="index.php" class="active">Home</a></li>
                <!-- <li><a href="registration.html">Registration</a></li> -->
                <li><a href="search.php">Search</a></li>
                <li><a href="advertise.php">Advertisement</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <?php
                session_start();
                if (isset($_SESSION['username'])) {

                ?>
                    <li><a href="logout.php">Logout</a></li>


                <?php
                    echo "Welcome " . $_SESSION['username'];
                } else {
                ?>
                    <li><a href="login.php">Login</a></li>
                <?php

                    echo "Welcome Guest";
                }
                ?>
            </ul>
        </nav>
    </div>
    <br>

    <!-------------------------------------------
          Slider Begins.
  --------------------------------------------->

    <section class="section">
        <div class="homePage">
            <div class="image">
                <img src="img/slider4.jpg" style="">
            </div>
            <div class="intro">
                <h1>Introduction</h1>
                <p>An online marketplace where dealers and private sellers can offer their vehicles to potential
                    customers is a
                    car selling website. These websites often include a large selection of available cars, trucks, and
                    SUVs, as
                    well as a number of tools and features to assist buyers in finding and acquiring the ideal vehicle.
                    This
                    includes tools for searching and filtering, thorough automobile listings, financing choices, and
                    contact
                    channels for connecting buyers and sellers. When it comes to purchasing and selling vehicles, car
                    selling
                    websites are a practical and effective way for buyers and sellers to conduct business.</p>
            </div>
        </div>
        <br>
    </section>


    <div id="contactme">
        <div class="contact-container">
            <div class="item1">
                <h3>Contact Me.</h3>
                <em>
                    <p>Feel Free to Contact Us.</p>
                </em>
            </div>
            <div class="item2">
                <form action="submit.php" method="POST" onsubmit="return validateForm()">
                    <div class="form-group">
                        <input type="text" name="name" class="forms" placeholder="Enter Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="forms" placeholder="Enter Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="contact" class="forms" placeholder="Enter Your Contact Number">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="forms" placeholder="Enter Your Address">
                    </div>


            </div>
            <div class="item3">
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control" placeholder="Plese Enter Your Message Here !"></textarea>
                </div>
            </div>

            <div class="item4">
                <div class="button">
                    <button id="sendMessageButton" class="btn btn-dark" type="submit">Send Message</button>
                </div>

            </div>
            </form>
        </div>
    </div>



    <!-------------------------------------------
			Contact Form Ends.
--------------------------------------------->


    <!-------------------------------------------
			  Footer Begins.
--------------------------------------------->

    <div id="footerid">


        <div class="footer-container">
            <div class="footer1">
                <h3>About us.</h3>
                <p>Welcome to our car buying and selling company! We are a team of dedicated professionals who are
                    passionate
                    about providing exceptional service to our clients.</p>

                <p>At our company, we strive to make the car buying and selling process as smooth and stress-free as
                    possible.
                    Our goal is to help our clients find the perfect car that meets their needs and budget, and to
                    provide a
                    hassle-free experience when it comes to selling their vehicles.
                </p>
                <p> We have a wide selection of cars available for purchase, ranging from practical family cars to
                    luxurious
                    sports cars. Our team of experts can help you find the car that suits your needs and provide you
                    with all the
                    information you need to make an informed decision.</p>

            </div>

            <div class="footer2">
                <h3>Connect With Us.</h3>
                &emsp;<i class="fa-solid fa-phone"></i> &emsp; 9824111452<br>
                &emsp;<i class="fa-solid fa-envelope"></i> &emsp; info@bakeryCar.com<br><br>
                <p><b>Delivery Hours:</b><br>
                    Monday—Friday: 09:00AM–08:00PM<br>
                    Saturday, Sunday & Holidays: 10:00AM–01:00PM
                </p> &emsp; &emsp;
                <a href="#" class="logo"><img src="img/shopLogo.png" height="100px" width="400px"></a><br>

            </div>

            <div class="footer3">
                <h3>Krishan Aryal</h3>
                <h4>CEO Blue Bird Car Buying and Selling</h4>
                <!-- <p>Mr. Samir <br> Mr. Binayak <br> Mr. Keshab</p>  -->
            </div>

            <div class="footer4">
                <p><b>All Right Reserved. &copy; 2023 || <a> Blue Bird Car Buying and Selling </a></b></p>
            </div>
            <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-angle-up"></i></button>





</body>

</html>