<?php
session_start();
include "Database_Connection_rchat.php";
if(isset($_POST['login_submit'])){
    $sql_phone = mysqli_query($conn, "SELECT phone FROM users WHERE phone = '{$_POST['phone']}'");
    $cipher = "AES-128-CTR";
    $option = 0;
    $vector_initialize = "12345789654252";
    $encryption_key = "rchatpasword1564";
    $encrypted_password = openssl_encrypt($_POST['password'], $cipher, $vector_initialize, $option, $encryption_key);
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE phone = '{$_POST['phone']}' AND password = '{$encrypted_password}'");
    if (mysqli_num_rows($sql_phone) > 0) {
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['unique_id'] = $row['unique_id'];
            $status = "Active Now";
            mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = '{$row['unique_id']}'");
            ?>
            <script>
                window.location.href = "../../index.php";
            </script>
            <?php
        }
        else{
            echo "wong password";
        }
    } 
    else {
        echo "not available";
    }
}
?>