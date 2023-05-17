<?php
if(isset($_POST)){
	
	$to_email = "info@suryahospitals.com, webleads.jaipur@suryahospitals.com, neha.sharma@suryahospitals.com, suhasani.jain@suryahospitals.com, ashish.agrawal@suryahospitals.com, anuj.sharma@suryahospitals.com";
	//$to_email1 = 'webleads.jaipur@suryahospitals.com';
	// $to_email2 = 'kailash0593@gmail.com';
	$subject = 'Sign Up For Antenatal Classes - Jaipur';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
		
	$message = "Hello<br>
	<br>
	New ANC Classes Enquiry
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
	$headers .= "Bcc:soumya.swain@riseit.com\r\n";

	mail($to_email,$subject,$message,$headers);
	mail($to_email1,$subject,$message,$headers);
	// mail($to_email2,$subject,$message,$headers);

	$to_email = $email;
	$subject = 'Surya ANC Classes - Registration received.';

	$message = "Hi $name,
	<br>
	<br>
	Thank you for signing up.
	<br>
	We have received your details.
	<br>
	Our team will contact you shortly with details of ANC Classes schedule and appointment. 
	<br>
	For assistance or queries you can call us at - +91-141-4333777  
	<br>
	Below is a copy of the details you submitted. 
	<br>
	Name : $name
	<br>
	Email : $email
	<br>
	Phone : $phone
	<br>
	For assistance or queries you can call us at - +91-141-4333777  
	</a>
	<br>
	<br>
	Team,<br>
	Surya Hospitals Jaipur<br>
	<a href='https://suryahospitals.com/jaipur'>suryahospitals.com/jaipur</a>
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


if(isset($_POST['formSubmit']) ){
  $varMovie = $_POST['formMovie'];
  $varName = $_POST['formName'];
  $varGender = $_POST['trimester'];
  $errorMessage = "";

  // - - - snip - - - 
}

if(!isset($_POST['trimester'])) {
  $errorMessage .= "<li>You forgot to select your Trimester!</li>";
}