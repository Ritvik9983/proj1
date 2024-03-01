<?php 
error_reporting(E_ALL ^ E_WARNING);
$MAC = exec('getmac');
$MAC = strtok($MAC, ' ');
echo "Mac address == ".$MAC."<br>";
$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
echo "Your IP Address is " . $ipaddress."<br>";

//$command = escapeshellcmd('C:\xampp\htdocs\dashboard\coding\voice_assistant\voiceassis.py');//using python in php 
//$output = shell_exec($command);
//echo $output;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="getLocation()" >location</button>
    <p id="demo"></p>
<script>
const x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude + "<br>" + new Date().getHours() + ":" + new Date().getMinutes();
}
</script>
</body>
</html>
