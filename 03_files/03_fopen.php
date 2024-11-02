<?php

$filePointer = fopen("myfile.txt", "r"); // This will open a file
$content = fread($filePointer, 10); // Read 10 character of a file
fclose($filePointer); // Close The opened file
echo $content;

// Now, remember the readfile() function we used, is the same not happening with it.
// Except that it reads all the content not the single line which we can also do as follows
$filePointer = fopen("myfile.txt", "r");
$length = filesize("myfile.txt");
$content = fread($filePointer, $length);
fclose($filePointer);
echo "<br>" . $content;

// So that readfile() is also doing the same, then why we need this all.
// Well with this we can not only read a file, we can also write and append on a file.
// Like this, given below
/*
$filePointer = fopen("myfile.txt", "a"); // check here I open it with "a" which is append mode
fwrite($filePointer, " Everything is file bro.");
fclose($filePointer); // Close The opened file
*/
// The above line of code adds some connect in you myfile.txt file. Go and see it after running the above code.

// We'll learn more about these as we go on.
?>