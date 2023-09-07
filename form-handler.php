<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// TO DO
$email_from = 'info@'

$email_subject = 'Nowa wiadomość'

$email_body = "User Name: $name.\n".
              "User Email: $email.\n".
              "Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'contactgreenyogis@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";


mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");

?>