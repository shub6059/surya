<!DOCTYPE html>
<html lang="en">
<head>
  <title>Santosh</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Global site tag (gtag.js) - Google Ads: 719377081 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-719377081"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-719377081');
</script>


</head>
<style type="text/css">
  /* Style the header */


/* Page content */
.content {
  padding: 16px;
}

/* The sticky class is added to the header with JS when it reaches its scroll position */
.sticky {
  position: fixed;
  top: 0;
  width: 100%
}

/* Add some top padding to the page content to prevent sudden quick movement (as the header gets a new position at the top of the page (position:fixed and top:0) */
.sticky + .content {
  padding-top: 102px;
}

.float{
  position:fixed;
  width:60px;
  height:60px;
  bottom:40px;
  right:40px;
  background-color:#25d366;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  font-size:30px;
  box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
  margin-top:16px;
}
</style>
<body>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/917838554404" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<a href="https://api.whatsapp.com/send?phone=15551234567">Send Message</a>

	<div class="container-fluid">

		<div class="row">
				<section>
					<div class="col-md-4 left-backimg">
						<div class="container-fluid left-head">
							<div class="row">
								<img src="images/logo-santosh.png
" class="logo text-center">
							</div>
							<div class="row heading-frm">
								<span class="text-lft-hd">Admission Enquiry 
							</span><span class="text-lft-hd1"> <br>  for PG NEET 2020 Qualifiers</span>
							</div>

							<div class="row">

						<!--		<h5 class="text-lft-hd-grey">-->
						<!--REQUEST INFORMATION</h5>-->
							<div class="row left-form">

		
                         <form action="mail.php" method="post">
								<div class="form-eq">
							
									<input id="name" name="fname" type="text" placeholder=" Name" title="Enter alphabets only" class="form-in" pattern="[A-Za-z]{1,15}" maxlength="50" size="30" required >
                                    <input type="hidden" value="" class="ProspectId" name="ProspectId">
								</div>
								<!--	<div class="form-eq">-->
								<!--	<input type="text" name="lname" class="form-in" placeholder="Last Name">-->
								<!--</div>-->
								<!--<div class="form-eq">-->
								<!--	<input type="text" name="address" class="form-in" placeholder="Address">-->
								<!--</div>-->
								<div class="form-eq">
									<input name="contact" type="text" id="mobile" placeholder="Phone" class="form-in" onkeypress="return isNumberKey(event) " minlength="10" maxlength="10" required>
									
								</div>
								<div class="form-eq">
									   <input id="email" name="email" type="email" placeholder="Email" title="Enter alphabets only" class="form-in" required>
							
								</div>
								<div class="form-eq">
									<input type="text" name="courname" class="form-in" placeholder="Enquired Course Name" required>
								</div>
							
									<div class="form-eq">
									   <input id="roll" name="rollno" type="text" placeholder="NEET Roll No." title="Enter alphabets only" class="form-in" onkeypress="return isNumberKey(event) " required>
							
								</div>
									<div class="form-eq">
									   <input id="score" name="neetmark" type="text" placeholder="NEET Score" title="Enter alphabets only" class="form-in" onkeypress="return isNumberKey(event) " required>
							
								</div>
								<div class="form-eq">
									   <input id="score" name="allrank" type="text" placeholder="All India Rank" title="Enter alphabets only" class="form-in" onkeypress="return isNumberKey(event) " required>
							
								</div>
								<div class="form-eq">
									   <input id="score" name="category" type="text" placeholder="Category - SC/ST/OBC/GEN " title="" class="form-in" required>
							
								</div>
								<!--<div class="form-eq">-->
								<!--<select class="form-in" name="college" id="groups">-->
							 <!--   <option value=''>Colleges</option>-->
							
							 <!--   <option value='Santosh Dental College'>Santosh Dental College</option>-->
						  <!--    <select>-->
								<!--</div>-->
								<!--<div class="form-eq">-->
								<!--<select class="form-in" name="courses" id="sub_groups" required>-->
							 <!--   <option data-group='' value=''> Dental Courses</option>-->
						  <!--   <option data-group='Santosh Dental College' value='' class="drop-head">UG DEGREE</option>-->
							 <!--<option data-group='Santosh Dental College' value='B.D.S'>B.D.S</option>-->
							 <!--	    <option data-group='Santosh Dental College' value='' class="drop-head">PG DEGREE</option>-->
							 <!--<option data-group='Santosh Dental College' value='M.D.S Periodontology'>M.D.S Periodontology</option>-->
							 <!--	 <option data-group='Santosh Dental College' value='M.D.S Oral &amp; Maxillofacial Surgery'>M.D.S Oral &amp; Maxillofacial Surgery</option>-->
							 <!--<option data-group='Santosh Dental College' value='M.D.S Conservative Dentistry &amp; Endodonti'>M.D.S Conservative Dentistry &amp; Endodontic</option>-->
							 <!-- <option data-group='Santosh Dental College' value=' M.D.S Orthodontics &amp; Dentofacial Orthopaedics'> M.D.S Orthodontics &amp; Dentofacial Orthopaedics</option>-->
							 <!-- 	 <option data-group='Santosh Dental College' value='M.D.S Prosthodontics &amp; Crown and Bridge'>M.D.S Prosthodontics &amp; Crown and Bridge</option>-->
							 <!-- <option data-group='Santosh Dental College' value='M.D.S Oral Pathology &amp; Microbiology'>M.D.S Oral Pathology &amp; Microbiology</option>-->
							 <!-- 	 <option data-group='Santosh Dental College' value='M.D.S Paediatrics and Preventive Dentistry'>M.D.S Paediatrics and Preventive Dentistry</option>-->
        <!--                        <option data-group='Santosh Dental College' value='' class="drop-head">DOCTORATE</option>-->
								<!-- <option data-group='Santosh Dental College' value='Maxillofacial Surgery'>Maxillofacial Surgery</option>-->
							 <!-- <option data-group='Santosh Dental College' value='Orthodontics &amp; Dentofacial Orthopaedics'>Orthodontics &amp; Dentofacial Orthopaedics</option>-->
							 <!-- 	 <option data-group='Santosh Dental College' value='Paediatric &amp; Preventive Dentistry'>Paediatric &amp; Preventive Dentistry</option>-->
					   <!--     	<select>-->
								<!--</div>-->
								<div class="form-eq-sub">
								<!-- <input type="submit" name="" class="form-in-sub"></input> -->
								  <input  name="submit" type="submit" value="Submit" class="form-in-sub" > 
								
								</div>
							</form>
							 <div id="feedbackAppBook"></div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
		<div class="col-md-8">
		     <marquee style="color:red;"> <b style="color:red; font-size:18px;">Note-</b> PG NEET Qualifiers, Scholarship opportunities (up to Rs 2,00,000 per annum) for Postgraduate students in Pre & Para clinical courses, Quarterly Mode of Payment of Fees Available</marquee>
			<div class="container-fluid right-header">
				<div class="row headersec-right" style="">
					<ul>
  						<li style="    margin-top: 16px;"><a><div class="row">
							<div class="col-md-4"> <img src="images/award-01.png"  class="header-icon"></div>
							<div class="col-md-8 head-font">
						NAAC Accredited  <br>Premier Deemed<br>  to be University
							</div>
						</div>
						</a></li>
							
 						 <li style="    margin-top: 16px;"><a href="https://goo.gl/maps/NjG88x5sDt2DVRbH9"><div class="row">
							<div class="col-md-4"> <img src="images/location.png" class="header-icon"></div>
							<div class="col-md-8 head-font">
						Get<br> Direction to<br> the University
							</div>
						</div>
						</a></li>
						<li><a href="tel:7838554401/04"><div class="row">
							<div class="col-md-4"> <img src="images/logo-25 (1).png" class="" style="    width: 80px;"></div>
							
						</div>
						</a></li>
	  				
 					</ul>
				</div>
			</div>
			<div class="container-fluid right-about">
				<div class="row">
						<h4 class="about-head"><strong>ABOUT </strong> SANTOSH</h4>
						<div><img src="images/line.png"></div>
						<div class="content">The Santosh Medical/Dental College and Hospital is a premier educational institution for medicine and dentistry established in 1995 in Ghaziabad. It is a NAAC  Accredited Premier Deemed to be University in NCR-Delhi offering UG, PG (Degree/Diploma) and Ph.D. courses in Medical sciences. The College is situated at National Highway-24, Well connected via Metro, Rail & Road Transport and is a true academic powerhouse shaping the future of Medical Sciences. Apart from adopting innovative teaching methods, Santosh Deemed to be University has also developed an innovative curriculum. It uses a blend of classroom, practical and community engagement to promote holistic learning.  You will also get Comprehensive Learning & Clinical Training associated with 600+ bedded teaching Hospital and Medical College.</div>
				
			</div>
				<div style="padding-top: 30px;">
			<!-- 	<h4 class="about-head"><strong>COUNSELING </strong>  PROCEDURE</h4>
				<div><img src="images/line.png" ></div>

				<div class="row">
					
			 <iframe src="https://www.youtube.com/embed/Xp4tL0kXAVw" allowfullscreen ></iframe>
				</div> -->
			<div class="row">
						<h4 class="about-head"><strong>COUNSELING </strong>  PROCEDURE</h4>
						<div><img src="images/line.png"></div>
