<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

//Load Composer's autoloader
require_once('PHPMailer/class.phpmailer.php');
require_once('PHPMailer/class.smtp.php');

require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = "smtp.gmail.com";  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'adithya.kalaparthy@gmail.com';                 // SMTP username
    $mail->Password = 'kAdithya1994*';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('adithya.kalaparthy@gmail.com');
    $mail->addAddress('jithendra.vivek@gmail.com');     // Add a recipient               // Name is optional
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'gudda denginchuko';
    $mail->AltBody = 'gattiga denginchuko';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}