<?php 

require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';


/**
 * Verifica el formato de email
 * @param  string $email correo electronico del cliente
 * @return [type]        retorna verdadero o falso si el correo cumple con las indicaciones
 */
function verificar_email($email) 
{
  if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+.([a-zA-Z0-9\._-]+)+$/",$email))
  {
    return true;
  }
  return false;
}



function enviarMensaje(){

	$mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'luis92pe@gmail.com';                 // SMTP username
    $mail->Password = 'Ug1Aovo*';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('luis92pe@gmail.com', 'Mailer');
    $mail->addAddress('luis92pe@gmail.com', 'Joe User');     // Add a recipient
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}


 ?>