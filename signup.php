<?php
require "header.php";
?>
<main>
    <div>
        <h1>
            Signup
        </h1>
        <form class="signup-form" action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="User Name">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit">Signup </button>
        </form>
    </div>
</main>
<?php
require "footer.php";
?>