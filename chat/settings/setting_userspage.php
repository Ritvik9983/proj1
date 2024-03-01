<?php
session_start();
include "Database_Connection_rchat.php";
$sql = mysqli_query($conn, "SELECT * FROM users");
$output[] = "";
$arrr =[];
error_reporting(E_ALL ^ E_WARNING);
if (mysqli_num_rows($sql) == 1) {
    implode(" ", $output);
    $output = "No one is online right now";
}
else if (mysqli_num_rows($sql) > 0) {
    while($row = mysqli_fetch_assoc($sql)){
        $sql_msg = mysqli_query($conn, "SELECT * FROM chats WHERE (reciever_id = {$_SESSION['unique_id']} AND sender_id = {$row['unique_id']}) OR (sender_id = {$_SESSION['unique_id']} AND reciever_id = {$row['unique_id']}) ORDER BY msg_id DESC LIMIT 1");
        $row_msg = mysqli_fetch_assoc($sql_msg);
        if(mysqli_num_rows($sql_msg) <= 0){
            $result_msg = "No message available";
            $msg_sender = '';
        }
        elseif(!empty($row_msg['filename'])){
            $result_msg = $row_msg['filename'];
            $msg_sender = $row_msg['sender_id'];
        }
        else{
            $cipher = "AES-128-CTR";
            $option = 0;
            $vector_initialize = "789457456123";
            $decryption_key = "rchatmsg1985";
            $message = openssl_decrypt($row_msg['msg'], $cipher, $vector_initialize, $option, $decryption_key);
            $result_msg = $message;
            $msg_sender = $row_msg['sender_id'];
        }
        (strlen($result_msg > 19)) ? $msg = substr($result_msg, 0, 20) : $msg = $result_msg;
        ($_SESSION['unique_id'] == $msg_sender) ? $you = 'You: ' : $you = "";
        ($row['status'] == "Offline Now") ? $offline = "offline" : $offline = "";
        $arrr[] = $row;
        $output[]= '<a href="chat_area.php?user_id='.$row['unique_id'].'">
                    <div class="content">
                        <img src="'.'settings/'.$row['img'].'" alt="">
                        <div class="details">
                            <span>'.$row['fname']." ".$row['lname'].'</span>
                            <p>'.$you.$msg.'</p>
                        </div>
                    </div>
                    <div class="status-dot '.$offline.'"><i class="fa fa-circle"></i></div>
                    </a>
                    ';
    }
}
?>