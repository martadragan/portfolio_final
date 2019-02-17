<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

 if(isset($_POST['submit'])){

    //Load Composer's autoloader
require 'vendor/autoload.php';
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'martabootcampcz@gmail.com';                 // SMTP username
        $mail->Password = 'Marta12345';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
     
        //Recipients
        $mail->setFrom($_POST['email'], $_POST['firstname']." ".$_POST['lastname']);
        $mail->addAddress('martabootcampcz@gmail.com', 'Marta Dragan');   
        $mail->addReplyTo($_POST['email'], 'Information');
     
        //Content
        $mail->isHTML(true);                              
        $mail->Subject = 'New message';
        $mail->Body    = $_POST['text'];
    
        $mail->send();
        
      header("Location: http://www.my-portfolio.test:8080/public/");
        //sends the mail
    
    
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
  
 }
