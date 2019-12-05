<?php 
$prenom = (isset($_POST['prenom'])) ? htmlspecialchars($_POST['prenom']) : NULL;
$nom = (isset($_POST['nom'])) ? htmlspecialchars($_POST['nom']) : NULL;
$email = (isset($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) ? htmlspecialchars($_POST['email']) : NULL;
$message = (isset($_POST['message'])) ? htmlspecialchars($_POST['message']) : NULL;

if ($prenom && $nom && $email && $message){
	$email_to = "contact@gala-imt-atlantique.com";
	$email_subject = "Contact gala-imt-atlantique.com";
	$email_message = wordwrap($message, 70);

	$headers = 'From: '.$email."\r\n".
	'Reply-To: '.$email."\r\n" .
	'MIME-Version: 1.0' . "\r\n".
	'Content-type: text/html; charset=UTF-8' . "\r\n".
	'X-Mailer: PHP/' . phpversion();

	mail($email_to, $email_subject, $email_message, $headers);  

	echo 1;
} else {
	echo 0;
}