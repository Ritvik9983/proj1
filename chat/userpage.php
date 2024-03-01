<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: index.php");
    }
    include "settings/Database_Connection_rchat.php";
    //include "settings/setting_userspage.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rchat</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/userpage.css">
</head>
<body>
    <div class="wrapper">
        <section class="users" >
            <header>
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <div class="content">
                    <img src="<?php echo "settings/".$row['img'];?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname']." ".$row['lname'];?></span>
                        <p><?php echo $row['status'];?></p>
                    </div>
                </div>
                <a href="settings/logout.php?logout_id=<?php echo $_SESSION['unique_id']; ?>" class="logout">Logout</a>
            </header>
            <div class="search">
                <span class="text">Select an user to start chat</span>
                <input onkeyup="showHint(this.value)" type="text" name="" id="searchbar" placeholder="Find people">
                <button onclick="start_stop_interval()"><i class="fa fa-search"></i></button>
            </div>
            <div class="users-list" id="user-lst">
                
            </div>
        </section>
    </div>
    <script src="js/userpage.js"></script>
</body>
</html>