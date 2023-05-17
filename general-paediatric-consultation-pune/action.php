<?php
if(isset($_POST)){
	$to_email = '​info@suryahospitals.com';
	$to_email1 = 'opd.pune@suryahospitals.com';
	// $to_email2 = 'kailash0593@gmail.com';
	$subject = 'General Paediatric Consultation Enquiry - Pune';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$specialities = $_POST['specialities'];
	$query = $_POST['query'];

	$message = "Hello<br>
	<br>
	New Sign up
	<br>
	Name : $name;
	<br>
	Email : $email;
	<br>
	Phone : $phone;
	
	
	";
	$headers = "From: $name <$email>\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= "Bcc:soumya.swain@riseit.com,sudhir.sawant@riseit.com\r\n";

	mail($to_email,$subject,$message,$headers);
	mail($to_email1,$subject,$message,$headers);
	// mail($to_email2,$subject,$message,$headers);

	$to_email = $email;
	$subject = 'Thank you for your Enquiry | Surya Hospitals';

	$message = "Hi $name,
	<br>
	<br>
	Thank you for your Enquiry.
	<br>
	We will confirm your booking shortly. Below is a copy of the details you submitted.
	<br>
	<br>
	Name : $name
	<br>
	Email : $email
	<br>
	Phone : $phone
	<br>
	<br>
	Team,<br>
	Surya Hospitals<br>
	<a href='https://suryahospitals.com/pune'>suryahospitals.com</a>
	";

	$headers = "From: SuryaHospitals <info@suryahospitals.com>\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	mail($to_email,$subject,$message,$headers);

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

}