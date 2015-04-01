<?php 

$fname = htmlspecialchars( $_POST['fname'] );

$lname = htmlspecialchars( $_POST['lname'] );

$email = htmlspecialchars( $_POST['email'] );

$subject = 'Contact Form Submit - ' . $fname . ' ' . $lname;

$message = htmlspecialchars( $_POST['request'] );

$headers = 'From: info@clearwaterflies.com' . "\r\n" .
    'Reply-To: info@clearwaterflies.com' . "\r\n";

if ( mail('info@clearwaterflies.com', $subject, $message, $headers ) ){ 

	echo 'Thank You! Your request has been submitted.';
	
} else {
	
	exit;
	
};