<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$mail_body = "Name : ".$name."<br>"; 
$mail_body .= "Email : " . $email . "<br>";
$mail_body .= "Subject : " . $subject . "<br>";
$mail_body .= "Message : " . $message . "<br>";
if(mail("yourmail@gmail.com","From: Contact Form Your name",$mail_body,$headers)){
    $thanks_mail_body = "Hello " . $name ."<br>";
    
    $thanks_mail_body .= "Thank you for your interest to contact us!<br>";
    $thanks_mail_body .= "We will get back to you soon.<br>";
    $thanks_mail_body .= "Thank You";

    if(mail($email,"Contact Request Notification Email",$thanks_mail_body,$headers)){
        echo "1";
        die();
    }
    echo "1";    
}else{
    echo "0";
}
