<?php
/* Can't know for sure if this works until after I put my site on the server... So we'll see! */
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail_to = 'duvivierbri@gmail.com';
$subject = 'Hey! '.$name." sent you a message through your portfolio site!";

$body_message = 'Message: '.$message;

$headers = 'From: '.$email."\r\n";
$headers .= 'Reply-To: '.$email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

?>