<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$sybject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'ysmagulov02.github.io/EasyTutorials';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Name: $visitor_email.\n".
                "Subject: $subject. \n".
                "User Message: $message. \n";

$to = 'ysmagulo@ucsc.edu';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>