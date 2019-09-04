<?php
	$FULL_NAME = S_POST ["name"];
	$EMAIL = S_POST ["email"];
	$TITLE = S_POST ["title"];
	$Message = S_POST ["message"];


	$email_from = "obinnaudeagha@yahoo.com";

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n".
					"User Email: $EMAIL.\n".
						"User Title: $TITLE.\n".
							"User Message: $message.\n".

	$to = "obinnaudeagha1@gmail.com";

	$headers = "From: $email_from \r\n";

	$headers .= "Reply-To: $EMAIL \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: ObinnaResumeCSS.html");
	

?>