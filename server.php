<?php
require './mailing.php';

$status = 'danger';

if ( isset( $_POST['form'] ) && validate(...$_POST) ){
  // Sanitizar Datos;
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  // body 
  $body = $message;

  // Mandar correo
  $result = sendEmail( $subject, $body, $email, $name );
  if ( $result ){
    $status = 'success';
  }
}

header( 'location: ./?status='.$status );

function validate($name, $email, $subject, $message, $form)
{    
  return !empty( $name ) && !empty($email) && !empty( $subject ) && !empty( $message);
}