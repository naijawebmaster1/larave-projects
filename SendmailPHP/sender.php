<?php

$curl = curl_init();
 

$name = $_POST["input_4"];
$bedroom = $_POST['input_5'];
$bathroom = $_POST['input_6'];
$frommail = $_POST["input_2"];
$num = $_POST['input_7'];   

$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = 'api';
$mail->Password = 'aee8b8c539f76c67f06bbb15bc8f5bbb';
$mail->SMTPSecure = 'tls';
$mail->Port = 528;

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://send.api.mailtrap.io/api/send',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
        "from":{
            "email":"mailtrap@hacker.com",
            "name":$name
        },
            "to":[
                {"email":"explorerishacker@gmail.com"}
            ],
            "subject":"You are awesome!",
            "text":"Congrats for sending test email with Mailtrap!",
            "category":"Integration Test"
        }',
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer aee8b8c539f76c67f06bbb15bc8f5bbb',
        'Content-Type: application/json'
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
?>