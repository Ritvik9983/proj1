<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: index.php");
    }
    include "settings/Database_Connection_rchat.php";
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
        <section class="chat-area" >
            <header>
            <?php
                $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$user_id}'");
                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
            <a href="userpage.php" class="back-icon"><i class="fa fa-arrow-left"></i></a>
            <img src="<?php echo "settings/".$row['img'];?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname']." ".$row['lname'];?></span>
                        <p><?php echo $row['status'];?></p>
                    </div>
            </header>
            <div class="chat-box">
            </div>
            <form action="#" class="typing-area">
                <input type="text" name="sender_id" value="<?php echo $_SESSION['unique_id'];?>" hidden>
                <input type="text" name="reciever_id" value="<?php echo $user_id;?>" hidden>
                <input type="text" id="out-msg" name="message" placeholder="type a message here...">
                <input style="display: none;" type="file" name="doc" id="document">
                <button onclick="send_message()">
                    <i>
                        <svg viewBox="0 0 24 24" width="24" height="24" class="">
                            <path fill="currentColor" d="M1.101 21.757 23.8 12.028 1.101 2.3l.011 7.912 13.623 1.816-13.623 1.817-.011 7.912z"></path>
                        </svg>
                    </i>
                </button>
            </form>
        </section>
    </div>
    <button id="doc_upload_butt" onclick="filebutt()">
        <i>
            <svg viewBox="0 0 24 24" width="24" height="24" class="">
                <path fill="currentColor" d="M1.816 15.556v.002c0 1.502.584 2.912 1.646 3.972s2.472 1.647 3.974 1.647a5.58 5.58 0 0 0 3.972-1.645l9.547-9.548c.769-.768 1.147-1.767 1.058-2.817-.079-.968-.548-1.927-1.319-2.698-1.594-1.592-4.068-1.711-5.517-.262l-7.916 7.915c-.881.881-.792 2.25.214 3.261.959.958 2.423 1.053 3.263.215l5.511-5.512c.28-.28.267-.722.053-.936l-.244-.244c-.191-.191-.567-.349-.957.04l-5.506 5.506c-.18.18-.635.127-.976-.214-.098-.097-.576-.613-.213-.973l7.915-7.917c.818-.817 2.267-.699 3.23.262.5.501.802 1.1.849 1.685.051.573-.156 1.111-.589 1.543l-9.547 9.549a3.97 3.97 0 0 1-2.829 1.171 3.975 3.975 0 0 1-2.83-1.173 3.973 3.973 0 0 1-1.172-2.828c0-1.071.415-2.076 1.172-2.83l7.209-7.211c.157-.157.264-.579.028-.814L11.5 4.36a.572.572 0 0 0-.834.018l-7.205 7.207a5.577 5.577 0 0 0-1.645 3.971z"></path>
            </svg>
        </i>
    </button>
    <script src="js/chat_area.js"></script>
</body>
</html>