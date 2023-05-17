<?php 
#if(isset($_POST['submit']))
#{
#		$mail = "surya.communication@suryahospitals.com";
#		$to      = $mail;
#		$subject = 'Surya Hospitals | Doctor Appointment - ' . $_POST['user_name'];
		
		//echo $mail . "&nbsp;" . $to . "&nbsp;" . $subject;
#		$message   = "Name: ".$_POST['user_name']."<br/>Contact Number: ".$_POST['user_number']."<br/>Email: ".$_POST['user_mail']."<br/>Date of Appointment: ".$_POST['date']."<br/>City: ".$_POST['city']."<br/>Speciality: ".$_POST['speciality']."<br/>Doctor: ".$_POST['doctor']."<br/>Sub-speciality: ".ucwords($_POST['sub_speciality'])."<br/>Query: ".$_POST['message'];
#		$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
#		$Header .= 'From: ' . $_POST['user_name'] . '<'.$_POST['user_mail'].'>' . "\r\n";
#		ini_set('SMTP', "mail.suryahospitals.com");
#		ini_set('smtp_port', "587");
#ini_set('display_errors', 1); 
#error_reporting(E_ALL);
#		if((mail($to, $subject, $message, $Header,"-fsurya.communication@suryahospitals.com")))
#		{
#			echo "<script>window.location.href='/suryafinal/thank-you'; </script>";
			
#		}
	
#	else{
#print_r(error_get_last());
#$error = error_get_last();
		#echo "Not sent error:".$error["message"];
#	}
#}
#else{
#	die('Data Lost');
#}
?>



<?php
if(isset($_POST['submit']))
{
	// require_once '/wp-content/themes/theme48706/book-an-appointment/PHPMailer-master/PHPMailerAutoload.php';
	// require_once '/wp-content/themes/theme48706/book-an-appointment/PHPMailer-master/class.phpmailer.php';
	require_once($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/theme48706/book-an-appointment/PHPMailer-master/PHPMailerAutoload.php');
	require_once($_SERVER['DOCUMENT_ROOT'].'/wp-content/themes/theme48706/book-an-appointment/PHPMailer-master/class.phpmailer.php');

	$mail = new PHPMailer;

	// $mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.suryahospitals.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	if ($_POST['city'] == "mumbai" || $_POST['city'] == "Mumbai")
	{
		$mail->Username = 'opd.mumbai@suryahospitals.com';                 // SMTP username
		$mail->Password = 'Surya@123'; 
		//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 26;                                    // TCP port to connect to
		$mail->setFrom('opd.pune@suryahospitals.com', 'Surya');
		$mail->addAddress(''.$_POST['user_mail']);               // Name is optional
		$mail->addAddress('opd.mumbai@suryahospitals.com');               // Name is Optional
		$mail->addAddress('info@suryahospitals.com');
		$to = 'opd.mumbai@suryahospitals.com';
	}

	if ($_POST['city'] == "pune" || $_POST['city'] == "Pune")
	{
		// die("Error. 61.Under maintainance. Please try again after some time`");
		$mail->Username = 'opd.pune@suryahospitals.com';                 // SMTP username
		$mail->Password = 'Surya@123';                           					// SMTP password		
		//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 26;                                    // TCP port to connect to
		$mail->setFrom('opd.pune@suryahospitals.com', 'Surya');
		$mail->addAddress(''.$_POST['user_mail']);               // Name is optional
		$mail->addAddress('opd.pune@suryahospitals.com');               // Name is Optional
		$mail->addAddress('info@suryahospitals.com');
		$to = 'opd.pune@suryahospitals.com';
	}
	else
	{
		echo "";
	}



	// $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
	// $mail->addReplyTo('info@example.com', 'Information');
	// $mail->addCC('cc@example.com');
	// $mail->addBCC('bcc@example.com');

	// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	// $mail->isHTML(true);                                  // Set email format to HTML


	$middle = strtotime($_POST['date']);             // returns bool(false)

	$new_date = date('d-m-Y', $middle);

	$mail->Subject = 'Subject: suryahospitals.com - Book My Appointment: For - ' . $_POST['doctor'].' on Date: '.$new_date ;
	$greeting = "Hi, ".$_POST['user_name']."<br/><br/>Thank you for your Enquiry.<br/><br/>We will confirm your booking shortly. Please DO NOT reply to this email. Below is copy of message you submitted.<br/><hr><br/>";

	$end = "<br/><hr><br/>Thank You<br/><br/>Team,<br/>Surya Hospitals<br/>suryahospitals.com";
	$mail->Body    = "".$greeting."Name: ".$_POST['user_name']."<br/>Contact Number: ".$_POST['user_number']."<br/>Email: ".$_POST['user_mail']."<br/>Date of Appointment: ".$new_date."<br/>City: ".$_POST['city']."<br/>Speciality: ".$_POST['speciality']."<br/>Doctor: ".$_POST['doctor']."<br/>Sub-speciality: ".ucwords($_POST['sub_speciality'])."<br/>Query: ".$_POST['message']."<br/><br/>".$end;
	$body = "".$greeting."Name: ".$_POST['user_name']."<br/>Contact Number: ".$_POST['user_number']."<br/>Email: ".$_POST['user_mail']."<br/>Date of Appointment: ".$new_date."<br/>City: ".$_POST['city']."<br/>Speciality: ".$_POST['speciality']."<br/>Doctor: ".$_POST['doctor']."<br/>Sub-speciality: ".ucwords($_POST['sub_speciality'])."<br/>Query: ".$_POST['message']."<br/><br/>".$end;
	
	$mail->AltBody = "Name: ".$_POST['user_name']."<br/>Contact Number: ".$_POST['user_number']."<br/>Email: ".$_POST['user_mail']."<br/>Date of Appointment: ".$_POST['date']."<br/>City: ".$_POST['city']."<br/>Speciality: ".$_POST['speciality']."<br/>Doctor: ".$_POST['doctor']."<br/>Sub-speciality: ".ucwords($_POST['sub_speciality'])."<br/>Query: ".$_POST['message'];

	$header = "From:".$_POST['user_mail']." <".$_POST['user_name']."> \r\n";
	$header .= "MIME-Version: 1.0\r\n";
	$header .= "Content-type: text/html\r\n";
	if(mail($to,'Subject: suryahospitals.com - Book My Appointment: For - ' . $_POST['doctor'].' on Date: '.$new_date,$greeting,$header)){
		echo "<script>window.location.href='/suryafinal/thank-you'; </script>";
	}else{
		echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
	if(mail('info@suryahospitals.com','Subject: suryahospitals.com - Book My Appointment: For - ' . $_POST['doctor'].' on Date: '.$new_date,$body,$header)){
		echo "<script>window.location.href='/suryafinal/thank-you'; </script>";
	}else{
		echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	}
	
	/*if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo "<script>window.location.href='/suryafinal/thank-you'; </script>";
	}*/
}