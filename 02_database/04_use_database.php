<?php

$hostname = "localhost";
$username = "root";
$password = "";

try {
    $conn = mysqli_connect($hostname, $username, $password);
    echo "Connection Created Successfully";
} catch (mysqli_sql_exception $err) {
    echo "Sorry! ". mysqli_connect_error();
    die;
}

$sql = "CREATE DATABASE `The Defender`";
try {
    mysqli_query($conn, $sql);
    echo "<br>Database Created Successfully";
} catch (mysqli_sql_exception $err) {
    echo "<br>Sorry! ". mysqli_error($conn);
}

// NOW TO USE A DATABASE THERE ARE TWO BASE:
// 1. We can directly use it as a parameter in the mysqli_connect after defining it same as username and password.
// like this
// $database = "The Defender";
// and in the mysqli_connect($hostname, $username, $password, $database);
// this way it will automatically use the database while making connection.
// 2. By using a query that we are going to discuss below.

// REMEMBER IN WINDOWS NAMES OF DATABASE OR ANY OTHER ARE CASE-INSENSITIVE.
// THIS IS BECAUSE IN WINDOWS FILE SYSTEM IS CASE-INSENSITIVE.

$sql = "USE `The Defender`"; // query --> use database_name;
try {
    mysqli_query($conn, $sql);
    echo "<br>Used Database Successfully";
} catch (mysqli_sql_exception $err) {
    echo "<br>Sorry! ". mysqli_error($conn);
}

// NOW THAT WE USED THE DATABASE WE CAN NOW CREATE A TABLE IN IT.
try {
    mysqli_query($conn, "CREATE TABLE `HEROES` (`SNO` INT PRIMARY KEY AUTO_INCREMENT, `NAME` VARCHAR(30) NOT NULL, `AGE` INT NOT NULL)");
    echo "<br>Table Created Successfully";
} catch (mysqli_sql_exception $err) {
    echo "<br>Sorry! ". mysqli_error($conn);
}

// AND AGAIN IN THE SIMILAR WAY WE DELETE DATABASE WE CAN DELETE TABLE.
/*
try {
    mysqli_query($conn, "DROP TABLE `HEROES`");
    echo "<br>Table Deleted Successfully";
} catch (mysqli_sql_exception $err) {
    echo "<br>Sorry! ". mysqli_error($conn);
}
*/

mysqli_close($conn);

// NOTE: WE CAN DIRECTLY DO THINGS WITHOUT USING A DATABASE LIKE `database_name`.`table_name`, I'LL SO YOU IN THE NEXT FILE.
// TIP: IF YOU KNOW HOW TO USE phpMyAdmin YOU CAN DIRECTLY COPY SQL QUERIES FROM IT'S CONSOLE AND USE THEM.

// I'M ASSUMING THAT YOU HAVE COMPLETED YOUR SQL BASICS, IF NOT THEN DON'T PROCEED.
?>
