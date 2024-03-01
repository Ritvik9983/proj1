<?php
include "../admin/settings/00con.php";
error_reporting(0);

    $cipher = "AES-128-CTR";
    $option = 0;
    $vector_initialize = "12987587654252";
    $encryption_key = "ch54c32194847";

    $udetail = openssl_encrypt($_POST['udetail'], $cipher, $vector_initialize, $option, $encryption_key);
    $upass = openssl_encrypt($_POST['pass'], $cipher, $vector_initialize, $option, $encryption_key);

    $sq1 = mysqli_query($conn, "SELECT * FROM `usrdata` WHERE `usremail` = '$udetail'");
        if(mysqli_num_rows($sq1) > 0){
            $arr = mysqli_fetch_array($sq1);
            if($upass== $arr['usrpass']){
                session_start();
                $_SESSION["usr_id"] = $arr['usrid'];
                ?>
                <script>
                    window.location.href = "../";
                </script>
                <?php
            }
            else{
                ?>
                <script>
                    window.alert("Wrong password");
                    window.location.href = "../";
                </script>
                <?php
            }
        }
        else{
            $sq2 = mysqli_query($conn, "SELECT * FROM `usrdata` WHERE `usrphone` = '$udetail'");
            if(mysqli_num_rows($sq2) > 0){
                $arr = mysqli_fetch_array($sq2);
                if($upass== $arr['usrpass']){
                    session_start();
                    $_SESSION["usr_id"] = $arr['usrid'];
                    ?>
                        <script>
                            window.location.href = "../";
                        </script>
                    <?php
                }
                else{
                    ?>
                        <script>
                            window.alert("Wrong password");
                            window.location.href = "../";
                        </script>
                    <?php
                }
            }
            else{
                ?>
                    <script>
                        window.alert("No user found!");
                        window.location.href = "../";
                    </script>
                <?php
            }
        }
?>