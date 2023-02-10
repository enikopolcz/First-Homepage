<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "eniko.polcz@gmail.com";
    $subject = "Message from Contact Form";
    $headers = "From: $email\r\n";
    
    mail($to, $subject, $message, $headers);
}
?>