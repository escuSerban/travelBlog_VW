<?php 
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="From: $name \n\n Message: $message";
$recipient = "serban@expertapps.online";
$subject = "Email from my blog";
$mailheader = "From: ". $email;
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
}
echo "Thanks for your message!";
?>