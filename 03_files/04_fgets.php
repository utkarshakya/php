<?php
// OK, There are two functions namely fgets() and fgetc(). Let's see what they can do.

$filePointer = fopen("myfile.txt", "r");

// To read a single character at a time.
$ch = fgetc($filePointer);

// To read a single line at a time.
$line = fgets($filePointer);

echo $ch;
echo "<br>";
echo $line;

// This it, you can see in the output that first it reads the first character which is "H",
// Since "H" was already read then fgets() start reading from the next character and read the whole line.
?>