<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=shadow-multiple">
    <title>Rchat(Log-In)</title>
</head>
<body>
    <div id="main">
        <h1 class="font-effect-shadow-multiple">Log-In</h1>
        <form action="settings/setting_login.php" method="post">
            <ul>
            <label for="mobile">Phone Number</label>
            <br>
            <input type="text" name="phone" placeholder="  Phone" required>
            <br>
            <label for="password">Password</label>
            <br>
            <input type="password" name="password" id="pass" placeholder="  Password" required>
            <br>
            <button type="submit" name="login_submit">Login</button>
            </ul>
        </form>
        <button id="showbtn" onclick="showpass()">Show</button>
        <p id="signin">Don't have an account?<a href="signup.php"><b>Sign-In</b></a></p>
    </div>
    <script src="js/login.js"></script>
</body>
</html>