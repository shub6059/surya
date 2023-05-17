<?php
include_once("config.php");

if(isset($_POST['name']) && isset($_POST['last_name']) && isset($_POST['address']) && isset($_POST['mobile']) && isset($_POST['email']) && isset($_POST['college']) && isset($_POST['courses'])){

   $name=$_POST['name'];

   $last_name=$_POST['last_name'];

   $address=$_POST['address'];

   $mobile=$_POST['mobile'];

   $email=$_POST['email'];

    $college=$_POST['college'];
    
   $courses=$_POST['courses'];



      /* country */ 

    // $sql3= "SELECT country_name  From directory_country WHERE country_id = '".$country."' ";
    // $res3 = mysqli_query($conn, $sql3);
    // $row3 = mysqli_fetch_array($res3);
    // $con = $row3['country_name']; 

    // $sql= "SELECT default_name From directory_country_region WHERE region_id = '".$state."' ";
    // $res = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($res);
    // $st = $row['default_name']; 

 
  

$to = "nidhi.kushwaha24@gmail.com,anamika@hashtagit.in,akansha@hashtagit.in 
";

$subject = "Santosh MBBS Form Detail";

$message ="<h4> Form Details</h4>
 <table>
     <tr><td><b>First Name</b></td><td>".$name."</td></tr>
     <tr><td><b>Last Name</b></td><td>".$last_name."</td></tr>
     <tr><td><b>Address</b></td><td>".$address."</td></tr>
     <tr><td><b>Phone</b></td><td>".$mobile."</td></tr>
     <tr><td><b>Email</b></td><td>".$email."</td></tr>
      <tr><td><b>College</b></td><td>".$college."</td></tr>
       <tr><td><b>Courses</b></td><td>".$courses."</td></tr>
      
      </table>

";
      
  
// print_r($message);
// die();
$header = "From:admin@clarosalon.com\r\n";

$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) 
{
echo 'Thankyou for submitting your query. We shall contact you shortly!';

}else {
echo '*Message failed to send'; 

}


}else{
  echo '';
}
?>