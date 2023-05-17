<?php
if(isset($_POST['submit']))
{
	require_once($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/theme48706/book-an-appointment/PHPMailer-master/PHPMailerAutoload.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/theme48706/book-an-appointment/PHPMailer-master/class.phpmailer.php');

	$mail = new PHPMailer;

	// $mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.suryahospitals.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	
	$mail->Username = 'opd.pune@suryahospitals.com';                 // SMTP username
	$mail->Password = 'Surya@123'; 
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	$mail->setFrom('opd.pune@suryahospitals.com', 'Surya');
	$mail->addAddress('suryaanalytics2017@gmail.com');               // Name is optional
	$mail->addAddress('opd.pune@suryahospitals.com');               // Name is Optional

	$middle = strtotime($_POST['date']);

	$new_date = date('d-m-Y', $middle);

	$mail->Subject = 'Subject: suryahospitals.com - Pregnancy Carnival Registration';
	$greeting = "Thank you for your Enquiry.<br/><br/>Please DO NOT reply to this email.<hr><br/>";

	$end = "<br/><hr>Team,<br/>Surya Hospitals<br/>suryahospitals.com";
	
	$mail->Body    = "".$greeting."Name: ".$_POST['user_name']."<br/>Contact Number: ".$_POST['user_number']."<br/>Email: ".$_POST['user_mail']."<br/>Expected Date: ".$new_date."<br/>".$end;

	$mail->AltBody = "".$greeting."Name: ".$_POST['user_name']."<br/>Contact Number: ".$_POST['user_number']."<br/>Email: ".$_POST['user_mail']."<br/>Expected Date: ".$new_date."<br/> ".$end;

	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo "<script>window.location.href='/suryafinal/thank-you'; </script>";
	}
}