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
            <form action="settings/signup.php" method="post" enctype="multipart/form-data" class="appointment-form" id="appointment-form">
                <h2>Sign-up Portal</h2>
                <div class="form-group-1">
                    <input type="text" name="uname" id="uname" placeholder="Full Name" required />
                    <input type="text" name="uemail" id="uemail" placeholder="Email" required />
                    <input type="text" name="uphone" id="uphone" placeholder="Contact" required />
                    <input type="password" name="pass" id="pass" placeholder="Password" required />
                    <input type="text" name="branch" id="branch" placeholder="Branch" required />
                    <div class="select-list">
                        <select name="year" id="year">
                            <option slected value="">Select Year</option>
                            <option value="1">1st year</option>
                            <option value="2">2nd year</option>
                            <option value="3">3rd year</option>
                            <option value="4">4th year</option>
                        </select>
                    </div>
                </div>
                <div style="display: inline-block; margin-right:30%;" class="form-submit">
                    <button onclick="button_click('uphoto')" class="submit" type="button">Upload Photo</button>
                    <input style="display:none;" type="file" name="uphoto" id="uphoto">
                </div>
                <div style="display: inline-block;" class="form-submit">
                    <input type="submit" name="submit" id="submit" class="submit" value="Sign-up" />
                </div>
                <p><a href="login.php">Have an account? Sign in</a></p>
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