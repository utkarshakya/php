<?php
// Now Again In The Same Way First We Connect To Our Database
$hostname = "localhost";
$username = "root";
$password = "";

try {
    $conn = mysqli_connect($hostname, $username, $password);
    echo "Connection Successful";
} catch (mysqli_sql_exception $err) {
    echo "Sorry! ". mysqli_connect_error();
    die; // This will end the program if there is any error.
}

// Now We Can Create A Database.
// First we write the sql query.
$sql = "CREATE DATABASE DEFENDERS";
// And then we execute it.
try {
    $result = mysqli_query($conn, $sql);
    // The query function return true or false.
    echo "<br>Database Created Successfully";
} catch (mysqli_sql_exception $err) {
    echo "<br>Sorry! ". mysqli_error($conn);
}

// That's it we have created our database from php, Smile (:
?>