<?php
session_start(); // Start session at the top before anything else
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <a href="#">
                <img src="img/logo.png" alt="LOGO">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <div>
                <?php
                if (isset($_SESSION['userID'])) {
                    echo "<p>Welcome, " . $_SESSION['userUID'] . "!</p>";
                }
                ?>
                <form action="includes/login.inc.php" method="post">
                    <input type="text" name="mailuid" placeholder="Username or E-mail ..">
                    <input type="password" name="pwd" placeholder="Password ..">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <a href="signup.php">Sign Up</a>
                <form action="includes/logout.inc.php" method="post">
                    <button type="submit" name="logout-submit">Log Out</button>
                </form>
            </div>
        </nav>
    </header>