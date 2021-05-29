<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $fromemail = "test@gmail.com";
    $myemail = "duvivierbri@gmail.com";
    $subject = "New email!";
    $body_message = "New Message: $message.";

    $headers = "From: $fromemail \n";
    $headers .= "Reply-To: $email \n";

    mail($myemail, $subject, $body_message, $headers);
    header("Location: index.html");
?>