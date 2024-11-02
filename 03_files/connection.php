<?php
$hostname = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($hostname, $username, $password);

if(!$conn){
    die("Sorry" . mysqli_connect_error());
}else{
    echo "Connection Successful";
}
