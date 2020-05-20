<?php
if (isset($_POST['submit-mail'])) {
	$mail = $_POST["email"];
	$tresc = $_POST["tresc"];
	
	require 'vendor/autoload.php';
	require("sendgrid-php.php");

	$email = new \SendGrid\Mail\Mail(); 
	$email->setFrom("oskar.pykosz@gmail.com", "Oskar Pykosz");
	$email->setSubject("Adresy URL");
	$email->addTo($mail, "Example User");
	$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
	$email->addContent(
		"text/html", $tresc
	);
	$sendgrid = new \SendGrid('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');
	try {
		$response = $sendgrid->send($email);
		print $response->statusCode() . "\n";
		print_r($response->headers());
		print $response->body() . "\n";
	} catch (Exception $e) {
		echo 'Caught exception: '. $e->getMessage() ."\n";
	}
	
	header("Location: index.php");
	exit();
} else {
	header("Location: index.php");
	exit();
}
