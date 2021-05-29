<?php
/* Can't know for sure if this works until after I put my site on the server... So we'll see! */
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$fromemail = "$email"
$myemail = 'duvivierbri@gmail.com';
$subject = "New email!";

$body_message = "New Message: $message";

$headers = "From: $fromemail \r\n";
$headers .= "Reply-To: $email \r\n";

$mail_status = mail($myemail, $subject, $body_message, $headers);

?>