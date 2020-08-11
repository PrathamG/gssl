<?php
	$name = $_POST['fname'] . " " . $_POST['lname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$company = $_POST['company'];
	$comment = $_POST['comment'];

	$to      = 'info@goradia.in';
	$subject = 'GSSL Website Enquiry';
	$message = "
					Name:  $name
					Email: $email
					Phone: $phone
					Company: $company
					Query: $comment
				";
	$headers = 'From: info@goradia.in';
	//echo $to . "<br>" . $subject . "<br>" . $message . "<br>" . $headers . "<br>";
	//mail($to, $subject, $message, $headers);
	echo "yeet";
?>