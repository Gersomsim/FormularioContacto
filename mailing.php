<?php
// Carga de Mailer mediante autoload de composer
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

function sendEmail($subjet, $body, $email, $name, $html = false)
{
  try {
    // configuracion inicial del mailer
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '9284b98741d5ec';
    $mail->Password = '1f73c9bbd2e04d';
  
    // Añadiendo destinatarios
    $mail->setFrom('contact@miempresa.com', 'Mi empresa');    //Add a recipient
    $mail->addAddress($email, $name);  
    
    // Definiendo el contenido del email
    $mail->isHTML($html);//Set email format to HTML
    $mail->Subject = $subjet;
    $mail->Body    = $body;
  
    // Enviar el correo
    $mail->send();
    return true;
  } catch (\Throwable $th) {    
    return false;
  }
}