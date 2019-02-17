<?php

$hostname_conn='localhost';
$username_conn='user1505';
$database_conn='1505_db';
$password_conn='ting10332019';

//$conn = mysqli_connect($hostname_conn,$username_conn,$password_conn,$database_conn) or die("Error!");
$conn = mysqli_connect($hostname_conn,$username_conn,$password_conn,$database_conn);
if(!$conn){die("Connection Failed: ".mysqli_connect_error());}
echo "Connected Successfully!";
mysqli_select_db($conn,$database_conn);
mysqli_query($conn,'set names utf8');

?>