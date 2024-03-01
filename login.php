<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="shortcut icon" href="assets/images/logo5.png" type="image/x-icon">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <form action="settings/login.php" method="post" enctype="multipart/form-data" class="appointment-form" id="appointment-form">
                <h2>Sign-in Portal</h2>
                <div class="form-group-1">
                    <input type="text" name="udetail" id="udetail" placeholder="Phone, email address" required />
                    <input type="password" name="pass" id="pass" placeholder="Password" required />
                </div>
                <div style="display: inline-block;" class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Sign-in" />
                </div>
                <p><a href="signup.php">Don't have an account? Sign up</a></p>
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        function button_click(a){
                var x = document.getElementById(a);
                x.click();
                }
    </script>
</body>
</html>