<!-- A Session Is A Way To Store Data (Such As User Information) On The Server For A Specific User Across Multiple Pages. It Allows You To Maintain State Between Different Requests By Assigning A Unique Session Id To Each User. -->
<?php
session_start(); // always put this at the start of the file
// If You Run This File A Cookie With Name PHPSESSID Is Created, You Can See That In Your Browser's Inspect --> Application --> Cookies
// This Cookie Stores Your Session Id Which Is Automatically Generated By The PHP When We Start A Session.
// Once The Session Started, We Can Now Store Data On The Server.
$_SESSION["username"] = "Kingpin";
echo "Session Started & Data Stored";
echo "<br>";
// Note: This Data Is Not On Your Browser As In Case Of Cookies, It Is On The Server And Easily Accessible On Every Page Of Your Website.
// To Access Any Data From The Session Just Type The session_start() On Top Of The Page And Fetch Data From Super Global $_SESSION.
// Now Go And See The Output Of _welcome.php File.

// --- Ending Session ---
/*
// To End A Session We First Unset The Variable.
session_unset(); // this will unset all session variables
// After This We Destroy The Session.
session_destroy(); // removes the session data on the server
echo "Session Ended";
*/
// Try Uncommenting The Above Code And See The Output Of _welcome.php File Again, But First Run This File To Apply Changes.

// Sessions Are Typically Used For Tasks Like User Authentication, Storing Preferences, And Tracking User Activity On A Website.
// Learn More:
// Session: https://www.php.net/manual/en/book.session.php
// Cookies: https://www.php.net/manual/en/features.cookies.php
?>