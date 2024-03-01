<?php
include "Database_Connection_rchat.php";
include "setting_userspage.php";
$sqlii = mysqli_query($conn, "SELECT * FROM users");
$searchname = [];
while($row = mysqli_fetch_assoc($sqlii)){
    $searchname[] = $row['fname']." ".$row['lname'];
}
$q = $_REQUEST["q"];
$hint = "";
$output2 =[];
$sqlii2 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");
                if (mysqli_num_rows($sqlii2) > 0) {
                    $rowii = mysqli_fetch_assoc($sqlii2);
                }
           
                $sqlforuniout = mysqli_query($conn, "SELECT * FROM users");
                while($rowforuniout = mysqli_fetch_assoc($sqlforuniout)){
                  $sql_msg2 = mysqli_query($conn, "SELECT * FROM chats WHERE (reciever_id = {$_SESSION['unique_id']} AND sender_id = {$rowforuniout['unique_id']}) OR (sender_id = {$_SESSION['unique_id']} AND reciever_id = {$rowforuniout['unique_id']}) ORDER BY msg_id DESC LIMIT 1");
                  $row_msg2 = mysqli_fetch_assoc($sql_msg2);
                  if(mysqli_num_rows($sql_msg2) <= 0){
                    $result_msg2 = "";
                    $msg_sender2 = "";
                  }
                  elseif(!empty($row_msg2['filename'])){
                    $result_msg2 = $row_msg2['filename'];
                    $msg_sender2 = $row_msg2['sender_id'];
                  }
                  else{
                    $cipher2 = "AES-128-CTR";
                    $option2 = 0;
                    $vector_initialize2 = "789457456123";
                    $decryption_key2 = "rchatmsg1985";
                    $message2 = openssl_decrypt($row_msg2['msg'], $cipher2, $vector_initialize2, $option2, $decryption_key2);
                    $result_msg2 = $message2;
                    $msg_sender2 = $row_msg2['sender_id'];
                  }
                  (strlen($result_msg2 > 19)) ? $msg2 = substr($result_msg2, 0, 20) : $msg2 = $result_msg2;
                  ($msg2=="") ? $msg2 = "No message available" : $msg2 = $result_msg2;
                  ($_SESSION['unique_id'] == $msg_sender2) ? $you2 = 'You: ' : $you2 = "";
                  ($rowforuniout['status'] == "Offline Now") ? $statusdot = " offline" : $statusdot = "";
                  $output2[]= ["unique_id"=>$rowforuniout['unique_id'], "code"=>'<a href="chat_area.php?user_id='.$rowforuniout['unique_id'].'">
                  <div class="content">
                      <img src="'.'settings/'.$rowforuniout['img'].'" alt="">
                      <div class="details">
                          <span>'.$rowforuniout['fname']." ".$rowforuniout['lname'].'</span>
                          <p>'.$you2.$msg2.'</p>
                      </div>
                  </div>
                  <div class="status-dot'.$statusdot.'"><i class="fa fa-circle"></i></div>
                  </a>
                  '];
              }
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($searchname as $name) {
      if (stristr($q, substr($name, 0, $len))) {
        if($name !== $rowii){
          if ($hint === "") {
            if($output2[array_search($name, $searchname)]['unique_id']!==$rowii['unique_id']){
              $hint .= $output2[array_search($name, $searchname)]['code'];
            }
          } else {
              if($output2[array_search($name, $searchname)]['unique_id']!==$rowii['unique_id']){
                $hint .= $output2[array_search($name, $searchname)]['code'];
               }
          }
        }
      }
    }
}
  echo $hint === "" ? "no suggestions" : $hint;
?>