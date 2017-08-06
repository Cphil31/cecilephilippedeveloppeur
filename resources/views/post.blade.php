<?php
$to ="cecilephilippe31@gmail.com";
$subject = "Email de cecilephilippedevelouppeur.com";

$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];


$headers .= "Content-type/ text/html;\r\n";
$headers .= "From: $email";

mail($to, $Subject, $headers);
echo "Votre mail a bien été envoyé ! Merci $name";
?>