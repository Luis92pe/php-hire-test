<?php 

require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';


/**
Function validation
*/
function validate($campo, $atributo) 
{
  
    if(in_array("required", $atributo))
        if(!($campo!='')){

            return false;
        }

    if(in_array("email", $atributo))
        if(!(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+.([a-zA-Z0-9\._-]+)+$/",$email))){
            return false;
        }

    return true;
}




/**
    Function for send emails
*/
function enviarMensaje(){

	$mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = '[EMAIL]';                 // SMTP username
    $mail->Password = '[PASSWORD]';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('[EMAIL]', 'Mailer');
    $mail->addAddress('[EMAIL]', 'Joe User');     // Add a recipient
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