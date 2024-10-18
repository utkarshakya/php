<!-- ALWAYS REMEMBER TO USE ; AT THE END OF EVERY STATEMENT IN PHP. -->
<?php
$name = "Daredevil";
$name2 = "Jessica";

echo "My name is $name"; // We can simply write variable in an string.
echo "<br>";

echo "My name is $name "."and $name2 knows who am I"; // This string concatenation (using a . operator).
echo "<br><br>";

// --- --- STRINGS METHODS --- ---

// --- strlen() ---
echo "Length of Daredevil = ".strlen($name);
echo "<br>";
echo "Length of Jessica = ".strlen($name2);
echo "<br><br>";
// This is how we use strlen(), it just tell the length.

// --- str_word_count() ---
echo "I am the Immortal Iron Fist";
echo "<br>";
echo str_word_count("I am the Immortal Iron Fist");
echo "<br><br>";
// See the output, it returns the no. of words in a string.

// --- strrev() ---
echo "Luke";
echo "<br>";
echo strrev("Luke");
echo "<br><br>";
// See in the output, it'll reverse the string.

$string = "Iron Fist Is Immortal";

// --- strpos() ---
echo strpos($string, "Fist");
echo "<br>";
echo strpos($string, "I");
echo "<br>";
echo strpos($string, "r");
echo "<br><br>";
// See the output, it will return position.

// --- str_replace() ---
echo $string;
echo "<br>";
echo str_replace("Immortal", "Danny Rand", $string);
echo "<br><br>";
// See the output, it did what it's name says.

// --- str_repeat() ---
echo str_repeat("Stick ", 5);
echo "<br><br>";
// This will repeat the string for the specified no. of times.

// --- trim() ---
echo "<pre>";
$line = "    The devil of the Hell's Kitchen.   ";
echo $line;
echo "<br>";
echo trim($line);
echo "</pre>"
// See the output, we can also use rtrim for right side only and ltrim for left.
// Above I just use pre to show it on browser don't worry about that.

// NOW, THERE ARE A LOT METHODS HERE IN PHP. WE CON'T LEARN ALL OF THEM.
// AS WE GO THROUGH WE SEE MORE IF REQUIRED. YOU CAN CHECK ALL HERE: https://www.php.net/manual/en/ref.strings.php
?>