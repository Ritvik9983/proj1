<?php
session_start();
//$otpnum = mt_rand(42456, 986510);
//setcookie('otpnumcook', $otpnum, time() + 120);
include "setting_signup.php";

$fname = $_COOKIE['fname'];
$lname = $_COOKIE['lname'];
$phone = $_COOKIE['phone'];
$password = $_COOKIE['password'];
$img_name = $_COOKIE['img_name'];
$img_type = $_COOKIE['img_type'];
$img_tmp_name = $_COOKIE['img_tmp_name'];
$img_ext = $_COOKIE['img_ext'];
$extentions = explode(',',$_COOKIE['extentions']);

#sinch api
/*$service_plan_id = "ad2fcb0f203640559fc63e69f92ddb16";
$bearer_token = "c6ff35a2bf904d84b5c6baa96c5738ff";

//Any phone number assigned to your API
$send_from = "447520652899";
//May be several, separate with a comma ,
$recipient_phone_numbers = "91" . $phone;
$message = "{$recipient_phone_numbers} your otp is {$otpnum}";
// Check recipient_phone_numbers for multiple numbers and make it an array.
if (stristr($recipient_phone_numbers, ',')) {
    $recipient_phone_numbers = explode(',', $recipient_phone_numbers);
} else {
    $recipient_phone_numbers = [$recipient_phone_numbers];
}

// Set necessary fields to be JSON encoded
$content = [
    'to' => array_values($recipient_phone_numbers),
    'from' => $send_from,
    'body' => $message
];

$data = json_encode($content);

$ch = curl_init("https://us.sms.api.sinch.com/xms/v1/{$service_plan_id}/batches");
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BEARER);
curl_setopt($ch, CURLOPT_XOAUTH2_BEARER, $bearer_token);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}
curl_close($ch);*/
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rchat(Enter OTP)</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="text" name="otp_by_user">
        <button name="otp_submit" type="submit">OTP submit</button>
    </form>
</body>

</html>
<?php

/*if (isset($_POST['otp_submit'])) {
    (int)$otp = $_POST['otp_by_user'];
    if ($otp == $_COOKIE['otpnumcook']) {*/
        if(in_array($img_ext, $extentions) === true){
            $img_time = time();//this gives current time
            $new_name_img = "images/".$img_time.$img_name;
            if(rename("tmp/".$img_name, $new_name_img)){//if user uploaded file is moved to folder
                setcookie('img_name', "Deleted", time() - 1800);
                $status = "Active Now";
                $random_id = rand(time(), 10000000);
                $sql_signup = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, phone, password, img, status) 
                                    VALUES ('$random_id', '$fname', '$lname', '$phone', '$password', '$new_name_img', '$status')");
                if($sql_signup){//if data inserted
                        $sql_session = mysqli_query($conn, "SELECT * FROM users WHERE phone = '{$phone}'");
                        if(mysqli_num_rows($sql_session) > 0){
                            $row = mysqli_fetch_assoc($sql_session);
                            $_SESSION['unique_id'] = $row['unique_id'];
                            echo "success";
                            ?>
                            <script>
                                window.location.href = "../../index.php";
                            </script>
                            <?php
                        }
                        else{
                            echo "session is not connected";
                        }
                }
                else{
                    echo "form data is not inserted";
                }
            }
            else{
                echo "img is not uploded";
            }
        }
        else{
            echo "img ext is not matched";
        }
    //} 
    /*else{
        echo "otp not match";
    }
}*/
?>