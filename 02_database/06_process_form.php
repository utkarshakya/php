<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullName = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    // Actually When Form Submitted Weather Through POST or GET, It Sends An Associative Array To The action File.
    // And above we take the values out from that array which is $_POST here.

    // Now, Play With Database :)
    $table = "CREATE TABLE IF NOT EXISTS `THE DEFENDER`.`HUMANS` (`SNO` INT AUTO_INCREMENT PRIMARY KEY, `NAME` VARCHAR(50) NOT NULL, `EMAIL` VARCHAR(30) NOT NULL, `PASSWORD` VARCHAR(16) NOT NULL)";
    $insert = "INSERT INTO `THE DEFENDER`.`HUMANS` (NAME, EMAIL, PASSWORD) VALUES ('$fullName', '$email', '$password')";

    try {
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_query($conn, $table);
        mysqli_query($conn, $insert);
        echo "Registration Successful! We'll Have A Nice Journey Ahead.";
    } catch (mysqli_sql_exception $err) {
        echo "Sorry!" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
