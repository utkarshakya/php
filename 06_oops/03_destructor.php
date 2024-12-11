<?php

// A destructor in PHP is a special method __destruct() that is automatically called when an object is destroyed or goes out of scope.
class Pokemon
{
    public $name;

    function __destruct()
    {
        echo "I am destructing at the end of the script automatically";
    }
}

$charmender = new Pokemon(); // Here we just created an object
// See the output in the browser

echo "Destructor can't come before me.<br>";

?>