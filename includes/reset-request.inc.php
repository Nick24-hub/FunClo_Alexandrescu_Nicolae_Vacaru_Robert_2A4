<?php
require 'C:\Users\JohnSmith\xampp\composer\vendor\autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST["reset-request-submit"])) {
    $selector = bin2hex(random_bytes(8));
    $token = random_bytes(32);
    $url = "http://localhost/FunClo_Alexandrescu_Nicolae_Vacaru_Robert_2A4/create-new-password.php?selector="
        . $selector . "&validator=" . bin2hex($token);
    $expires = date("U") + 900;
    require 'dbh.inc.php';

    $userEmail = $_POST["email"];
    //daca s a facut un request pt schimbarea de parola inainte se sterg datele din dtb
    $sql = "DELETE FROM pwdreset where pwdResetEmail=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $userEmail);
        mysqli_stmt_execute($stmt);
    }

    $sql = "INSERT INTO pwdreset(pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) values (?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "There was an error!";
        exit();
    } else {
        $hashedToken = password_hash($token, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $selector, $hashedToken, $expires);
        mysqli_stmt_execute($stmt);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
    
    $to = $userEmail;
    $subject = 'Reset your Password for Funclo';
    $message = '<p>Acces the link to resset the password:</br>';
    $message .= '<a href="' . $url . '">' . $url . '</a></p>';

    $mail = new PHPMailer(TRUE);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ss1';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port =587;
    $mail->isHtml(true);
    $mail->Username = 'funclotw@gmail.com';
    $mail->Password = 'funclo123';
    $mail->SetFrom('funclotw@gmail.com', 'FunClo Team');
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->addAddress($to);
    $mail->send();
    header("Location: ../reset-password.php?reset=succes"); 
    
    
    
} else {
    header("Location: ../index.php");
}
