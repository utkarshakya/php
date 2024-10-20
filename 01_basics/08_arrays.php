<?php

// Types of Arrays in PHP
//     |
//     +-- Indexed Arrays
//     |       |
//     |       +-- Numeric indices
//     |       +-- Example: $fruits = array("Apple", "Banana");
//     |
//     +-- Associative Arrays
//     |       |
//     |       +-- Named keys
//     |       +-- Example: $age = array("Peter" => 35, "Ben" => 37);
//     |
//     +-- Multidimensional Arrays
//             |
//             +-- Arrays containing one or more arrays
//             +-- Example: $cars = array(
//                              array("Volvo", 22, 18),
//                              array("BMW", 15, 13)
//                          );

// Any Type Of Array Can Be Created Using A array() keyword.

// 1. Indexed Arrays:
$fruits = array("Apple", "Banana");

// Accessing Value
echo $fruits[0]; // Output: Apple
echo "<br>";

// Accessing Using Loop
foreach ($fruits as $value) {
    echo $value . " ";
}
echo "<br><br>";

// 2. Associative Arrays:
$age = array("Peter" => 35, "Ben" => 37);

// Accessing Value
echo $age['Ben']; // Output: 37
echo "<br>";

// Accessing Using Loop
foreach ($age as $key => $value) {
    echo "$key age is $value <br>";
}
echo "<br><br>";

// 3. Multidimensional Array:
$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13)
);
// Can be accessed in the same way.


// Array Functions Or Methods in PHP
//     |
//     +-- Array Creation Functions
//     |       |
//     |       +-- array()
//     |       +-- range()
//     |
//     +-- Array Sorting Functions
//     |       |
//     |       +-- sort()
//     |       +-- rsort()
//     |       +-- asort()
//     |       +-- ksort()
//     |       +-- usort()
//     |
//     +-- Array Information Functions
//     |       |
//     |       +-- count()
//     |       +-- sizeof()
//     |       +-- in_array()
//     |       +-- array_key_exists()
//     |
//     +-- Array Addition/Removal Functions
//     |       |
//     |       +-- array_push()
//     |       +-- array_pop()
//     |       +-- array_shift()
//     |       +-- array_unshift()
//     |
//     +-- Array Traversing Functions
//     |       |
//     |       +-- foreach
//     |       +-- array_walk()
//     |       +-- array_map()
//     |
//     +-- Array Merging/Splitting Functions
//     |       |
//     |       +-- array_merge()
//     |       +-- array_combine()
//     |       +-- array_slice()
//     |       +-- array_splice()
//     |
//     +-- Array Filtering Functions
//             |
//             +-- array_filter()
//             +-- array_unique()

// There Are So Many But These Are Most Useful Once.
// We'll Learn Some Of Them When We Work With Array.