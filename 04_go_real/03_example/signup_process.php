<?php
require "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    // Here we create password hash for security purpose.
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
}
$selectSQL = "SELECT * FROM `USERS`.`USER-DATA` WHERE `USERNAME` = '$username'";
$result = mysqli_query($conn, $selectSQL);
$numberOfRows = mysqli_num_rows($result);
if ($numberOfRows == 1) {
    header("location: signup.php?isUsernameExists=true");
} else {
    $insertSQL = "INSERT INTO `USERS`.`USER-DATA` (`FULL NAME`, `USERNAME`, `PASSWORD`) VALUES ('$fullName', '$username', '$passwordHash')";
    $result = mysqli_query($conn, $insertSQL);
    session_start();
    $_SESSION["fullName"] = $fullName;
    header("location: welcome.php");
}