<?php
// WAYS TO CONNECT TO MYSQL DATABASE:
// 1. mysqli (It can be use in procedural as well as object oriented way)
// 2. PDO (This works with many databases, but mysqli only works with mysql database)

// Since we use mysql database we use the 1st way.

// BEFORE WE START, CHECK THAT YOU MYSQL IN XAMPP IS RUNNING.

// Now, To connect to our database we need three things:
$hostname = "localhost";
$username = "root";
$password = "";
// These are the default values when we are using XAMPP locally, on a real server they get changed.

// Now we can connect to our database as
try {
    $conn = mysqli_connect($hostname, $username, $password);
    // mysql_connect is used to make a connection.
    
    echo "Connection Successful";
} catch (mysqli_sql_exception $err) {
    echo "Access Denied";
}
// Note: here we are using the try catch block to exceptions.

// And Bingo, If you see the Connection Successful then you are connected to the database.