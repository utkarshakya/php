<?php

try {
    $conn = mysqli_connect("localhost", "root", "");
} catch (mysqli_sql_exception $err) {
    echo "Sorry! " . mysqli_error($conn);
    exit();
}

$sql = "UPDATE `THE DEFENDER`.`HEROES` SET NAME = 'JESSICA JONES' WHERE SNO = 1";

try{
    $result = mysqli_query($conn, $sql);
    echo "Record Updated Successfully";
}catch(mysqli_sql_exception $e){
    echo "Sorry! " . mysqli_error($conn);
    exit();
}

// Thats It, This is how we update. Simple it's just you have to know the sql.

// Note, The $result variable here got something else
echo "<br>$result";
// You can see in the browser it return 1 if update got success.

// So Note One Thing Here That It Is Depend On The Query Which We Are Executing That What Is Returned To The $result Variable.
// In Case Of Select Query It Returns An Object Or An Associative Array, So Remember It Changes From Query To Query.

mysqli_close($conn);