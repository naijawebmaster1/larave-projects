<?php
// PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception;
// Base files 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// create object of PHPMailer class with boolean parameter which sets/unsets exception.

                           

$name = $_POST["input_4"];
$bedroom = $_POST['input_5'];
$bathroom = $_POST['input_6'];
$frommail = $_POST["input_2"];
$num = $_POST['input_7'];

$to = $frommail;
$subject = "Property Inquiry";

$message = "Hello $name,\n\n";
$message .= "Thank you for your inquiry regarding the property with $bedroom bedrooms and $bathroom bathrooms.\n";
$message .= "Our team will get back to you shortly.\n\n";
$message .= "Best regards,\n";
$message .= "Blue Cross Hospital";

// Create a new PHPMailer instance
$mail = new PHPMailer;

// Set SMTP settings
$mail->isSMTP();
$mail->Host = 'mail.bluecrosshospital.com';
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'no-reply@bluecrosshospital.com';
$mail->Password = 'q2iPPP-L';
$mail->SMTPSecure = 'ssl';

// Set From and To addresses
$mail->setFrom('no-reply@bluecrosshospital.com');
$mail->addAddress($to);

// Set email subject and body
$mail->Subject = $subject;
$mail->Body = $message;

// Send email

if ($mail->send()) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email 123.";
}
?>