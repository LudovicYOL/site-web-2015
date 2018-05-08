<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="\n\n From: $name \n\n Mail: $email \n\n Message:\n\n $message";
$recipient = "ludovic.yol@gmail.com";
$subject = "Un message a été envoyé depuis ludovicyol.fr";
$mailheader = "From: $email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "ok";

?>