<?php
extract($_POST);
$to_email = '​info@suryahospitals.com';
$to_email1 = 'opd.mumbai@suryahospitals.com';
$subject = 'Dr Neeta Warty Enquiry';
$message = "Hello<br>
<br>
New Sign up
<br>
Name : $name
<br>
Email : $email
<br>
Phone : $phone
";
$headers = "From: $name <$email>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to_email,$subject,$message,$headers);
mail($to_email1,$subject,$message,$headers);


	include_once '../wp-load.php';
	extract($_POST);
	$arg = array(
		'name' => $name,
		'email' => $email,
		'phone' => $phone,
		'page' => $page,
		'location' => 'Mumbai',
		'date' => date("Y-m-d H:i:s"),
	);
	WCP_LandingPage_Controller::save($arg);

