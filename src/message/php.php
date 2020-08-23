<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

$nom = $_POST['nombre'];
$mess = $_POST['pedido'];


$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'clientes.anonimos2020@gmail.com';                     // SMTP username
    $mail->Password   = 'anoninmo21';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('clientes.anonimos2020@gmail.com', 'elanonimo');
    $mail->addAddress('cristianmultiutn@hotmail.com', 'mi nombre es');     // Add a recipient
    //$mail->addAddress('aspyear@gmail.com', 'mi nombre es');     // Add a recipient

    // Attachments

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $nom;
    $mail->Body    = $mess;

    $mail->send();
	header("location: ../../index.html?id=formu");
} catch (Exception $e) {
    echo "mailer no envio el mensaje: {$mail->ErrorInfo}";
	//header("location: ../index.php?id=incorrecto#contact");
}



?>