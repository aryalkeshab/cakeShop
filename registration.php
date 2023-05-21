<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/login.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>

<body>

    <div class="loginForm">
        <form action="registration_submit.php" method="post">
            <h1>Car Seller Registration Form</h1>
            <div class="form-group">
                <label for="name">Name:</label><br>
                <input name="name" type="text" id="input1" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label><br>
                <input type="text" id="input2" placeholder="Enter your address" name="address" required>
            </div>
            <div class="form-group">
                <label for="number">Phone number:</label><br>
                <input type="number" id="input3" placeholder="Enter your phone number" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label><br>
                <input type="email" id="input4" placeholder="Enter your email address" name="email" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label><br>
                <input type="text" id="input5" placeholder="Enter your Username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label><br>
                <input type="password" id="input6" placeholder="Enter your Password" name="password" required>
            </div>
            <p style="color:red;">
                <?php
                if (isset($_GET['error'])) {
                    echo $_GET['error'];
                }
                ?>
            </p>
            <div class="submit">
                <button type="submit">Submit</button>
            </div>
            <div class="submit">
                <h3 style="text-align: center;">Already have an account? <a href="login.php">Login</a> </h3>


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