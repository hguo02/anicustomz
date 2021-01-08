<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "email";
    $body = "";
    

    $body .= "From: ".$name. "\r\n";
    $body .= "Email: ".$email. "\r\n";
    $body .= "Message: ".$message. "\r\n";

    //mail ($to, $messageSubject, $body);

?>
