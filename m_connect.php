<?php
$servername = "localhost";
$username = "user1505";
$password = "ting10332019";
$db_name = "1505_db";

$conn = mysqli_connect($servername,$username,$password,$db_name);
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());}
else{
    echo "Connected!";}

?>