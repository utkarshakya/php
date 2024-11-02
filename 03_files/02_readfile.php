<?php
// readfile() function is use to read a simple txt files.
// And It display the file content on the output buffer, and returns total no of character of the file.
// For Example:
$n = readfile("myfile.txt");
// Now See the output in your browser. Note we don't use the echo but it still display the content of a text file.
// And $n has the total no. of characters the readfile() function reads.
echo '<br>' . $n;

// Now although we can give any file to readfile() function, but it process every file as text file
// and read it and output it in the buffer as it is.
// For example:
readfile("connection.php");
// Now you can also see the connect of the connection.php file, see the view page source on your browser.

// Here is the documentation --> https://www.php.net/manual/en/function.readfile.php