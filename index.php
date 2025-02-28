<?php
require "header.php";
?>
<main>
    <?php
    if (isset($_SESSION['userID'])) { // Ensure this matches what is set in login.inc.php
        echo '<p>Logged in</p>';
    } else {
        echo '<p>Logged out</p>';
    }
    ?>
</main>
<?php
require "footer.php";
?>