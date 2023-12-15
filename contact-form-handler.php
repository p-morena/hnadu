<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $email_from = 'pmarinka16@gmail.com';

    $email_subject = "New Form Submission";
    
    $email_body =   "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                    "User Message: $message.\n";


    $to = "petrenko.morena@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");
 // Check if the email was sent successfully
 if (mail($to, $email_subject, $email_body, $headers)) {
    header("Location: success.html"); // Redirect to success page
    exit();
} else {
    header("Location: error.html"); // Redirect to error page
    exit();
}

} else {
echo "Invalid request!";
}

?>