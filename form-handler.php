<?php

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@sumaiyatarannumnoor.github.io';

$email_subject = 'One new message.';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Subject: $subject.\n".
              "User Message: $message.\n";

$to = 'sumaiyatarannumnoor@gmail.com';              

$header = "From $email_from \r\n";

$header .="Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>
