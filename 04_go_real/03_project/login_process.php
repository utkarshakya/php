<?php
require "_connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
}
$selectUsernameSQL = "SELECT * FROM `USERS`.`USER-DATA` WHERE `USERNAME` = '$username'";
$result = mysqli_query($conn, $selectUsernameSQL);
$numberOfRows = mysqli_num_rows($result);
if ($numberOfRows == 1) {
    $data = mysqli_fetch_assoc($result);
    if ($data["USERNAME"] == $username && $data["PASSWORD"] == $password) {
        session_start();
        $data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT `FULL NAME` FROM `USERS`.`USER-DATA` WHERE `USERNAME` = '$username'"));
        $_SESSION["fullName"] = $data["FULL NAME"];
        header("location: welcome.php");
    } else {
        header("location: login.php?message=username or password not matched");
    }
} else {
    header("location: login.php?message=username or password not matched");
}
