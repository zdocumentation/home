<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "zdocumentsteodoro@gmail.com";

    // Set the subject of the email
    $subject = "New Contact Form Submission from $name";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message\n";

    // Set additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        // Display a success message
        echo "Thank you! Your message has been sent.";
    } else {
        // Display an error message
        echo "Unable to send your message. Please try again later.";
    }
}
?>