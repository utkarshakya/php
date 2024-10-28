<?php
// UNCOMMENT THE MULTILINE COMMENT TO SEE THE OUTPUT OF IT.
// Now, Let's See How We Can We Take Data From Database.
try {
    $conn = mysqli_connect("localhost", "root", "");
} catch (mysqli_sql_exception $err) {
    echo "Sorry! " . mysqli_error($conn);
    exit(); // This prevent the script to run further if error occurred.
}

$sql = "SELECT * FROM `THE DEFENDER`.`HEROES`";

// Before running the above query we need to add some data in the heroes table, because in the previous file we delete it just after adding.
// mysqli_query($conn, "INSERT INTO `THE DEFENDER`.`HEROES` (NAME, AGE) VALUES ('DAREDEVIL', 32), ('IRON FIST', 29), ('LUKE CAGE', 35)");
// Fair enough the above query will insert the new records int the table. Uncomment it to use and then comment it again to avoid inserting repeatedly.

// Now we are going to use that Select query stored in $sql.
try {
    $result = mysqli_query($conn, $sql);
} catch (mysqli_sql_exception $e) {
    echo "Sorry! " . mysqli_error($conn);
    exit();
}
/*
echo "<br>This Is In The Result";
echo "<pre>";
echo var_dump($result);
echo "</pre>";

// Note the above echo will display you an associative array which has some fields
// like num_row, current_field, field_count, etc.
// Now even it is an array you can not directly use it, there are methods to get these values.

$row = mysqli_num_rows($result); // this give total no. of rows
$fields = mysqli_num_fields($result); // this give total no. of columns
$first_row = mysqli_fetch_row($result); // this will fetch rows from start and give in an array

echo "<br>Here Are No. Of Rows And Fields";
echo "<pre>";
echo var_dump($row);
echo var_dump($fields);
echo "</pre>";

echo "<br>This Is The First Row";
echo "<pre>";
echo var_dump($first_row);
echo "</pre>";

$next_row = mysqli_fetch_row($result); // now if run this fetch again it will fetch the next row

echo "<br>This Is The Next Row";
echo "<pre>";
echo var_dump($next_row);
echo "</pre>";
*/
// Now see on the browser, and you will get to know what is going in the result.

// Now We Can Use Those Methods To Display The Result In A Better Manner
$data = mysqli_fetch_all($result); // this returns an associative array
echo "<pre>SNO\tNAME\t\tAGE<br></pre>";
foreach ($data as $key => $value) { // here value have the array
    echo "<pre>$value[0]\t$value[1]\t$value[2]<br></pre>";
}
// That looks good in the browser, so this is how we fetch data from database. There is lot more in it but for now it is enough.
// Check this documentation to cater your hunger(if you have one) --> https://www.php.net/manual/en/ref.mysql.php

mysqli_close($conn);