<?php
if(isset($_POST)){
	$to_email = '​info@suryahospitals.com';
	$to_email1 = 'opd.pune@suryahospitals.com';
	// $to_email2 = 'kailash0593@gmail.com';
	$subject = 'Sign Up For Antenatal Classes';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$month = $_POST['month'];

	$message = "Hi New ANC Classes Enquiry<br>
	<br>
	New Sign up
	<br>
	Name : $name;
	<br>
	Email : $email;
	<br>
	Phone : $phone;
	<br>
	Your Current Month of Pregnancy : $month;
	";
	$headers = "From: $name <$email>\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= "Bcc:soumya.swain@riseit.com,sudhir.sawant@riseit.com\r\n";

	mail($to_email,$subject,$message,$headers);
	mail($to_email1,$subject,$message,$headers);
	// mail($to_email2,$subject,$message,$headers);

	$to_email = $email;
	$subject = 'Surya Hospitals, Pune | Thank you for your Enquiry';

	$message = "Hi,
	<br>
	<br>
	Thank you for you getting in touch with us. 
	<br>
	Kindly give us some time to review your request. Our team will get in touch with you shortly.
	<br>
	Below are the details you have shared with us. 
	<br>
	<br>
	Name : $name
	<br>
	Email : $email
	<br>
	Phone : $phone
	<br>
	Your Current Month of Pregnancy : $month
	<br>
	<br>
	For appointment & queries please you can speak with - 
	<br>
	Jyoti Karadkar – 8263915939
	<br>
	Pratiksha Polake – 8263915935
	<br>
	Email Id- <a href="mailto:patientrelationpune@suryahospitals.com">patientrelationpune@suryahospitals.com</a>
	<br>
	<br>
	Wishing you best of health.    
	<br>
	<br>
	Team,<br>
	Surya Mother & Child Care Hospital.<br>
	Pune<br>
	<a href='https://suryahospitals.com/pune'>https://suryahospitals.com/pune</a>
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
