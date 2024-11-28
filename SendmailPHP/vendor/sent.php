<?php
// PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
// Base files 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// create object of PHPMailer class with boolean parameter which sets/unsets exception.
$mail = new PHPMailer(true);   

                           
try {
    $mail->isSMTP(); // using SMTP protocol                                     
    $mail->Host = 'live.smtp.mailtrap.io'; // SMTP host as gmail => smtp.gmail.com
    $mail->SMTPAuth = true;  // enable smtp authentication                             
    $mail->Username = 'api';  // sender gmail host              
    $mail->Password = 'aee8b8c539f76c67f06bbb15bc8f5bbb'; // sender gmail host password                          
    $mail->SMTPSecure = 'tls';  // for encrypted connection                           
    $mail->Port = 587;   // port for SMTP     

    $name = $_POST["input_4"];
    $bedroom = $_POST['input_5'];
    $bathroom = $_POST['input_6'];
    $frommail = $_POST["input_2"];
    $num = $_POST['input_7'];   




    $mail->setFrom($name, "Sender"); // sender's email and name
    $mail->addAddress('api', "Receiver");  // receiver's email and name

    $mail->Subject = 'Test subject';
    $mail->Body    = 'Test body';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) { // handle error.
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>