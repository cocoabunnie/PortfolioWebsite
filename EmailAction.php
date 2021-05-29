<?php
    $message = $_POST['message'];

    $body_message = "New Message: $message.";

    mail("duvivierbri@gmail.com", "New Email From Your Website!", $body_message);
?>