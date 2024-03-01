<?php 
$conn = mysqli_connect("localhost", "root", "", "rchat");
if(!$conn){
    echo "Not connected to data base".mysqli_connect_error();
}
?>