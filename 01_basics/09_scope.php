<?php

// Scope in PHP
// |
// +-- Global Scope
// |       |
// |       +-- Variables declared outside any function or class
// |       +-- Accessible using the `global` keyword inside functions
// |
// +-- Local Scope
// |       |
// |       +-- Variables declared inside a function
// |       +-- Accessible only within that function
// |
// +-- Static Scope
// |       |
// |       +-- Variables declared as `static` within a function
// |       +-- Retain their value between function calls
// |
// +-- Function Parameters
// |       |
// |       +-- Variables passed to functions as arguments
// |       +-- Have local scope within the function
// |
// +-- Super Global Variables
//         |
//         +-- Built-in variables always accessible
//         +-- Examples: $_GET, $_POST, $_SESSION

// Basically Scope Works Same As In Other Languages Like JavaScript.
// Some Things Are May Be New For You Like Super Global Variables, We'll Learn About Them.

echo var_dump($GLOBALS);
// This Will Show You Some Pre-Defined Super Global Variables.
?>