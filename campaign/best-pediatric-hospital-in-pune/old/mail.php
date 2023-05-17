<?php
    if(isset($_POST['fname'])){
           $fname=$_POST['fname'];
        }
       if(isset($_POST['email'])){
           $email=$_POST['email'];
        }
 
        
        
        
         if(isset($_POST['contact'])){
           $contact=$_POST['contact'];
        } 
       
           if(isset($_POST['courname'])){
           $courname=$_POST['courname'];
        }
         
        
           if(isset($_POST['rollno'])){
           $rollno=$_POST['rollno'];
        }
           if(isset($_POST['allrank'])){
           $allrank=$_POST['allrank'];
        }
           if(isset($_POST['category'])){
           $category=$_POST['category'];
        }
           if(isset($_POST['neetmark'])){
           $neetmark=$_POST['neetmark'];
        }
      
 
       $to = "nidhi.kushwaha24@gmail.com,akansha@hashtagit.in,aglobals@yahoo.com";
        
  
         $subject = "Santosh PG Courses Enquiry";
         
         $message = "<h4>Santosh PG Courses Enquiry</h4>
                    <p><b> Name: </b>".$fname."</p>
                    
                    <p><b>Email ID: </b>".$email."</p>
                  
                       <p><b>Mobile No.: </b>".$contact."</p>
                    
                     
                        <p><b>Enquired Course Name: </b>".$courname."</p>
                        
                         <p><b>NEET Roll No: </b>".$rollno."</p>
                               <p><b>All India Rank: </b>".$allrank."</p>
                                <p><b>Category: </b>".$category."</p>
                                 <p><b>NEET Marks: </b>".$neetmark."</p>
                                  
                                  
                   
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
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Thankyou for submitting your query. We shall contact you shortly..!');
            window.location.href='https://santosh.ac.in/admission/pg-thank-you.php';
            </script>");
           /* echo 'Thankyou for submitting your query. We shall contact you shortly!';
            die; */
        }else {
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('Message failed to send..!');
            window.location.href='https://santosh.ac.in/admission/pg-thank-you.php';
            </script>"); 
           /* echo '*Message failed to send'; 
            die; */
        }
        
    
 
    
    
    
?>