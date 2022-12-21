<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject=$_post['subject'];
$message=$_post['message'];


$email_from='revauniversityinfo.com';

$email_subject='New Form  Submission';

$email_body="user name:$name.\n".
            "user Email:$visitor_email.\n".
            "subject:$subject.\n".
            "user message:$message.\n";

    $to='arshuarshad9620@gmail.com';

    $headers= "FROM: $email_from \r\n";

    $headers .= "REPLY-TO: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");







?>