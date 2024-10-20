<?php

// Function is simple as in other languages.
// Defined using function keyword in PHP.
function getTable($number){
    for ($i=1; $i < 11; $i++) { 
        echo "$number * $i = ",($number*$i);
        echo "<br>";
    }
}
getTable(19); // Calling a function.

// Functions in PHP are advance, as I said PHP is keep evolving it has so much.
// It also support Arrow function and more.

// Check More Details Here: https://www.php.net/manual/en/functions.user-defined.php

// Types of Functions in PHP
//     |
//     +-- Built-in Functions
//     |       |
//     |       +-- String Functions (You have see some in the 03_string.php file, Method are Functions don't get confused with it.)
//     |       +-- Array Functions
//     |       +-- Date and Time Functions
//     |       +-- Mathematical Functions
//     |       +-- File System Functions
//     |
//     +-- User-Defined Functions
//     |       |
//     |       +-- Simple Functions
//     |       +-- Parameterized Functions
//     |       +-- Recursive Functions
//     |
//     +-- Anonymous Functions
//     |
//     +-- Arrow Functions