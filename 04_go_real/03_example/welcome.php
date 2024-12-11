<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome</title>
</head>
<body>
<h3>Welcome <?php
if (isset($_SESSION["fullName"])) {
    echo htmlspecialchars($_SESSION['fullName']);
}
?>, Nice To Have You.</h3>
<a href="logout.php"><button type="button">Logout</button></a>
</body>
</html>
