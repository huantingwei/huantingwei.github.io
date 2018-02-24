<?php

$hostname_conn='localhost';
$username_conn='jamie';
$database_conn='io';
$password_conn='ting10332019';

$conn = mysqli_connect($hostname_conn,$username_conn,$password_conn,$database_conn) or die("Error!");
mysqli_select_db($database_conn,$conn);
mysqli_query('set names utf8');

?>