<?php
if (isset($_POST['login-submit'])) {
    require 'dbh.inc.php';
    session_start();  // Start session before setting variables

    $mailuid = trim($_POST['mailuid']);
    $password = $_POST['pwd'];

    if (empty($mailuid) || empty($password)) {
        header("location: ../index.php?error=emptyfields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                if (!password_verify($password, $row['pwdUsers'])) {
                    header("location: ../index.php?error=wrongpwd");
                    exit();
                } else {
                    $_SESSION['userID'] = $row['idUsers'];
                    $_SESSION['userUID'] = $row['uidUsers'];

                    header("location: ../index.php?login=success");
                    exit();
                }
            } else {
                header("location: ../index.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("location: ../index.php");
    exit();
}
