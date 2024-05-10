<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set recipient email address
    $to = "cliveabinel421@gmail.com"; 

    // Set subject
    $subject = "New Message from Simply Productivity Solutions Website";

    // Compose message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Set additional headers
    $headers = "From: Abinel Clive Banda <simplyacademicsolutions@example.com>";
    $headers .= "\r\n"; // Add a line break

    // Send email and handle errors
    if (mail($to, $subject, $email_message, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon!";
    } else {
        // Error sending email
        echo "Oops! Something went wrong. Please try again later.";
        error_log("Failed to send email: " . error_get_last()['message']);
    }
} else {
    // Redirect to contact page if accessed directly
    header("Location: contact.html");
    exit;
}
?>
