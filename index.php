<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require "vendor/autoload.php";
?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>mailer and all</title>
    <style>
    </style>
</head>

<body>
<form action="" method="post">
    <label>naam: <input type="text" name="naam"></label><br>
    <label>email adres: <input type="email" name="naam"></label><br>
    <label>
        omschrijving: <br>
        <textarea name="message" cols="30" rows="10"></textarea><br>
    </label>
    <label><input type="submit" value="verstuur"></label>

    <?php
    if(isset($_POST["email"])) {
    try {
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = 'smtp.mailtrap.io';
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = 'd15f6f3d30a680';
        $phpmailer->Password = 'e2fff006d2adc6';

        $phpmailer->setFrom('jvzelst111@gmail.com');
        $phpmailer->addAddress($_POST["email"], $_POST["naam"]);

        $phpmailer->isHTML(true);
        $phpmailer->Subject = 'Here is the subject';
        $phpmailer->Body    = $_POST["message"];

        $phpmailer->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$phpmailer->ErrorInfo}";
    }
        }

    ?>
</form>
</body>
</html>