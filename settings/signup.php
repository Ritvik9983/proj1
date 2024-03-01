<?php
include "../admin/settings/00con.php";
error_reporting(0);

if(empty($_FILES['uphoto']['name'])){
?>
<script>
    window.alert("Please select an image for profile.");
    window.location.href = "../";
</script>
<?php
}else{
    $cipher = "AES-128-CTR";
    $option = 0;
    $vector_initialize = "12987587654252";
    $encryption_key = "ch54c32194847";

    $usrname = openssl_encrypt($_POST['uname'], $cipher, $vector_initialize, $option, $encryption_key);
    $usremail = openssl_encrypt($_POST['uemail'], $cipher, $vector_initialize, $option, $encryption_key);
    $usrphone = openssl_encrypt($_POST['uphone'], $cipher, $vector_initialize, $option, $encryption_key);
    $usrpass = openssl_encrypt($_POST['pass'], $cipher, $vector_initialize, $option, $encryption_key);
    $usrbranch = openssl_encrypt($_POST['branch'], $cipher, $vector_initialize, $option, $encryption_key);
    $usryear = openssl_encrypt($_POST['year'], $cipher, $vector_initialize, $option, $encryption_key);
    $img_name = explode(".", $_FILES['uphoto']['name']);
    $img_ext = $img_name[1];
    $joined = openssl_encrypt(time(), $cipher, $vector_initialize, $option, $encryption_key);
    $usrid = openssl_encrypt($_POST['uname'].uniqid().time().$usrphone, $cipher, $vector_initialize, $option, $encryption_key);
    $fname = uniqid().time().uniqid();
    $file_save = openssl_encrypt("database_files/userprofile/".$fname.".".$img_ext, $cipher, $vector_initialize, $option, $encryption_key);
    if(move_uploaded_file($_FILES['uphoto']['tmp_name'], "../admin/database_files/userprofile/".$fname.".".$img_ext)){
        $sq1 = mysqli_query($conn, "SELECT `usremail` FROM `usrdata` WHERE `usremail` = '$usremail'");
        if(mysqli_num_rows($sq1) > 0){
            ?>
            <script>
                window.alert("This email has already been taken !");
                window.location.href = "../";
            </script>
            <?php
            }else{
                $sq2 = mysqli_query($conn, "SELECT `usrphone` FROM `usrdata` WHERE `usrphone` = '$usrphone'");
                if(mysqli_num_rows($sq2) > 0){
                    ?>
                    <script>
                        window.alert("This contact number has already been taken !");
                        window.location.href = "../";
                    </script>
                    <?php
                    }else{
                        $sql = mysqli_query($conn, "INSERT INTO `usrdata`(`usrid`, `usrname`, `usrphone`, `usremail`, `usrpass`, `usrbranch`, `usryear`, `usrphoto`, `joined`) VALUES ('$usrid', '$usrname', '$usrphone', '$usremail', '$usrpass', '$usrbranch', '$usryear', '$file_save', '$joined')");
                        if($sql){
                            session_start();
                            $_SESSION["usr_id"] = $usrid;
                        ?>
                        <script>
                            window.location.href = "../";
                        </script>
                        <?php
                        }else{
                            ?>
                            <script>
                                window.alert("somthing went wrong please try again");
                                window.location.href = "../signup.php";
                            </script>
                            <?php
                        }
                    }
            }
    }
}
?>