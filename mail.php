<?php $name = $_POST['names'];
$email = $_POST['email'];
$message = $_POST['message'];
$phno = $_POST['phno'];
$formcontent="From: $name \n Message: $message \n Contact: $phno";
$recipient = "neil98daftary@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>