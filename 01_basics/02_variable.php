<?php
// Variables in php are starts with $ sign.
// All other rules of defining a variable are same as in other high level languages.

$name = "Danny Rand";
echo $name;
// See the output in the browser after running the Apache Server (I hope you remember that, you always have to start apache first),
// And then go to localhost/file_relative_path (relative to htdocs which is localhost).

// There is no need to define the data type while declaring variables unlike C language.
// php is more like a Javascript where we just need to use let to define a variable, here its $. That't it.

// NOTE: Data Types in php are mostly same as in C language, but since php is little advance so it also have some more.
// Check it out here: https://www.php.net/manual/en/language.types.intro.php
// Although there is a lot in php but we grasp it slowly.

// One More thing, remember these functions:
// 1. var_dump() - used to get the value and type of a variable.
// 2. get_debug_type() - used to get the type of variable.
// 3. is_type() - used to check if the variable is certain type or not (type is replaced by the real type we want to check).

// Uncomment to see the below statement's output:
/*
echo "<br>";
echo get_debug_type($name);
echo "<br>";
echo var_dump($name);
echo "<br>";
echo is_string($name);
*/
?>