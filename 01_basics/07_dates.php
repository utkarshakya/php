<?php
// Dates in PHP are very complicated but I'll make it simple.

// Setting timezone (By default it may be different)
date_default_timezone_set("Asia/Kolkata");

// Current date and time
echo date("Y-m-d, h:i:s A");
echo "<br>";

// Current Unix timestamp
echo time(); // This return time in microseconds
echo "<br>";

// Formatting current date
echo date("l, F j, Y");
echo "<br>";

// To Know The Meaning Of These l, F, j And All Other Formats Just See The Format Table
// From Here: https://www.php.net/manual/en/datetime.format.php

// There is so much like Date Time Comparison and Date Time Manipulation And More, If You
// Go To Read The Documentation You'll Freaks Out, So Don't Do That And Proceed To Next File.

// Using DateTime class for formatting
$date = new DateTime();
echo $date->format('Y-m-d H:i:s');
// Yes, there is also OOPS here in PHP. Above we use DateTime() object to create a new instance as $date.
// And we format it to specific type to display. If you don't get this right now, don't worry.
// We'll see it later when we learn Object Oriented Programming in PHP.