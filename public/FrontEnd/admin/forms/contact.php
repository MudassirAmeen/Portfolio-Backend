<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/SMTP.php';



if (isset($_POST['submit'])) {

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "mudassirameen104@gmail.com"; // Your gmail
    $mail->Password = "qcmgxsmpppdfilnt"; // Your gmail app password
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->setFrom($_POST["email"]); // Your Gmail
    $mail->addReplyTo($_POST["email"]);

    $mail->addAddress("mudassirameen205@gmail.com");
    
    $name = $_POST['name'];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $sender = $_POST['email'];

    $mail->Sender = $sender;

    $mail->isHTML(true);

    $mail->Subject = "Someone Wants to Contact You.";

    // Construct the email body
    $email_body = "";

    $mail->Body = $email_body;

    if ($mail->send()) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you as soon as possible.";
    } else {
        // Email send failed
        $error = error_get_last();
        echo "There was an error sending your message: " . $error['message'];
    }


}
