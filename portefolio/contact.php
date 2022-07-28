<?php

$from = $_POST['email']; //mail de la personne
$topic = $_POST['objet']; //objet
$text = $_POST['message']; // message
$name = $_POST['name']; // nom de la personne


$secret = 'q6muPLOjMCmH3DXC73lh'; //mot de passe de la boite mail

//biblio phpmailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);



try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                                          //Enable verbose debug output
    $mail->isSMTP();                                                                //Send using SMTP //Service
    $mail->Host       = 'ssl0.ovh.net';                                             //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                                       //Enable SMTP authentication 
    $mail->Username   = 'xilitest@hiroshimc.net';                                   //SMTP username
    $mail->Password   = $secret;                                                    //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;                                //Enable implicit TLS encryption
    $mail->Port       = 465;                                                        //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($from, $name);
    $mail->addAddress('xilitest@hiroshimc.net', 'Cuvillier Rémy');

    //Content
    $mail->isHTML(true); //ajouter du html dans le message
    $mail->Subject = $topic;
    $mail->Body    = $text;
    $mail->AltBody = $text;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

header('Location: index.html');
