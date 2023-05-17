<?php /* Template Name: Pregnancy Fest */ ?>



<?php get_header(); ?>


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

    .block-images
    {
        margin-bottom:30px;
    }
    
}     
</style>


<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="page-fullwidth.php" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
						<?php get_template_part("static/static-title"); ?>
					</div>
				</div>
				<br/>
                <div class="row">
                    <div class="span12">
                        <img class="span6" src="http://suryahospitals.com/wp-content/uploads/2017/09/670x441_post.jpg">
                    </div>
                </div>
                <br/>
                <div class="span7 pull-left">
                    <p align="justify">
                        <h3>Dear Parents To Be, </h3>
                    </p>
                    <p align="justify">
                        The most eventful, informative and entertaining day long fest for expecting parents is just around the corner. Come 7th Oct 2017, Surya hospitals, Pune will turn into a venue for a one of it’s kind <strong>PREGNANCY CARNIVAL FEST</strong>. 
                    </p>
                    <p align="justify">
                        Aimed at celebrating parenthood, Pregnancy Carnival invites couples to attend insightful sessions on important aspects like Labour management, Diet, Lactation, Exercise during pregnancy, Role of Father. But this is not all. The carnival also has a range of Happy Events for couples such as Pampering Sessions, Free Portraits, tattooing, dancing, banquet etc that makes the day truly infotaining unlike any other.
                    </p>

                    <!-- <p align="justify">
                        <h4>Schedule:</h4>
                        <ul style="list-style-type:square">
                            <strong><li>10:00 - 10:30am:- Registration &amp; breakfast</li></strong><br>
                            <strong><li>10:30 - 12:30pm:- Expert talks with Dr Sonali Shivlani on Diet/Labour/Exercise</li></strong><br>
                            <strong><li>12:30 - 01:15pm:- Surya &amp; Lifecell Talk</li></strong><br>
                            <strong><li>01:15 - 02:00pm:- Lunch</li></strong><br>
                            <strong><li>02:00 - 03:00pm:- Doctors Panel Discussion</li></strong><br>
                            <strong><li>03:00 - 04:00pm:- Role of father &amp; parenting</li></strong><br>
                            <strong><li>04:00 - 05:00pm:- Stalls</li></strong><br>
                        </ul>
                    </p> -->

                </div>
                <div class="span4 pull-right">
                    <h3>For registration, kindly fill the online form.</h3>
    				<form action="<?php echo "/wp-content/themes/theme48706/pregnancy/mail.php"; ?>" method="POST" >
    					<div>
                            <input type="text" class="span4" id="name" name="user_name" placeholder="Full Name*" required data-validation-required-message="Please enter your name.">
                        </div>

                        <div>  
                            <input type="email" id="email" class="span4" name="user_mail" placeholder="Email*" required data-validation-required-message="Please enter your email address.">
                        </div>
                        
                        <div>
                            <input type="text" class="span4" id="name" name="user_number" placeholder="Contact Number*" required data-validation-required-message="Please enter your contact number.">
                        </div>

                        <div>
                            <input type="text" onfocus="(this.type='date')" class="span4" placeholder="Expected date of delivery*" id="date" name="date" required data-validation-required-message="Please enter your preferred appointment date.">
                        </div>

                        <br/>
                        <div class="col-lg-12 pm-center">
                        <button type="submit" class="pm-form-submit-btn" value="Submit" name='submit' style="padding:10px;background:#315d87;color:white;border-radius: 5px;border:none" > Submit </button>
                        </div>
    				</form>
                </div>  
            </div>
                <div class="row">
                	<br/>
                    <div class="col-md-12 text-center">
                    	<p>
                    		Surya Mother &amp; Child Superspeciality Hospital<br/>
							Sr. No. 8, Bhujbal Chowk,<br/>
							Near Wakad Octroi Naka,<br/>
							Hinjewadi Fly Bridge, Wakad,<br/>
							Pune - 411057<br/>
                    	</p>
                        <h3><strong>Gallery</strong></h3><br/>
                    </div>
                    <div class="col-md-12">
                        <img class="span3 block-images" src="http://suryahospitals.com/wp-content/uploads/2017/09/1.jpg">
                        <img class="span3 block-images" src="http://suryahospitals.com/wp-content/uploads/2017/09/2.jpg">
                        <img class="span3 block-images" src="http://suryahospitals.com/wp-content/uploads/2017/09/3.jpg">
                        <img class="span3 block-images" src="http://suryahospitals.com/wp-content/uploads/2017/09/4.jpg">
                    </div>

                    <div class="col-md-12">
                        <img class="span3 block-images" src="http://suryahospitals.com/wp-content/uploads/2017/09/5.jpg">
                        <img class="span3 block-images" src="http://suryahospitals.com/wp-content/uploads/2017/09/6.jpg">
                        <img class="span3 block-images" src="http://suryahospitals.com/wp-content/uploads/2017/09/7.jpg">
                        <img class="span3 block-images" src="http://suryahospitals.com/wp-content/uploads/2017/09/8.jpg">
                    </div>

                    <div class="col-md-12">
                        <img class="span3 block-images" src="http://suryahospitals.com/wp-content/uploads/2017/10/9.jpg">
                        <img class="span3 block-images" src="http://suryahospitals.com/wp-content/uploads/2017/10/10.jpg">
                        <img class="span3 block-images" src="http://suryahospitals.com/wp-content/uploads/2017/10/11.jpg">
                        <img class="span3 block-images" src="http://suryahospitals.com/wp-content/uploads/2017/10/12.jpg">
                    </div>
                </div>
		</div>
	</div>
</div>

<?php get_footer(); ?>