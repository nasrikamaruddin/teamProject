<div>
<?php
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
    $mail->setFrom('no-reply@1milliontraders.com', '1MillionTraders');
    $mail->addAddress(/*INSERT YOUR EMAIL _POST here */);//htmlspecialchars($_POST['email']), '');     // Add a recipient
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'RE: '. htmlspecialchars($_POST['replySubject']);
    $mail->Body    = '<h2> Hello,'. htmlspecialchars($_POST['email']).'</h2><br>Thank You for your support. <br><br>'.htmlspecialchars($_POST['replymsg'])
    .'<br><hr><br><h2><i><b>Always Fresh</b><br>Easy Peasy Customer Service</i></h2>'.'<br>email: easypeasyupm@gmail.com' ;


    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>

</div>