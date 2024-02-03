<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formdata = $_POST['formdata'];
    $aboutusaddlinfo = $_POST['aboutusaddlinfo'];

    // Additional server-side validation and processing can be done here

    // Example: Sending email using the mail() function
    $to = 'your@email.com'; // Replace with your designated email address
    $subject = 'Form Submission';
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $formdata, $headers)) {
        echo 'success';
    } else {
        echo 'Error sending email';
    }
} else {
    echo 'Invalid request';
}
?>
