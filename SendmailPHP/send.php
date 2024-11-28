<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "PHPMailer/src/Exception.php";
    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/SMTP.php";


    if(isset($_POST['submit'])){
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'live.smtp.mailtrap.io'; // smtp.gmail.com
        $mail->SMTPAuth = true;
        $mail->UserName = 'api';
        $mail->Password = 'aee8b8c539f76c67f06bbb15bc8f5bbb';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 587;


        $name = $_POST["input_4"];
        $bedroom = $_POST['input_5'];
        $bathroom = $_POST['input_6'];
        $frommail = $_POST["input_2"];
        $num = $_POST['input_7'];    


        $mail->setForm('explorerishacker@gmail.com'); // Your gmail

        $mail->addAddress($frommail);

        $mail->isHTML(true);

        $subject = 'I need Room';

        $mail->Subject = $subject;

        $message = $name. "\n". $bedroom. "\n". $bathroom. "\n". $email. "\n". $num. "\n";

        $mail->Body = $message;

        $mail->send();

        if($mail->send()){
            echo "Email sent successfully to $receiver";
        }else{
            echo "Sorry, failed while sending mail!";
        }
    }
?>