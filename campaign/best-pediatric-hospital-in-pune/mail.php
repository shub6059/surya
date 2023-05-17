<?php
    if(isset($_POST['nameBA'])){
           $nameBA=$_POST['nameBA'];
        }
        if(isset($_POST['emailBA'])){
            $email=$_POST['emailBA'];
         }
   if(isset($_POST['mobileBA'])){
           $mobileBA=$_POST['mobileBA'];
        }
         if(isset($_POST['roll'])){
           $roll=$_POST['roll'];
        }
      if(isset($_POST['score'])){
           $score=$_POST['score'];
        }
          if(isset($_POST['course'])){
           $course=$_POST['course'];
        }
    
       $to = "akansha@hashtagit.in,admissioncell@santosh.ac.in,krishnapccs2007@gmail.com";
        
  
         $subject = " BDS Admission Detail";
         
         $message = "<h4>  Details</h4>
                    <p><b>Name: </b>".$nameBA."</p>
                    <p><b>Mobile: </b>".$mobileBA."</p>
                     <p><b>Email: </b>".$email."</p>
                    <p><b>Score </b>".$score."</p>
                    
                    <p><b>Course: </b>".$course."</p>
                   ";
                    // print_r(message);
                    // die();
          
         $header = "From:santosh@santosh.ac.in\r\n";
         //$header .= "Cc:admin@umkalhospital.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail($to,$subject,$message,$header);
         
         if( $retval == true ) 
          {
header('Location: thank-you.php');
            // echo 'Thankyou for submitting your query. We shall contact you shortly!';
            die;
         }else {
            echo '*Message failed to send'; 
            die;
         }
         die;
        //echo $feedback; die;
      ?>