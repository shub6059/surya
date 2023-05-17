<?php
if(isset($_POST)){
	
	$to_email = "info@suryahospitals.com, webleads.jaipur@suryahospitals.com, neha.sharma@suryahospitals.com, suhasani.jain@suryahospitals.com, ashish.agrawal@suryahospitals.com, anuj.sharma@suryahospitals.com";
	$subject = 'Free Nutrion Guide & Consultation Registration';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	$message = "Hello<br>
	<br>
	Free Nutrition Guide & Consultation Enquiry
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
	$subject = 'Free Nutrion Guide & Consultation - Registration Received';

	$message = "Hi $name,
	<br>
	<br>
	Thank you for registering for free pregnancy consultation with Surya Hospitals.
	<br>
	<br>
	Download your Free Nutrion Guide <a href='https://suryahospitals.com/download-free-pregnancy-nutrition-guide/free-nutrition-guide-surya-jaipur.pdf'>here</a>.  
	<br>
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
	For any queries, please connect with us at - +91-141-4333777   
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