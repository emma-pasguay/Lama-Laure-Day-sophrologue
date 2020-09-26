<?php
	$name = $_Post['fname'];
	$visitor_email = $_Post ['e-mail'];
	$message = $_Post ['subject'];

	$email_form = 'LamaLaureDay-Sophrologue@sophrologie.com';
	$email_subject = "New Form Submission";
	$email_body = "User Name: $firstname.\n".
					"User Email: $email.\n".
					"User Message: $subject.\n";

	$to = "emma.pasguay@gmail.com"

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $visitor_email \r\n";

	mail($to, $email_subject, $email_body, $headers);

	header("Location: index.html");
?>