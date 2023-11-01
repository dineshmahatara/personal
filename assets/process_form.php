<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "dinesh.mahatara.kshetri@gmail.com"; // Replace with the recipient's email address
    $subject = "Contact Form Submission";
    $message = "Email: " . $_POST["email"] . "\n";
    $message .= "Phone: " . $_POST["phone"] . "\n";
    $message .= "Message:\n" . $_POST["message"];

    $headers = "From: " . $_POST["email"] . "\r\n";

    // Use the mail() function to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
