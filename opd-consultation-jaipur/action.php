<?php
if(isset($_POST)){
	$to_email = "info@suryahospitals.com, webleads.jaipur@suryahospitals.com, neha.sharma@suryahospitals.com, suhasani.jain@suryahospitals.com, ashish.agrawal@suryahospitals.com, anuj.sharma@suryahospitals.com";
	$subject = 'OPD Consultation Registration - 50% Discount - Jaipur';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	$message = "Hi<br>
	<br>
	New OPD Consultation Enquiry
	<br>
	Name : $name;
	<br>
	Email : $email;
	<br>
	Phone : $phone;
	<br>
	";
	$headers = "From: $name <$email>\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= "Bcc:soumya.swain@riseit.com\r\n";

	mail($to_email,$subject,$message,$headers);
	mail($to_email1,$subject,$message,$headers);
	// mail($to_email2,$subject,$message,$headers);

	$to_email = $email;
	$subject = 'Surya Hospital - OPD Registration confirmation  
';

	$message = "Hi,
	<br>
	<br>
	Thank you for registering with Surya Hospitals.
	<br>
	You can now avail the benefit of 50% OFF on first consultation with one specialist at Surya Hospitals Jaipur.
	<br>
	Below is a copy of the details you submitted. 
	<br>
	<br>
	Name : $name
	<br>
	Email : $email
	<br>
	Phone : $phone
	<br>
	<br>
	For appointment & queries please connect with us at - +91-141-4333777 
    <br>
	Wishing you best of health.  
	<br>
	<br>
	Team,<br>
	Surya Hospitals Jaipur.<br>
	<a href='https://suryahospitals.com/jaipur/'>https://suryahospitals.com/jaipur</a>
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
		'location' => 'Pune',
		'date' => date("Y-m-d H:i:s"),
	);
	WCP_LandingPage_Controller::save($arg);

}
