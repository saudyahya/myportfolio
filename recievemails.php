<?php
$to = "saudyahya93@gmail.com";
$Subject = "Email from my website";

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $email";

mail($to, $Subject, $comment, $headers);
echo "Email has been sent! Thank you $name";
?>