<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Page</title>
</head>

<body>
    <div class="loginForm">
        <form action="login_submit.php" method="post">
            <h1>Login Form</h1>
            <div class="form-group">

                <div class="form-group">
                    <label for="name">Username:</label><br>
                    <input name="username" type="text" placeholder="Enter your Username" required>
                </div>
                <div class="form-group">
                    <label for="name">Password:</label><br>
                    <input name="password" type="password" placeholder="Enter your Password" required>
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
                    <h3 style="text-align: center;">Don't have an account? <a href="registration.php">Register</a> </h3>


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