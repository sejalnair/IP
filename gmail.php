<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                        // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'sejalnair9@gmail.com';                 // SMTP username
        $mail->Password = 'snejal@9';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('sejalnair9@gmail.com', 'sejal nair');
        $mail->addAddress('rajsmadheshia@gmail.com', 'Raj Madheshia');     // Add a recipient

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Quiz-Zone Login';
        $mail->Body = '<h1 align=center>QUIZ-ZONE <br>Email: '.$_COOKIE['emailid'].'</h1>'.'<br><h4>Hello '.$_COOKIE['name'].',<br> You have been successfully authenticated as Teacher with Email-Id: '.$_COOKIE['emailid'].'<br>Your Password is: '.$_COOKIE['password'].' </h4>';



        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }