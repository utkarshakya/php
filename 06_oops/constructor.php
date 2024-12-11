<?php

// A constructor in PHP is a special method __construct() that is automatically invoked when an object of a class is created.
class Pokemon{
    public $name;

    function __construct()
    {
        echo "Pika Pika, Pikachu! I am best Pokemon. I am in contruct function, that's why I am executed automatically";
    }
}

$charmender = new Pokemon(); // Here we just created an object
// See the output in the browser

?>