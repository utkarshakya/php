<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <h1>Sign Up To Continue</h1>
    <form action="signup_process.php" method="post">
        <label for="fullName">Full Name</label>
        <input type="text" name="fullName" id="fullName" required>
        <br>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <?php
        if (isset($_GET["isUsernameExists"])) {
            echo '<span>Username already exists</span>'; // we can improve this message by using frontend frameworks.
        }
        ?>
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <br>
        <button type="submit">Sign Up</button>
    </form>
    <br>
    <span>Already Have An Account: </span>
    <a href="login.php"><button type="button">Log In</button></a>
</body>

</html>