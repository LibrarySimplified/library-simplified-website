<?php

function customValidation($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$to = 'your@email.com';															// Recipient's email address
$name = customValidation($_REQUEST['name']);				// Sender's name
$subject = customValidation($_REQUEST['subject']); 	// Email subject
$email = customValidation($_REQUEST['email']);			// Sender's email address
$message = customValidation($_REQUEST['message']);	// Contact form message

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "invalidEmailAddress"; // invalid email address
	return false;
}
else {
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= "Reply-to: ".$email."\r\n";
	$headers .= "From: ". $name ." <" . $email . ">\r\n"; // Sender's email address
	
	mail($to, $subject, $message, $headers);
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
?>