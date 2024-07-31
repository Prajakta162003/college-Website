<?php
$name = $_POST['name'];
$visitior_email = $_POST['email';
$subject = $_POST['subject']];
$message = $_POST['message'];

$email_from = 'kbppandharpur@gmail.com';

$_email_subject = 'New Form Submission';

$_email_body = "User Name: $name.\n". 
               "User Email: $visitor_email.\n".
               "User Subject: $subject.\n".
               "User Message: $message.\n";

$to = 'prajktap206@gmail.com';
 
$headers = "From: $email_form \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html "); -->




?> 