<?php
require "header.php";
?>

<head>
    <link rel="stylesheet" href="style.css">
</head>
<main>
    <div class="signup-form">
        <h1>Signup</h1>
        <?php
        if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
                echo '<p>Fill in all fields!</p>';
            } else if ($_GET['error'] == "invalidmailuid") {
                echo '<p>Invalid mail!</p>';
            } else if ($_GET['error'] == "invaliduid") {
                echo '<p>Invalid User Name!</p>';
            } else if ($_GET['error'] == "checkpassword") {
                echo '<p>Password doesn\'t match!</p>';
            } else if ($_GET['error'] == "username_taken") {
                echo '<p>Username taken!</p>';
            }
        }
        ?>
        <form class="form1" action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="User Name">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat Password">
            <button type="submit" name="signup-submit">Signup</button>
        </form>
    </div>
</main>
<?php
require "footer.php";
?>