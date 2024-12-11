<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Log In To Continue</h1>
    <form action="login_process.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Log in</button>
        <?php
        if (isset($_GET["message"])) {
            echo '<span>'. $_GET["message"] . '</span>';
        }
        ?>
    </form>
    <br>
    <span>Create New Account: </span>
    <a href="signup.php"><button type="button">Sign Up</button></a>
</body>
</html>