<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "info@refill.ng";
$subject = "Inquiry";
$body = "Thank you for contacting REFILL. \n
\n From : $email \n\n Name : $name \n\n  $message";
mail ($to,$subject,$body);

echo "Message sent . <a href='index.html'>click here</a> to continue";



?>
