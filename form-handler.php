<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@eduford.com'; // Here you must put your REAL DOMAIN email once you purchase a real domain name.

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
              "User email: $visitor_email.\n".
              "Subject: $subject.\n".
              "User Messsage: $message.\n";

$to = 'yourpersonalemailaddress@gmail.com'; // This is your personal email address, where you will receive the messages when people submit the form.

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers,$to);

header("Location: contact.html");

?>