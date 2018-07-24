<?php 
	$name = $_Post['contact_form_name'];
	$visitor_email = $_Post['contact_form_email'];
	$message = $_POST['contact_form_message'];

	$email_from = 'samuelshaqqur@gmail.com';
	
	$email_subject = "New Form Submission";
	
	$email_body = "Client Name: $name.\n".
					"Client Email: $visitor_email.\n".
					"Client Message: $message.\n";
					
	$to = "samuelshaq@gmail.com"
	
	$headers = "From: $email_from \r\n";
	$headers .= "Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: index.html")
?>
