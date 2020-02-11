<?php     
$to_email = 'owais.mushtaq@outlook.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
// $headers = 'From: noreply@company.com';

$header = "From: noreply@example.com\r\n";
$header.= "MIME-Version: 1.0\r\n";
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$header.= "X-Priority: 1\r\n";

$status = mail($to_email, $subject, $message, $header);

if($status)
{
    echo '<p>Your mail has been sent!</p>';
} else {
    echo '<p>Something went wrong. Please try again!</p>';
}

?>