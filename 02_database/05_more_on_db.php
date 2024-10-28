<?php

$hostname = "localhost";
$username = "root";
$password = "";

try {
    $conn = mysqli_connect($hostname, $username, $password);
    echo "Connection Created Successfully";
} catch (mysqli_sql_exception $err) {
    echo "Sorry! " . mysqli_connect_error();
    die;
}

// In the previous file we had created a database with name `the defender` and table in it with name `heroes`
// Now here we learn more things like inserting and deleting data in the table which we have already created.

// If you forget, our table heroes has three fields and these properties:
// +-------+-------------+------+-----+---------+----------------+
// | Field | Type        | Null | Key | Default | Extra          |
// +-------+-------------+------+-----+---------+----------------+
// | SNO   | int(11)     | NO   | PRI | NULL    | auto_increment |
// | NAME  | varchar(30) | NO   |     | NULL    |                |
// | AGE   | int(11)     | NO   |     | NULL    |                |
// +-------+-------------+------+-----+---------+----------------+
// You can run describe table_name; or decs table_name; in the sql shell to get the above result.

// Now back to our program.

// --- INSERTING DATA IN A TABLE ---
$sqlInsert = "INSERT INTO `the defender`.`heroes` (NAME, AGE) VALUES ('Daredevil', 30)";
try {
    mysqli_query($conn, $sqlInsert);
    echo "<br>Data Inserted Successfully";
} catch (mysqli_sql_exception $err) {
    echo "<br>Sorry! " . mysqli_error($conn);
}

// --- DELETING DATA FROM A TABLE ---
$sqlDelete = "DELETE FROM `the defender`.`heroes` WHERE SNO = 1";
try {
    mysqli_query($conn, $sqlDelete);
    echo "<br>Data Deleted Successfully";
} catch (mysqli_sql_exception $err) {
    echo "<br>Sorry! " . mysqli_error($conn);
}

// Now Note One Thing Here, Since we use AUTO_INCREMENT which always get incremented
// So if we again insert a something it will become 2 and the delete condition did not work then.
// So keep that in mind, although we can reset the AUTO_INCREMENT like given below.
$sqlReset = "ALTER TABLE `THE DEFENDER`.`HEROES` AUTO_INCREMENT = 1";
try {
    mysqli_query($conn, $sqlReset);
    echo "<br>AUTO_INCREMENT Reset Successfully";
} catch (mysqli_sql_exception $err) {
    echo "<br>Sorry! " . mysqli_error($conn);
}

// NOTE: To Delete All Records From A Table We Use --> "DELETE FROM table_name"
// And "TRUNCATE TABLE table_name" (This one also resets the auto_increment)

// BELIEVE ME IF YOU DON'T KNOW THE BASICS OF SQL YOU'LL END UP WITH NOTHING FROM HERE.

mysqli_close($conn);
