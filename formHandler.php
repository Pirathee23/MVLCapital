<?php
    $name = $_POST['name'];
    $client_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'piratheipan.j@hotmail.com';
    $headers = "From: $client_email \r\n";
    mail($to, $subject, $message, $headers);
    header ("Location: index.html");
?>
