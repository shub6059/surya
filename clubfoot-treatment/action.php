<?php
if(isset($_POST)){
	$to_email = '​info@suryahospitals.com';
	$to_email1 = 'opd.pune@suryahospitals.com';
	$subject = 'Club Foot Treatment Enquiry';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$message = "Hi<br>
	<br>
    New Club Foot Treatment Enquiry
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
	<br>
	For appointment & queries please you can speak with - <br>
    Mrs. Smirti - +91- 9454623563<br>
    Mr. Chetan Gharpinde - +91-7744010307<br>
    Dr. Ramdas Pawar - +91-9561584838<br>
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
		'location' => 'Pune',
		'date' => date("Y-m-d H:i:s"),
	);
	WCP_LandingPage_Controller::save($arg);

}
