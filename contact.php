<?php
$name = $_REQUEST['name'];
$subject = $_REQUEST['subject'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];


if (empty($name) || (empty($subject) || (empty($email) || (empty($phone) || (empty($message) {
    echo "Please fill out all fields";
}
else 
{
    mail("biggbellybbq2@gmail.com", "Portfolio message", $message, "From: $name <
    $email>");
    echo "<script type='text/javascript'>alert('your message sent successfully')</script>";
    window.history.log(-1);
}
?>