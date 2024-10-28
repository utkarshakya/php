<?php
// Now Again In The Same Way First We Connect To Our Database
$hostname = "localhost";
$username = "root";
$password = "";

try {
    $conn = mysqli_connect($hostname, $username, $password);
    echo "Connection Created Successfully";
} catch (mysqli_sql_exception $err) {
    echo "Sorry! " . mysqli_connect_error();
    die; // This will end the program if there is any error.
}

// --- NOW WE CAN CREATE A DATABASE ---
// First we write the sql query.
$sql = "CREATE DATABASE `The Defender`"; // Note using `` is good practice when you write any name instead of query.
// And then we execute it.
try {
    mysqli_query($conn, $sql);
    // The query function return true or false.
    echo "<br>Database Created Successfully";
} catch (mysqli_sql_exception $err) {
    echo "<br>Sorry! " . mysqli_error($conn);
}
// That's it we have created our database from php, Smile (:

// --- NOW WE CAN ALSO DELETE A DATABASE ---
/*
$sqlQueryToDeleteDB = "DROP DATABASE `The Defender`";
try {
    mysqli_query($conn, $sqlQueryToDeleteDB);
    echo "<br>Database Deleted Successfully";
} catch (mysqli_sql_exception $err) {
    echo "<br>Sorry! ". mysqli_error($conn);
}
*/

mysqli_close($conn);
