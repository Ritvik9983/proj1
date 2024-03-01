<?php 
include "Database_Connection_rchat.php";
if (isset($_POST['signup_submit'])) {
    //checking phone number exist in our data base or not
    $sql_phone = mysqli_query($conn, "SELECT phone FROM users WHERE phone = '{$_POST['phone']}'");
    if (mysqli_num_rows($sql_phone) > 0) {
        echo "This number has already been connected with another account";
    } 
    else {
        $cipher = "AES-128-CTR";
        $option = 0;
        $vector_initialize = "12345789654252";
        $encryption_key = "rchatpasword1564";
        $encrypted_password = openssl_encrypt($_POST['password'], $cipher, $vector_initialize, $option, $encryption_key);
        setcookie('fname', $_POST['fname'], time() + 1800);
        setcookie('lname', $_POST['lname'], time() + 1800);
        setcookie('phone', $_POST['phone'], time() + 1800);
        setcookie('password', $encrypted_password, time() + 1800);
        setcookie('img_name', $_FILES['img']['name'], time() + 1800);
        setcookie('img_type', $_FILES['img']['type'], time() + 1800);
        setcookie('img_tmp_name', $_FILES['img']['tmp_name'], time() + 1800);
        $index = strpos($_FILES['img']['name'], '.') + strlen('.');
        $img_ext_result = substr($_FILES['img']['name'], $index);
        setcookie('img_ext', $img_ext_result, time() + 1800);
        setcookie('extentions', 'png,jpg,jpeg', time() + 1800);
        if(move_uploaded_file($_FILES['img']['tmp_name'], "tmp/".$_FILES['img']['name'])){
            header("location:otp.php");
        }
        else{
            echo "File is not saved";
        }
    }
}
?>