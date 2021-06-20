<?php
if (isset($_POST["reset-password-submit"])) {
    $selector = $_POST["selector"];
    $validator = $_POST["validator"];
    $password = $_POST["pwd"];
    $passwordRepeat = $_POST["pwd-repeat"];
    if (empty($passwordRepeat) || empty($password)) {
        header("Location: ../account.php?newpwd=empty");
        exit();
    } else if ($password !== $passwordRepeat) {
        header("Location: ../account.php?newpwd=pwdnotsame");
        exit();
    }
    $currentDate = date("U");
    require 'dbh.inc.php';
    $sql = "SELECT * FROM pwdreset WHERE pwdResetSelector=? AND pwdResetExpires>=$currentDate";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $selector);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (!$row = mysqli_fetch_assoc($result)) {
            echo "Resubmit the request";
            exit();
        } else {
            $tokenBin = hex2bin($validator);
            $tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);

            if ($tokenCheck == false) {
                echo "Resubmit the request";
                exit();
            } else if ($tokenCheck == true) {
                $tokenEmail = $row["pwdResetEmail"];
                $sql = "SELECT * FROM users WHERE userEmail=?";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    echo "There was an error!";
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                    if (!$row = mysqli_fetch_assoc($result)) {
                        echo "Resubmit the request";
                        exit();
                    } else {
                        $sql = "UPDATE users Set userPwd=?  WHERE userEmail=?";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            echo "There was an error!";
                            exit();
                        } else {
                            $newPwdHash = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "ss", $newPwdHash, $tokenEmail);
                            mysqli_stmt_execute($stmt);
                            $sql = "DELETE FROM pwdreset where pwdResetEmail=?";
                            $stmt = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($stmt, $sql)) {
                                echo "There was an error!";
                                exit();
                            } else {
                                mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
                                mysqli_stmt_execute($stmt);
                                header("Location: ../account.php?newpwd=passwordupdated");
                            }
                        }
                    }
                }
            }
        }
    }
} else {
    header("Location: ../index.php");
}
