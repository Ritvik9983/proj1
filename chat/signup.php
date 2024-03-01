<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=shadow-multiple">
    <title>Rchat(Sign-Up)</title>
</head>
<body>
    <div id="main">
        <h1 class="font-effect-shadow-multiple">Sign-Up</h1>
        <form action="settings/setting_signup.php" method="post" enctype="multipart/form-data">
            <ul>
            <label for="fname">First Name</label>
            <br>
            <input type="text" name="fname" placeholder="  First Name" required>
            <br>
            <label for="Lname">Last Name</label>
            <br>
            <input type="text" name="lname" placeholder="  Last Name" required>
            <br>
            <label for="mobile">Phone Number</label>
            <br>
            <input type="text" name="phone" placeholder="  Phone" required>
            <br>
            <label for="password1">Password</label>
            <br>
            <input onkeyup="password_strength()" type="password" id="pass1" placeholder="  Password" required>
            <br>
            <div id="strength_meter">
            <span class="indicator"></span>
            <span class="indicator"></span>
            <span class="indicator"></span>
            <span class="indicator"></span>
            </div>
            <label for="password2">Retype Password</label>
            <br>
            <input onkeyup="match_pass()" name="password" type="password" id="pass2" placeholder="  Retype Password" required>
            <br>
            <input style="display: none;" type="file" name="img" id="photo" required>
            <br>
            <button onclick="stop_submit()" name="signup_submit" id="submitform" type="submit">Signup</button>
            </ul>
        </form>
        <button id="showbtn1" onclick="showpass()">Show</button>
        <button id="showbtn2" onclick="showpass()">Show</button>
        <p id="login">Have an account?<a href="index.php"><b>Log-In</b></a></p>
        <p style="display:none;" id="indiword"></p>
        <p style="display:none;" id="warning"></p>
        <button id="photo_upload" onclick="filebutt()" style="position: relative; top: -10.5vw; left: 5.1vw;" type="button">Upload Photo</button>
    </div>
    <script src="js/signup.js"></script>
</body>
</html>