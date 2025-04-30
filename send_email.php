<?php
function sendContactEmail($name, $email, $message) {
    $to = "your-email@example.com"; // Replace with your email
    $subject = "New Contact Form Submission";
    
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    return mail($to, $subject, $email_content, $headers);
}

// Include this file in your index.php when you want to send emails
?> 