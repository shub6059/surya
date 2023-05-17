<?php
if(isset($_POST)){
	
	$to_email = "info@suryahospitals.com, webleads.jaipur@suryahospitals.com, neha.sharma@suryahospitals.com, suhasani.jain@suryahospitals.com, ashish.agrawal@suryahospitals.com, anuj.sharma@suryahospitals.com";
	//$to_email1 = 'webleads.jaipur@suryahospitals.com';
	// $to_email2 = 'kailash0593@gmail.com';
	$subject = 'Paediatric Orthopedic Enquiry - Jaipur';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
		
	$message = "Hi<br>
	<br>
	New Paediatric Orthopedic Enquiry
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
	$subject = 'Paediatric Orthopedic - Appointment Confirmation';

	$message = "Hi $name,
	<br>
	<br>
	Thank you for contacting us, please consider this email as a confirmation of your appointment.
    One of our patient care executives will contact you soon to confirm your appointment details.
	<br>
	You can also walk-in for consultation on any day of your choice.<br>
	For any assistance contact us at +91-141-4333777 <br>
	<?php 
$image_url='https://suryahospitals.com/jaipur/wp-content/uploads/sites/3/2018/10/Dr-Deepak-Khurana.jpg';
?><br>
	Dr. Deepak Khurana<br>
M.S (ORTHOPAEDICS), FIPO<br>
Experience: 5 years<br>
OPD Timings<br>
Monday – Friday<br>
9 am to 12 noon<br>
9 am to 12 noon<br>
	
	<br>
	Regards,<br>
	Team Surya Hospitals<br>
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