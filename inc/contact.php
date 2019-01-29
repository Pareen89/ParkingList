<?php 

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "pareenpatel89@gmail.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have received an e-mail from " . $name . ".\n\n" . $message;
    mail($mailTo, $subject, $text, $headers);
    header("Location: ../contact.php?messagesent");
}