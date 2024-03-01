<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);
if(isset($_SESSION['unique_id'])){
    include "Database_Connection_rchat.php";
    $sender_id = $_SESSION['unique_id'];
    $reciever_id = mysqli_real_escape_string($conn, $_POST['reciever_id']);
    $cipher2 = "AES-128-CTR";
    $option2 = 0;
    $vector_initialize2 = "789457456123";
    $decryption_key2 = "rchatmsg1985";
    $output = "";
        $sql = "SELECT * FROM chats WHERE (reciever_id = {$reciever_id} AND sender_id = {$sender_id})
                OR (reciever_id = {$sender_id} AND sender_id = {$reciever_id}) ORDER BY msg_id";
        $query = mysqli_query($conn, $sql);
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$reciever_id}'");
                    $row = mysqli_fetch_assoc($sql);
        if(mysqli_num_rows($query) > 0){
            while ($row2 = mysqli_fetch_assoc($query)) {
                if($row2['sender_id']===$sender_id){
                    $output .= '<div class="chat outgoing">
                                    <div class="details">
                                        <p>'.openssl_decrypt($row2['msg'], $cipher2, $vector_initialize2, $option2, $decryption_key2).'</p>
                                    </div>
                                </div>';
                }
                else{
                    $output .='<div class="chat incoming">
                                    <img src="settings/'.$row['img'].'" alt="">
                                    <div class="details">
                                        <p>'.openssl_decrypt($row2['msg'], $cipher2, $vector_initialize2, $option2, $decryption_key2).'</p>
                                    </div>
                                </div>';
                }
            }
            echo $output;
        }
}
else{
    header('location:../index.php');
}
?>