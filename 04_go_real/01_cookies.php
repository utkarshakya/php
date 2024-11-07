<!--
Cookies in PHP are a great way to store small pieces of data on the client’s browser, which can then 
be accessed on different pages of a website or during subsequent visits.
Here’s the basic syntax to create a cookie: setcookie(name, value, expire, path, domain, secure, httponly);
-->
<?php
// First Run This File To Set A Cookie. The Cookie Will Get Expired After 60s.
// After That Go To _page.php File To See The Output
// Now, Wait For 60 Seconds Then Refresh The Page And See The Difference
setcookie("username", "pikachu", time() + 60, "/");
echo "Cookie Set";
// Have You Noticed The Cookie Get Expired After A Minute And You Will Get The Else Part Of The _page.php File
// This is how cookies work

// We Can Also Delete A Cookie Like Give Below
// setcookie("username", "", time() - 60, "/")
// Just Set The Time In The Past With Empty Value

// We Can Also Modify A Cookie, Just Change It's Value Or Time, Whatever You Want.
?>