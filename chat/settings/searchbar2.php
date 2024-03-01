<?php
include "Database_Connection_rchat.php";
include "setting_userspage.php";
//session_start();
$sqlii2 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");
                if (mysqli_num_rows($sqlii2) > 0) {
                    $rowii = mysqli_fetch_assoc($sqlii2);
                }
for ($i=0; $i < count($arrr) ; $i++){ 
    if($arrr[$i]['unique_id']!==$rowii['unique_id']){
        echo $output[$i+1];
    }
}
?>