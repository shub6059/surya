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
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-90324378-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-90324378-1');
</script>
  
  <!-- Global site tag (gtag.js) - Google Ads: 719377081 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-719377081"></script>
<script>
window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'AW-719377081');
</script>


</head>
<body>


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
								<span class="text-lft-hd">Admission Enquiry - MBBS
							</span><span class="text-lft-hd1"> <br>  for UG NEET 2019 Qualifiers</span>
							</div>

							<div class="row">

						<!--		<h5 class="text-lft-hd-grey">-->
						<!--REQUEST INFORMATION</h5>-->
							<div class="row left-form">

		
                        <form method="POST" id="cform">
								<div class="form-eq">
									<!-- <input type="text" name="name" class="form-in" placeholder="First Name"> -->
									<input id="name" name="name" type="text" placeholder="First Name" title="Enter alphabets only" class="form-in" pattern="[A-Za-z]{1,15}" maxlength="50" size="30" required >
                                    <input type="hidden" value="" class="ProspectId" name="ProspectId">
								</div>
									<div class="form-eq">
									<input type="text" name="last_name" class="form-in" placeholder="Last Name">
								</div>
								<div class="form-eq">
									<input type="text" name="address" class="form-in" placeholder="Address">
								</div>
								<div class="form-eq">
									<input name="mobile" type="text" id="mobile" placeholder="Phone" class="form-in" onkeypress="return isNumberKey(event) " minlength="10" maxlength="10" required>
									<!-- <input type="text" name="phone" class="form-in" placeholder="Phone"> -->
								</div>
								<div class="form-eq">
									   <input id="email" name="email" type="email" placeholder="Email" title="Enter alphabets only" class="form-in" >
									   
									   
									   	<div class="form-eq">
									   <input id="roll" name="roll" type="text" placeholder="NEET Roll No." title="Enter alphabets only" class="form-in" onkeypress="return isNumberKey(event) ">
							
								</div>
									<div class="form-eq">
									   <input id="score" name="score" type="text" placeholder="NEET Score" title="Enter alphabets only" class="form-in" onkeypress="return isNumberKey(event) ">
							
								</div>
								<!-- 	<input type="text" name="email" class="form-in"  placeholder="Email"> -->
								</div>
								<!--<div class="form-eq">-->
								<!--<select class="form-in" name="college" id="groups">-->
							 <!--   <option value=''>Colleges</option>-->
							 <!--   <option value='Santosh Medical College'>Santosh Medical College</option>-->
							 <!-- <select>-->
								<!--</div>-->
							<!--	<div class="form-eq">-->
							<!--<select class="form-in" name="courses" id="sub_groups" required>-->
							<!--    <option data-group='' value=''> Medical Courses</option>-->
							<!--    <option data-group='Santosh Medical College' value='' class="drop-head">UG DEGREE</option>-->
							<!--    <option data-group='Santosh Medical College' value='M.B.B.S (Bachelor of Medicine &amp; Bachelor of Surgery)'>M.B.B.S (Bachelor of Medicine &amp; Bachelor of Surgery)</option>-->
       <!--                       <option data-group='Santosh Medical College' value='' class="drop-head">PG DEGREE</option>-->
							<!--    <option data-group='Santosh Medical College' value='M.D. General Medicine'>M.D. General Medicine</option>-->
							<!--    <option data-group='Santosh Medical College' value='M.D. Paediatrics'>M.D. Paediatrics</option>-->
							<!--    <option data-group='Santosh Medical College' value='M.D. Anaesthesiology'>M.D. Anaesthesiology</option>-->
							<!--    <option data-group='Santosh Medical College' value='M.D. T.B. &amp; Chest Diseases'>M.D. T.B. &amp; Chest Diseases</option>-->
							<!--    <option data-group='Santosh Medical College' value='M.S. Obstetrics &amp; Gynaecology'>M.S. Obstetrics &amp; Gynaecology</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.D. Psychiatry'>M.D. Psychiatry</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.D. Biochemistry'>M.D. Biochemistry</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.D. Pathology'>M.D. Pathology</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.D. Microbiology'>M.D. Microbiology</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.D. Pharmacology'>M.D. Pharmacology</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.D. Community Medicine'>M.D. Community Medicine</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.S. General Surgery'>M.S. General Surgery</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.S. Orthopaedics'>M.S. Orthopaedics</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.S. Ophthalmology'>M.S. Ophthalmology</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.Sc. (Medical Microbiology)'>M.Sc. (Medical Microbiology)</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.Sc (Medical Physiology)'>M.Sc (Medical Physiology)</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.Sc.(Medical Biochemistry)'>M.Sc.(Medical Biochemistry)</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.S. ENT'>M.S. ENT</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.Sc (Medical Biotechnology)'>M.Sc (Medical Biotechnology)</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.Sc. (Medical Anatomy)'>M.Sc. (Medical Anatomy)</option>-->
							<!--     <option data-group='Santosh Medical College' value='M.D. Anatomy'>M.D. Anatomy</option>-->
							<!--	 <option data-group='Santosh Medical College' value=''class="drop-head"><b>PG DIPLOMA</b></option>-->
							<!--	 <option data-group='Santosh Medical College' value='Diploma in Orthopaedics (D.Ortho)'>Diploma in Orthopaedics (D.Ortho)</option>-->
							<!--	 <option data-group='Santosh Medical College' value='Diploma in Obstetrics &amp; Gynaecology (DGO)'>Diploma in Obstetrics &amp; Gynaecology (DGO)</option>-->
							<!--	 <option data-group='Santosh Medical College' value='Diploma in Tuberculosis &amp; Chest Diseases (DTCD)'>Diploma in Tuberculosis &amp; Chest Diseases (DTCD)</option>-->
							<!--	 <option data-group='Santosh Medical College' value='Diploma in Psychological Medicine (DPM)'>Diploma in Psychological Medicine (DPM)</option>-->
							<!--	 <option data-group='Santosh Medical College' value='Diploma in Anaesthesia (DA)'>Diploma in Anaesthesia (DA)</option>-->
							<!--	 <option data-group='medical' value='>Diploma in Clinical Pathology (DCP)'>Diploma in Clinical Pathology (DCP)</option>-->
							<!--	 <option data-group='Santosh Medical College' value='Diploma in Public Health (D.P.H.)'>Diploma in Public Health (D.P.H.)</option>-->
							<!--	 <option data-group='Santosh Medical College' value='Diploma in Child Health (DCH)'>Diploma in Child Health (DCH)</option>-->
							<!--	 <option data-group='Santosh Medical College' value='Diploma in Ophthalmology (DO)'>Diploma in Ophthalmology (DO)</option>-->
							<!-- <option data-group='Santosh Medical College' value='Diploma in Oto–Rhino-Laryngology (DLO)'>Diploma in Oto–Rhino-Laryngology (DLO)</option>-->

							<!--  <option data-group='Santosh Medical College' value='' class="drop-head">DOCTORATE</option>-->
							<!--   <option data-group='Santosh Medical College' value='Anatomy'>Anatomy</option>-->
							<!--	 <option data-group='Santosh Medical College' value='Physiology'>Physiology</option>-->
							<!--	 <option data-group='Santosh Medical College' value='Biochemistry'>Biochemistry</option>-->
							<!-- <option data-group='Santosh Medical College' value='Clinical Psychology'>Clinical Psychology</option>-->
							<!--    <option data-group='Santosh Medical College' value='Community Medicine'>Community Medicine</option>-->
							<!--	 <option data-group='Santosh Medical College' value='Microbiology'>Microbiology</option>-->
							<!--	 <option data-group='Santosh Medical College' value='TB &amp; Chest Diseases'>TB &amp; Chest Diseases</option>-->
							<!-- <option data-group='Santosh Medical College' value='Obstetrics and Gynaecology'>Obstetrics and Gynaecology</option>-->
							<!-- 	 <option data-group='Santosh Medical College' value='Hematopath (Pathology Dept)'>Hematopath (Pathology Dept)</option>-->
							<!-- <option data-group='Santosh Medical College' value='Pharmacology'>Pharmacology</option>-->

						    
							<!--<select>-->
							<!--	</div>-->
								<div class="form-eq-sub">
								<!-- <input type="submit" name="" class="form-in-sub"></input> -->
								 <input  name="submit" type="submit" value="Submit" class="form-in-sub" id="submit1">
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
		   <!--   <marquee style="color:red;"> <b style="color:red; font-size:18px;">Note-</b>UG NEET Qualifier,our BDS course Fees is <strong> Rs 3 Lakh/ annum</strong>  ( No security bond, No Bank Guarantee, Hostel available &amp; Optional), Admission through Central Government Counselling (Deemed Universities).</marquee> -->
			<div class="container-fluid right-header">
				<div class="row headersec-right" style="">
					<ul>
  						<li><a><div class="row">
							<div class="col-md-4"> <img src="images/award-01.png"  class="header-icon"></div>
							<div class="col-md-8 head-font">
						NAAC Accredited  <br>Premier Deemed<br>  to be University
							</div>
						</div>
						</a></li>
							
 						 <li><a href="https://goo.gl/maps/NjG88x5sDt2DVRbH9"><div class="row">
							<div class="col-md-4"> <img src="images/location.png" class="header-icon"></div>
							<div class="col-md-8 head-font">
						Get<br> Direction to<br> the University
							</div>
						</div>
						</a></li>
						<li><a href="tel:7838554401/04"><div class="row">
							<div class="col-md-4"> <img src="images/contact1.png" class="header-icon"></div>
							<div class="col-md-8 head-font">
						Call Us <br>On <br> 7838554401/04/09
							</div>
						</div>
						</a></li>
	  				
 					</ul>
				</div>
			</div>
			<div class="container-fluid right-about">
				<div class="row">
						<h4 class="about-head"><strong>ABOUT </strong> SANTOSH</h4>
						<div><img src="images/line.png"></div>
						<div class="content">The Santosh Medical/Dental College and Hospital is a premier educational institution for medicine and dentistry established in 1995 in Ghaziabad. It is a NAAC  Accredited Premier Deemed to be University in NCR-Delhi offering UG, PG (Degree/Diploma) and Ph.D. courses in Medical sciences. The College is situated at National Highway-24, Well connected via Metro, Rail & Road Transport and is a true academic powerhouse shaping the future of Medical Sciences. Apart from adopting innovative teaching methods, Santosh University has also developed an innovative curriculum. It uses a blend of classroom, practical and community engagement to promote holistic learning.  You will also get Comprehensive Learning & Clinical Training associated with 600+ bedded teaching Hospital and Medical College. </div>
				
			</div>
			<div style="padding-top: 30px;">
				<h4 class="about-head"><strong>WHAT </strong> DIFFERENTIATES US ?</h4>
				<div><img src="images/line.png" ></div>

				<div class="row">
					<div class="col-md-2 zoom" style="padding-left: 0px;padding-right: 5px;">
					<img src="images/mbbs/01.jpg" class="img-responsive" style="padding-top: 20px;">
					</div>
					<div class="col-md-2 zoom" style="padding-left: 0px;padding-right: 5px;">
					<img src="images/mbbs/02.jpg" class="img-responsive" style="padding-top: 20px;">
					</div>
					<div class="col-md-2 zoom" style="padding-left: 0px;padding-right: 5px;">
					<img src="images/mbbs/03.jpg" class="img-responsive" style="padding-top: 20px;">
					</div>
					<div class="col-md-2 zoom" style="padding-left: 0px;padding-right: 5px;">
					<img src="images/mbbs/04.jpg" class="img-responsive" style="padding-top: 20px;">
					</div>
					<div class="col-md-2 zoom" style="padding-left: 0px;padding-right: 5px;">
					<img src="images/mbbs/05.jpg" class="img-responsive" style="    padding-top: 20px;">
					</div>
					<div class="col-md-2 zoom" style="padding-left: 0px;padding-right: 5px;">
					<img src="images/mbbs/06.jpg" class="img-responsive" style="    padding-top: 20px;">
					</div>
					
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
            url: 'mail-mbbs.php',
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