<div class="col-md-2"></div>
<div class="col-md-8">
						<div class="content"><iframe src="https://www.youtube.com/embed/Xp4tL0kXAVw" allowfullscreen style="width:100%; height: 230px;"></iframe></div>
					</div>
						<div class="col-md-2"></div>
				
			</div>
			</div>
		</div>

</section>
	</div>
  
</div>






<script type="text/javascript">
$(function(){
    $('#groups').on('change', function(){
        var val = $(this).val();
        var sub = $('#sub_groups');
        if(val == '--All--') {
            $('#sub_groups').find('option').show();
        }
        else {
            sub.find('option').not(':first').hide();
            $('option', sub).filter(function(){
                if($(this).attr('data-group') == val){
                    $(this).show();
                }
            });
        }
        sub.val(0);
    });
});
</script>

 <SCRIPT language=Javascript>
      
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
     
   </SCRIPT>
   

<script type="text/javascript">
$(document).ready(function(){
    $(".close").click(function(){
        $("#myAlert").alert();
    });
});  
</script>
<script>
// for mobile nuber
$(document).on('input','#mobile',function(){
    var phone=$('#mobile').val();
   if(phone.indexOf('0')==0){
     alert('First number 0 not accepted!');
     $('#mobile').val('');
   }
   
});
</script> 
 <style>
    div#feedbackAppBook{
        color: #fff;
        font-weight:500;
        font-size: 22px;
        text-align: center;
      
       padding: 10px 96px 10px 10px;
    }
    

</style>
<script>
     $(document).ready(function(){
       
        $("#submit1").click(function(e){
        var name =$('#name').val();
        var mobile =$('#mobile').val();
        
        //alert(nameBA);
        if(name=='')
        {
             $("#name").focus(); 
             return false;
        }
        if(mobile=='')
        {
              $("#mobile").focus(); 
             return false;
        }
        if(!$('#mobile').val().match('[0-9]{10}'))  {
                alert("Please put 10 digit mobile number");
                return;
            } 
          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'mail.php',
            data: $('form').serialize(),
            success:function (result) {
             $('#feedbackAppBook').html(result);
             $('#cform')[0].reset();
              window.location.href='bds-thank-you.php';
            }
          });

        });

      }); 
</script>
</body>

</html>
