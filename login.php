<?php

include "db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users(email,password)
VALUES('$email','$password')";

if($conn->query($sql)){
echo "Signup successful";
}else{
echo "Error";
}

?>