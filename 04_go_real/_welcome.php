<?php
// Here we use the session data
session_start();
if(isset($_SESSION["username"])){
    echo "Hola ".$_SESSION["username"];
}else{
    echo "You Need To Login First";
}
?>