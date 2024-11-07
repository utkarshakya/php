<?php
$hostname = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($hostname, $username, $password);
if(!$conn){
    die("Something went wrong!");
}else{
    $databaseSQL = "CREATE DATABASE IF NOT EXISTS `USERS`";
    $tableSQL = "CREATE TABLE IF NOT EXISTS `USERS`.`USER-DATA` (`SNO` INT NOT NULL AUTO_INCREMENT, `FULL NAME` VARCHAR(30) NOT NULL, `USERNAME` VARCHAR(30) NOT NULL, `PASSWORD` VARCHAR(22) NOT NULL, PRIMARY KEY (`SNO`), UNIQUE (`USERNAME`))";
    mysqli_query($conn, $databaseSQL);
    mysqli_query($conn, $tableSQL);
}

?>