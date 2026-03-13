<?php

$host = "sql111.infinityfree.com";
$user = "if0_41383330";
$password = "YOUR_MYSQL_PASSWORD";
$database = "if0_41383330_snapdb";

$conn = new mysqli($host,$user,$password,$database);

if($conn->connect_error){
die("Database Connection Failed");
}

?>