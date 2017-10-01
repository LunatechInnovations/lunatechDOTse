<?php
	$to		= 'info@lunatech.se';
	$subject	= $_POST["subject"];
	$message	= $_POST["message"];
	$from		= '"' . $_POST["name"] . '" <' . $_POST["email"] . '>';
	$headers = 'From: ' .  $from . "\r\n" .
		'Reply-To: ' . $from . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);

	header("Location: http://www.lunatech.se/#contact");
	die();
?>
