<?php
require 'phpmailer/class.phpmailer.php';
require 'phpmailer/class.smtp.php';
require 'phpmailer/PHPMailerAutoload.php';



$mail = new PHPMailer;



//$mail->SMTPDebug = 3;                               // Enable verbose debug output



//$mail->isSMTP();                                      // Set mailer to use SMTP

$mail->Host = 'imap.gmail.com';  // Specify main and backup SMTP servers

$mail->SMTPAuth = true;                               // Enable SMTP authentication

$mail->Username = 'sabrang2018@gmail.com';                 // SMTP username

$mail->Password = '2018sabrang';                           // SMTP password

$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted

$mail->Port = 465;                                    // TCP port to connect to



$mail->setFrom('sabrang2018@gmail.com', 'Sabrang 2K18');

$mail->addAddress('jrishabh70155@gmail.com', 'Rishabh');     // Add a recipient

               // Name is optional



$mail->isHTML(true);                                  // Set email format to HTML



$mail->Subject = 'You have successfully registered!';

$mail->Body    = 'This is some message';

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';



if(!$mail->send()) {

    echo 'Message could not be sent.';

    echo 'Mailer Error: ' . $mail->ErrorInfo;

} else {

    echo 'Message has been sent';

}