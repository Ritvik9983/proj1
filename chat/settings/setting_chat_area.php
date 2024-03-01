<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);
if(isset($_SESSION['unique_id'])){
    include "Database_Connection_rchat.php";
    $MAC = exec('getmac');
    $MAC = strtok($MAC, ' ');
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    $sender_id = $_POST['sender_id'];
    $reciever_id = $_POST['reciever_id'];
    $doc_name = $_FILES['doc']['name'];
    $doc_saved_name = "doc/".time().$doc_name;
    $doc_type = $_FILES['doc']['type'];
    $doc_tmp_name = $_FILES['doc']['tmp_name'];
    $cipher = "AES-128-CTR";
    $option = 0;
    $vector_initialize = "789457456123";
    $encryption_key = "rchatmsg1985";
    $message = openssl_encrypt($_POST['message'], $cipher, $vector_initialize, $option, $encryption_key);
    $index = strpos($doc_name, '.') + strlen('.');
    $doc_ext_result = substr($doc_name, $index);
    $img_extentions = ['img', 'png', 'jpg', 'jpeg', 'gif', 'svg', 'apng', 'avif', 'webp', 'jfif', 'pjpeg', 'pjp'];
    $vid_extentions = ['mp4', 'mkv', 'mov', 'wmv', 'flv', 'avi', 'avchd', 'webm'];
    if(move_uploaded_file($doc_tmp_name, $doc_saved_name)){
        if(in_array($doc_ext_result, $img_extentions) === true){
            $doc_link = "<a download href='settings/".$doc_saved_name."'><img src='settings/".$doc_saved_name."'>".$doc_name."</a>";
            $link_encrypted = openssl_encrypt($doc_link, $cipher, $vector_initialize, $option, $encryption_key);
            $sql = mysqli_query($conn, "INSERT INTO chats(reciever_id, sender_id, msg, filename, sender_mac_addr, sender_ip_addr) 
                VALUES ('{$reciever_id}', '{$sender_id}', '{$link_encrypted}', '{$doc_name}', '{$MAC}', '{$ipaddress}')") or die();
        }
        elseif(in_array($doc_ext_result, $vid_extentions) === true){
            $doc_link = "<a download href='settings/".$doc_saved_name."'>".$doc_name."<i><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 576 512'><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d='M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z'/></svg></i></a>";
            $link_encrypted = openssl_encrypt($doc_link, $cipher, $vector_initialize, $option, $encryption_key);
            $sql = mysqli_query($conn, "INSERT INTO chats(reciever_id, sender_id, msg, filename, sender_mac_addr, sender_ip_addr) 
                VALUES ('{$reciever_id}', '{$sender_id}', '{$link_encrypted}', '{$doc_name}', '{$MAC}', '{$ipaddress}')") or die();
        }
        else{
            $doc_link = "<a download href='settings/".$doc_saved_name."'>".$doc_name."<i><svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512'><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d='M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm160-14.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z'/></svg></i>"."</a>";
            $link_encrypted = openssl_encrypt($doc_link, $cipher, $vector_initialize, $option, $encryption_key);
            $sql = mysqli_query($conn, "INSERT INTO chats(reciever_id, sender_id, msg, filename, sender_mac_addr, sender_ip_addr) 
                VALUES ('{$reciever_id}', '{$sender_id}', '{$link_encrypted}', '{$doc_name}', '{$MAC}', '{$ipaddress}')") or die();
        }
    }
    if(!empty($message)){
        $sql = mysqli_query($conn, "INSERT INTO chats(reciever_id, sender_id, msg, sender_mac_addr, sender_ip_addr) 
                            VALUES ('{$reciever_id}', '{$sender_id}', '{$message}', '{$MAC}', '{$ipaddress}')") or die();
    }
}
else{
    header('location:../index.php');
}
?>