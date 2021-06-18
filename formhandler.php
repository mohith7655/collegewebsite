<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'email';
$email_subject = 'New form submission';
$email_body = "user name: $name.\n".
                     "user name: $visitor_email.\n".
                  "subject: $subject.\n"
                  "user message: $message .\n";

$to = 's.mohithkumar@outlook.com';                  

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";
mail($to,$email_subjcet,$email_body,$headers)
header("Location: contact.html");
?>