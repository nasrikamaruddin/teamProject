<div> 
<?php
// ************************TO HIDE DIV in HTML use <div style='display:none';>********************
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'noreply1milliont@gmail.com';                 // SMTP username
    $mail->Password = 'password1MT';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->AddEmbeddedImage('MT Logo.png', '1mtlogo');
    $mail->setFrom('no-reply@1milliontraders.com', '1MillionTraders');
    $mail->addAddress('jzlow132@gmail.com');//htmlspecialchars($_POST['email']), '');     // Add a recipient
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to 1MillionTraders';
    $mail->Body    = '' ; //PASTE HTML BODY HERE!


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>

</div>