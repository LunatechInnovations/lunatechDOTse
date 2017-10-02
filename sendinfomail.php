<?php
	$to		= 'info@lunatech.se';
	$subject	= $_POST["subject"];
	$message	= $_POST["message"];
	$from		= '"' . $_POST["name"] . '" <' . $_POST["email"] . '>';
	$headers = 'From: ' .  $from . "\r\n" .
		'Reply-To: ' . $from . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	if(mail($to, $subject, $message, $headers))
	{
		header("Location: http://www.lunatech.se/?sendmail=1#contact");
	}
	else
	{
		header("Location: http://www.lunatech.se/?sendmail=2#contact");
	}
		

	die();
?>
