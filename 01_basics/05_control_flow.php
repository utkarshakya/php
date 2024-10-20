<?php
//      Control Flow Statements
//      |
//      +-- Conditional Statements
//      |       |
//      |       +-- if
//      |       +-- if-else
//      |       +-- elseif
//      |       +-- switch
//      |
//      +-- Looping Statements
//      |       |
//      |       +-- while
//      |       +-- do-while
//      |       +-- for
//      |       +-- foreach
//      |
//      +-- Jump Statements
//              |
//              +-- break
//              +-- continue
//              +-- return

// These Are The Broad Types Of Control Flow Statements In Php.
// Work And Used Same As We Do In C Or Other Languages.
// If You Are Familiar With These Move To The Next File.

// BELOW, UNCOMMENT THE SPECIFIC SECTION TO SEE THE OUTPUT.

// --- 1. CONDITIONAL STATEMENTS ---
/*
// Using if-else
$age = 25;
if ($age < 18) {
    echo "You are a minor.";
} elseif ($age >= 18 && $age <= 60) {
    echo "You are an adult.";
} else {
    echo "You are a senior.";
}
echo "<br>";

// Using switch
$role = "admin";
switch ($role) {
    case "admin":
        echo "You have all the privileges.";
        break;
    case "editor":
        echo "You can edit content.";
        break;
    case "subscriber":
        echo "You can read content.";
        break;
    default:
        echo "Invalid role.";
}
*/


// --- 2. LOOPING STATEMENTS ---
/*
// Using for loop
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i<br>";
}
echo "<br>";

// Using while loop*
$counter = 1;
while ($counter <= 5) {
    echo "Counter: $counter<br>";
    $counter++;
}
echo "<br>";

// Using foreach loop
$fruits = array("Apple", "Banana", "Cherry");
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit<br>";
}
*/


// --- 3. JUMP STATEMENTS ---
/*
// Using break
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // Exit the loop when $i is 5
    }
    echo "Number: $i<br>";
}
echo "<br>";

// Using continue
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // Skip the rest of the loop when $i is 5
    }
    echo "Number: $i<br>";
}
echo "<br>";

// Using return in a function
function checkEven($number)
{
    if ($number % 2 == 0) {
        return "Even";
    }
    return "Odd";
}
echo checkEven(10); // Output: Even
*/