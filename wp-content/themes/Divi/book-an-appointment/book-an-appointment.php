<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 /* Template Name: Book An Appointment */ ?>
<?php 
    
    $dbhost = "localhost";
    $dbname = "u787437357_suryahos_wp";
    $dbuser = "u787437357_suryahos_wp";
    $dbpass = "I0G**3n$0Dq";
    $db = "";

    if (mysqli_connect($dbhost, $dbuser, $dbpass,$dbname))
    {
        //echo "Success";
        $db = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
        
    }
    else
    {
        die();
    }

    $sql = "SELECT * FROM `xscustom_city`";
 		
?>
<?php  
/*if($_SESSION['security_code'] != $_POST['security_code'] && !empty($_SESSION['security_code'] ))
    {
    $errors .= "\n Invalid captcha code!";
    }*/
?>


<?php get_header(); ?>

<script>
function filter(city) {
    if (city == "") {
        document.getElementById("pedi").innerHTML = "";
        document.getElementById("pedi").disabled = true;   
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("pedi").disabled = false;   
                document.getElementById("pedi").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","<?php echo get_template_directory_uri(); ?>/book-an-appointment/book_appointment_filtering.php?city="+city, true);
        xmlhttp.send();
    }
}

function filter2(speciality,city) {
    if (speciality == "" || city == "") {
        document.getElementById("sub_spec").innerHTML = "";
        document.getElementById("pedi").disabled = true;   
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("sub_spec").disabled = false;   
                document.getElementById("sub_spec").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","<?php echo get_template_directory_uri(); ?>/book-an-appointment/getSubSpeciality.php?speciality="+speciality+"&city="+city,true);
        xmlhttp.send();
    }   
}

function filter3(speciality,subSpeciality,city) {
    if (subSpeciality == "" || city == "" || speciality == "") {
        document.getElementById("sub_spec").innerHTML = "";
        document.getElementById("pedi").disabled = true;   
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("docs").disabled = false;   
                document.getElementById("docs").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","<?php echo get_template_directory_uri(); ?>/book-an-appointment/getDoctors.php?speciality="+speciality+"&subSpeciality="+subSpeciality+"&city="+city,true);
        xmlhttp.send();
    }   
}
</script>
<style type="text/css">
    #name, #mobile, #email, #date
    {
            margin-top:10px;
            height: 15px;
        	color:#333 !important;
            border-radius: 4px;
    }

    @media (max-width: 767px)
    {
    	#name, #mobile, #email, #date
    	{
    		height: 30px;
    	}
    }
    #date
    {
        margin-bottom: 10px;
        padding:8px;
    }
}     
</style>

<div class="page-form">
               
				<form action="<?php echo get_template_directory_uri(); ?>/book-an-appointment/sendemail.php" method="POST" >
					<div>
                        <input type="text" id="name" name="user_name" class="span6" placeholder="Full Name*" required data-validation-required-message="Please enter your name.">
                    </div>

                    <div>
                        <input type="text" class="span6" class="pm-form-textfield" id="mobile" name="user_number" placeholder="Phone Number*" required data-validation-required-message="Please enter your phone number.">
                    </div>
                    
                    <div>  
                        <input type="email" class="span6" id="email" name="user_mail" placeholder="Email*" required data-validation-required-message="Please enter your email address.">
                    </div>

                    <div>
                        <input type="text" onfocus="(this.type='date')" placeholder="Enter preferred date of appointment*" id="date" name="date" class="span6" required ata-validation-required-message="Please enter your preferred appointment date.">
                    </div>
                    
                    <div>
                        <select onchange="filter(this.value)" class="span6" name="city" id="city">
                            <option>-- Select City --</option>
                            <?php if($cities = mysqli_query($db,$sql)):foreach ($cities as $city): ?>
                                <option value="<?php echo $city['name']; ?>"><?php echo $city['name']; ?></option>
                            <?php endforeach; endif;?>
                        </select>
                    </div>

                    <div>
                        <select id="pedi" onchange="filter2(this.value, document.getElementById('city').value);" class="span6" name="speciality" disabled>
                            <option>-- Select Speciality --</option>
                        </select>
                    </div>

                    <div>
                        <select id="sub_spec" onchange="filter3(document.getElementById('pedi').value, this.value, document.getElementById('city').value)" class="span6" name="sub_speciality" disabled>
                            <option>-- Select Sub Speciality --</option>
                        </select>
                    </div>

                    <div>
                        <select  id="docs"  class="span6" name="doctor" disabled>
                            <option>-- Select Doctor --</option>
                        </select>
                    </div>

                    <div>
                    
                        <textarea rows="5"  class="span6" id="message" name="message" placeholder="Message*" required data-validation-required-message="Please enter your Message" maxlength="10000" class="resize:none"></textarea>
                        
                    </div>
                	<div>
                    	<h4>Security Code:
                        <img src="<?php echo get_template_directory_uri(); ?>/book-an-appointment/CaptchaSecurityImages.php?width=125&height=50&characters=5" /></h4>
                        <div class="padding-top:2px;"><input class="pm_s_security_code pm-form-textfield" required placeholder="Enter captcha" name="security_code" type="text" id="security_code" maxlength="5" /></div>
                    </div>
                    <br/>
                    <div class="col-lg-12 pm-center">
                    <button type="submit" class="pm-form-submit-btn" value="Submit" name='submit' style="padding:10px;background:#315d87;color:white;border-radius: 5px;border:none" > Submit </button>
                    </div>
				</form>
<?php
$drname = $_GET['drname'];
if( isset($drname) ){
	global $wpdb;
	$query = "SELECT * FROM `xscustom_doctors` WHERE `name` = '$drname'";
	$row = $wpdb->get_row( $query , 'ARRAY_A' );
}
?>
<?php get_footer(); ?>
<?php if( count($row) > 0 ){ ?>
	<script>
		/*jQuery("#city").html('<option><?php echo $row['city']?></option>');*/
		jQuery("#city").val('<?php echo $row['city']?>');
		jQuery("#pedi").html('<option><?php echo $row['speciality']?></option>').removeAttr("disabled");
		jQuery("#sub_spec").html('<option><?php echo $row['sub_speciality']?></option>').removeAttr("disabled");
		jQuery("#docs").html('<option><?php echo $row['name']?></option>').removeAttr("disabled");
	</script>
<?php } ?>