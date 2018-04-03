<?php
//phpmailer to send email  invite team member by tee

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once '../../src/PHPMailer/src/PHPMailer.php';
require_once '../../src/PHPMailer/src/SMTP.php';
require_once '../../src/PHPMailer/src/Exception.php';

function sendmail($email , $link){
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com;';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'tsyew1@gmail.com';                 // SMTP username
    $mail->Password = 'temptemp';                   // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('tsyew1@gmail.com', 'Mailer');
    $mail->addAddress($email, 'receiver');     // Add a recipient
    
    $mail->addReplyTo('tsyew1@gmail.com', 'Information');

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Invitation to YDEC 2018';
    $mail->Body    = "Your have been invite to join XXX team in YDEC , please click on the link below to join
    <a href='$link'> click this link </a> ";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'.$link;

    $mail->send();
    
    echo 'mail sent';
    }
 catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
    }
?>