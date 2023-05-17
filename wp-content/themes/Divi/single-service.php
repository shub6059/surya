<?php

/*
* Template Name: Service Page Template
*
*/


get_header();

if(get_field('custom_service_doctors')){

	$shortfield = get_field('custom_service_doctors');

}

?>
<style type="text/css">
.no-doctors {
    width: 100%;
}
p.service-cta {
    font-size: 20px!important;
    font-weight: 500!important;
}
.service-content a {
    color: #e63a6b!important;
}
.service-content strong {
    font-weight: 400;
}
.children-service-list {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
a.child-service {
    color: #e63a6b;
    font-size: 20px;
}
div.child-service {
    box-shadow: 0px 10px 24px 6px rgb(0 0 0 / 6%);
    margin: 15px 0;
    padding: 15px;
    border-radius: 6px;
    transition: 0.3s ease;
    width: calc(25% - 20px);
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
}
div.child-service:hover {
    box-shadow: 0 0 12px 6px rgb(230 58 107 / 19%);
}


.service-content {
    margin-top: 60px;
    margin-bottom: 60px;
}
.service-content p {
	color: #040404!important;
	font-size: 18px;
	font-weight: 300;
	line-height: 1.8em;
    padding-bottom: 15px!important;
}
.service-content li {
    color: #040404!important;
    font-size: 18px;
    font-weight: 300;
    line-height: 1.8em;
    
}
.service-content ul,.service-content ol{
	padding-left:35px;
    padding-bottom: 15px!important;
}
.service-content ul {
   list-style: square;
}
.service-content h2 {
	font-family: 'Poppins', Helvetica, Arial, Lucida, sans-serif;
	font-weight: 600;
	font-size: 26px;
	color: #e63a6b!important;
	line-height: 1.4em;
}

.doc-container {
	display: flex;
	flex-wrap: wrap;
	margin: 30px auto;
	justify-content: flex-start;
}

.main-service-page {
	max-width: 1240px;
	margin: 30px auto;
}

.doc-content {
	width: calc(20% - 15px);
	border-radius: 6px 6px 6px 6px;
	box-shadow: 0 0 10px 6px rgb(0 0 0 / 6%);
	padding: 10px;
	margin: 0 7.5px 30px 7.5px;
}

h2.doctor-name {
	color: #e63a6b;
	font-size: 16px;
	font-weight: 700;
}

.section-title {
	font-family: 'Poppins', Helvetica, Arial, Lucida, sans-serif;
	font-weight: 600;
	font-size: 36px;
	color: #e63a6b!important;
	line-height: 1.4em;
	text-align: center;
}


/*.doctor-info p {
	    font-size: 14px;
	    padding-bottom: 0;
	}*/

a.btn.btn-book-app {
	background: #e63a6b;
	padding: 8px 15px;
	width: 100%;
	display: block;
	text-align: center;
	color: #fff;
	font-weight: 700;
	font-size: 13px;
}

.doctor-info p {
	font-size: 13px;
	padding-bottom: 0;
	color: #636363;
}

img.img-responsive.doctor-pic.place-pic {
	height: 140px;
	object-fit: cover;
	width: 100%;
}

p.education {
	text-transform: uppercase;
	line-height: 1.5;
}

.doctor-info {
	margin: 10px 0;
}

p.designation {
	color: #e63a6b;
}

.no-doctors.hidden {
	display: none;
}


div.et_pb_section.et_pb_section_0 {
	background-image: url(https://suryahospitals.com/wp-content/uploads/2021/01/bf_20_tb_14-1.png), linear-gradient(122deg, #00a0e3 32%, #e63a6b 84%)!important;
	padding-top: 7vw;
	padding-bottom: 7vw;
}

.et_pb_section_0.section_has_divider.et_pb_bottom_divider .et_pb_bottom_inside_divider {
	background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMHZ3IiB2aWV3Qm94PSIwIDAgMTI4MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iI2ZmZmZmZiI+PHBhdGggZD0iTTAgMTQwaDEyODBDNTczLjA4IDE0MCAwIDAgMCAweiIgZmlsbC1vcGFjaXR5PSIuMyIvPjxwYXRoIGQ9Ik0wIDE0MGgxMjgwQzU3My4wOCAxNDAgMCAzMCAwIDMweiIgZmlsbC1vcGFjaXR5PSIuNSIvPjxwYXRoIGQ9Ik0wIDE0MGgxMjgwQzU3My4wOCAxNDAgMCA2MCAwIDYweiIvPjwvZz48L3N2Zz4=);
	background-size: 100% 10vw;
	bottom: 0;
	height: 10vw;
	z-index: 1;
	transform: rotateY( 180deg);
}

.et_pb_text_0 h1 {
	font-family: 'Poppins', Helvetica, Arial, Lucida, sans-serif;
	font-weight: 700;
	font-size: 70px;
	line-height: 1.2em;
}

button.city-filter {
	color: #ffffff!important;
	border-width: 0;
	border-color: #e63a6b;
	border-radius: 100px;
	font-size: 14px;
	font-weight: 600!important;
	text-transform: uppercase!important;
	background-color: #e63a6b;
	padding: 10px 15px;
	width: 100px;
	margin: 0 10px;
	cursor: pointer;
}

button.city-filter.active {
	background-image: linear-gradient( 25deg, #00a0e3 0%, #e63a6b 100%);
	box-shadow: 0px 1px 11px 6px rgb(230 58 107 / 28%);
}

.doc-filters {
	display: flex;
	justify-content: center;
	margin: 30px auto;
}

.doctor-content {
	margin: 30px 0;
}

hr.section-seperator {
	border: 0;
	border-bottom: 1px solid #e63a6b87;
	margin: 30px 0;
}
@media all and (min-width:991px) {
	.doctor-info {
		min-height: 160px;
	}
	.doc-filters>div {
		width: 260px;
		/* padding: 15px; */
		margin: 15px;
	}
}

@media all and (max-width:991px) {
	.doc-content {
		width: 100%;
	}
	.main-service-page {
		padding-left: 20px;
		padding-right: 20px;
	}
	.service-content p,.service-content li {
		font-size: 14px;
	}
    .service-content  {
        color: #040404!important;
        font-size: 18px;
        font-weight: 300;
        line-height: 1.8em;
    }
    .service-content ul,.service-content ol{
        padding-left:35px;
    }
    .service-content h2{
    font-size:24px;
    }
    div.child-service {
    
    width: 100%;
    }
}

@media all and (max-width:991px) and (min-width:480px) {
	.doc-content {
		width: calc(33.33% - 15px);
	}
}

@media all and (max-width:991px) {
	.et_pb_text_0 h1 {
		font-size: 32px;
	}
	.doc-filters>div {
		width: calc(50% - 10px);
	}
	.doc-filters {
		flex-wrap: wrap;
		justify-content: space-between!important;
	}
	.doc-filters select {
		font-size: 14px;
	}
}
</style>


<div class="et_pb_section et_pb_section_0 et_pb_with_background et_section_regular section_has_divider et_pb_bottom_divider">
	<div class="et_pb_row et_pb_row_0">
		<div class="et_pb_column et_pb_column_4_4 et_pb_column_0  et_pb_css_mix_blend_mode_passthrough et-last-child">
			<div class="et_pb_module et_pb_text et_pb_text_0  et_pb_text_align_center et_pb_bg_layout_dark">
				<div class="et_pb_text_inner"><h1><?php echo get_the_title(); ?></h1></div>
			</div> <!-- .et_pb_text -->
		</div> <!-- .et_pb_column -->
	</div> <!-- .et_pb_row -->
	<div class="et_pb_bottom_inside_divider" style=""></div>
</div>
        
<div class="main-service-page">
	<div class="service-content">
    	
        <?php
		
		$post_id = get_the_ID();
        $cus_depart = get_field('select_department');



        if(!empty($cus_depart)){
        	$term_obj_list = $cus_depart;
        }else{

        	$term_obj_list = get_the_terms( $post_id, 'service_department' );
        	
        	if(!empty($term_obj_list)){
        		$term_obj_list = $term_obj_list[0]->term_id;	
        	}else{
        		$term_obj_list = "";
        	}	

        }

        the_content();    
        /*echo '<p class="service-cta">To Book an Appointment <a href="/book-an-appointment">click here</a> or <a href="/contact-us">contact us</a></p>';*/
		
		

        if(!empty($term_obj_list)){

			$args = array(
              'post_type' => 'service',
              'order' => 'ASC',
              'posts_per_page'=> -1,
              'post__not_in' => array( $post_id ),
              'tax_query' => array(
		            array(
		                'taxonomy' => 'service_department',
		                'field'    => 'term_id',
		                'terms'    => $term_obj_list,
		            ),
		        ),
          	);

            $q = new WP_Query( $args );

            if ( $q->have_posts() ) {

             	echo '<div class="children-service-list">';
              	while ( $q->have_posts() ) {
                
	                $q->the_post();

	                echo '<div class="child-service"><a href="'.get_the_permalink().'"class="child-service">'.get_the_title().'</a></div>';
	            	
            	}
  			
  				echo '</div>';

            }
    
        }else{
        
        if($post->post_parent == 0){
        
        $q = new WP_Query(array(
'post_type' => 'service',
    'post_parent'       => $post->ID,                               
    'order'             => 'ASC',
    'posts_per_page'    => -1

));


if ( $q->have_posts() ) {

             	echo '<div class="children-service-list">';
              	while ( $q->have_posts() ) {
                
	                $q->the_post();

	                echo '<div class="child-service"><a href="'.get_the_permalink().'"class="child-service">'.get_the_title().'</a></div>';
	            	
            	}
  			
  				echo '</div>';

            }

        }
        
        }

        ?>
	</div> 
	 <h2 class="section-title">Book An Appointment</h2>
<?php echo do_shortcode( '[formidable id="1" title="quote"]' );?>
	<div class="doctor-content">
		<hr class="section-seperator">
        <h2 class="section-title">Our Specialists</h2>
        <p><?php //echo get_field('doctor_sec_description'); ?></p>
		<div class="doc-filters">
			<button class="city-filter" id="mumbai" data-city="mumbai">Mumbai</button>
	        <button class="city-filter" id="pune" data-city="pune">Pune</button>
	        <button class="city-filter" id="jaipur" data-city="jaipur">Jaipur</button>
		</div>
	<div class="doc-container">


		<?php

		if(!empty($shortfield)){

			echo do_shortcode($shortfield);
			
			echo '</div>';
			 
		}else{

			$docs_print = 0;

		/* Get Doctos List*/
        $get_doctor_list = array(
      		'post_type' => 'doctors',
      		'posts_per_page'=> -1,
      		'orderby'=>'publish_date','order' => 'ASC',
      		'meta_query'	=> array(
      			'relation' => 'AND',
      			array(
			            'key'     => 'priority',
			            'value'   => '1',
			    ),
				array(
					'key'		=> 'speciality',
					'compare'	=> 'LIKE',
					'value'		=> $post_id,
				),
			),
        );
        $the_query_doctor = new WP_Query( $get_doctor_list );
        if ( $the_query_doctor->have_posts() ) {
        	while ( $the_query_doctor->have_posts() ) {
                $the_query_doctor->the_post();
                $specialities = get_field('speciality');
              	$doc_city = get_the_terms( $the_query_doctor->ID, 'city' ); 
              	$prio = get_field('priority');     
          ?>
        <div class="doc-content<?php if($docs_print > 9){ echo ' hidden'; } ?>" data-date="<?php echo get_the_date( 'ymd' ); ?>"  doc-city="<?php echo $doc_city[0]->slug; ?>" data-date="<?php echo get_the_date( 'ymd' ); ?>" spec-id="<?php for($i=0;$i<count($specialities);$i++){if($i>0){ echo ','; } echo $specialities[$i]; } ?>" data-pri="<?php echo $prio; ?>" >
	        <div class="img-container">
	            <a href="<?php echo get_the_permalink(); ?>">
	            	<?php 
	            		if(has_post_thumbnail(get_the_ID())){
	            			$url = get_the_post_thumbnail_url( get_the_ID(), '250x250' );
	            			$class="doctor-pic main-pic";
	            		}else{
	            			$url = "http://style.anu.edu.au/_anu/4/images/placeholders/person.png";
	            			$class="doctor-pic place-pic";
	            		}
	            	?>
	            	<img src="<?php echo $url; ?>" alt="" class="img-responsive <?php echo $class; ?>">
	            </a>
	            <div class="hos-department"><?php ?></div>
	        </div>
	        <div class="doctor-info">
	          <h2 class="doctor-name"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
	          <p class="education"><?php echo get_field('qualification'); ?></p>
	          <p class="designation"><?php echo get_field('designation'); ?></p>    
	          <p class="designation"></p>
	          <p class="timing"><strong></strong> <?php if(!empty(get_field('opd_timing')) ){ echo get_field('opd_timing'); }else{ echo 'By Appointment'; } ?></p>
	        </div>
			<hr class="data-seperator">
			<div class="contact-details">
		        <!-- <a href="tel:+918956455150" class="btn btn-contact">Contact Hospital</a> -->
		        <a href="/book-an-appointment/?doc-id=<?php echo get_the_id(); ?>" class="btn btn-book-app"><span>Book Appointment</span></a>
		     </div>
		 </div>

	<?php $docs_print++;
	 } 
} 

/* Get Doctos List*/
        $get_doctor_list = array(
      		'post_type' => 'doctors',
      		'posts_per_page'=> -1,
      		'orderby'=>'publish_date','order' => 'ASC',
      		'posts_per_page'=> -1,
      		'meta_query'	=> array(
      			'relation' => 'AND',
			    array(
			            'key' => '_thumbnail_id',
			            'compare' => 'EXISTS'
			    ),
			    array(
			            'key'     => 'priority',
			            'value'   => '3',
			    ),
				array(
					'key'		=> 'speciality',
					'compare'	=> 'LIKE',
					'value'		=> $post_id,
				),
			),
        );
        $the_query_doctor = new WP_Query( $get_doctor_list );
        if ( $the_query_doctor->have_posts() ) {
        	while ( $the_query_doctor->have_posts() ) {
                $the_query_doctor->the_post();
                $specialities = get_field('speciality');
              	$doc_city = get_the_terms( $the_query_doctor->ID, 'city' );
              	$prio = get_field('priority');      
          ?>
        <div class="doc-content<?php if($docs_print > 9){ echo ' hidden'; } ?>" data-date="<?php echo get_the_date( 'ymd' ); ?>"  doc-city="<?php echo $doc_city[0]->slug; ?>" data-date="<?php echo get_the_date( 'ymd' ); ?>" spec-id="<?php for($i=0;$i<count($specialities);$i++){if($i>0){ echo ','; } echo $specialities[$i]; } ?>" data-pri="<?php echo $prio; ?>">
	        <div class="img-container">
	            <a href="<?php echo get_the_permalink(); ?>">
	            	<?php 
	            		if(has_post_thumbnail(get_the_ID())){
	            			$url = get_the_post_thumbnail_url( get_the_ID(), '250x250' );
	            			$class="doctor-pic main-pic";
	            		}else{
	            			$url = "http://style.anu.edu.au/_anu/4/images/placeholders/person.png";
	            			$class="doctor-pic place-pic";
	            		}
	            	?>
	            	<img src="<?php echo $url; ?>" alt="" class="img-responsive <?php echo $class; ?>">
	            </a>
	            <div class="hos-department"><?php ?></div>
	        </div>
	        <div class="doctor-info">
	          <h2 class="doctor-name"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
	          <p class="education"><?php echo get_field('qualification'); ?></p>
	          <p class="designation"><?php echo get_field('designation'); ?></p>    
	          <p class="designation"></p>
	          <p class="timing"><strong></strong> <?php if(!empty(get_field('opd_timing')) ){ echo get_field('opd_timing'); }else{ echo 'By Appointment'; } ?></p>
	        </div>
			<hr class="data-seperator">
			<div class="contact-details">
		        <!-- <a href="tel:+918956455150" class="btn btn-contact">Contact Hospital</a> -->
		        <a href="/book-an-appointment/?doc-id=<?php echo get_the_id(); ?>" class="btn btn-book-app"><span>Book Appointment</span></a>
		     </div>
		 </div>

	<?php $docs_print++;

} 
}

/* Get Doctos List Withour Photos*/
        $get_doctor_list = array(
      		'post_type' => 'doctors',
      		'posts_per_page'=> -1,
      		'orderby'=>'publish_date','order' => 'ASC',
      		'meta_query'	=> array(
      			'relation' => 'AND',
			    array(
			            'key' => '_thumbnail_id',
			            'compare' => 'NOT EXISTS'
			    ),
			    array(
			            'key'     => 'priority',
			            'value'   => '3',
			    ),
				array(
					'key'		=> 'speciality',
					'compare'	=> 'LIKE',
					'value'		=> $post_id,
				),
			),
        );
        $the_query_doctor = new WP_Query( $get_doctor_list );
        if ( $the_query_doctor->have_posts() ) {
        	while ( $the_query_doctor->have_posts() ) {
                $the_query_doctor->the_post();
                $specialities = get_field('speciality');
              	$doc_city = get_the_terms( $the_query_doctor->ID, 'city' );
              	$prio = get_field('priority');     
          ?>
        <div class="doc-content<?php if($docs_print > 9){ echo ' hidden'; } ?>" data-date="<?php echo get_the_date( 'ymd' ); ?>"  doc-city="<?php echo $doc_city[0]->slug; ?>" data-date="<?php echo get_the_date( 'ymd' ); ?>" spec-id="<?php for($i=0;$i<count($specialities);$i++){if($i>0){ echo ','; } echo $specialities[$i]; } ?>" data-pri="<?php echo $prio; ?>">
	        <div class="img-container">
	            <a href="<?php echo get_the_permalink(); ?>">
	            	<?php 
	            		if(has_post_thumbnail(get_the_ID())){
	            			$url = get_the_post_thumbnail_url( get_the_ID(), '250x250' );
	            			$class="doctor-pic main-pic";
	            		}else{
	            			$url = "http://style.anu.edu.au/_anu/4/images/placeholders/person.png";
	            			$class="doctor-pic place-pic";
	            		}
	            	?>
	            	<img src="<?php echo $url; ?>" alt="" class="img-responsive <?php echo $class; ?>">
	            </a>
	            <div class="hos-department"><?php ?></div>
	        </div>
	        <div class="doctor-info">
	          <h2 class="doctor-name"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
	          <p class="education"><?php echo get_field('qualification'); ?></p>
	          <p class="designation"><?php echo get_field('designation'); ?></p>    
	          <p class="designation"></p>
	          <p class="timing"><strong></strong> <?php if(!empty(get_field('opd_timing')) ){ echo get_field('opd_timing'); }else{ echo 'By Appointment'; } ?></p>
	        </div>
			<hr class="data-seperator">
			<div class="contact-details">
		        <!-- <a href="tel:+918956455150" class="btn btn-contact">Contact Hospital</a> -->
		        <a href="/book-an-appointment/?doc-id=<?php echo get_the_id(); ?>" class="btn btn-book-app"><span>Book Appointment</span></a>
		     </div>
		 </div>

	<?php $docs_print++;

} 
}

?>

    

    </div>




<?php } ?>

	</div>
</div>
 

<script>

jQuery(function($){

	 


   $("select#doc-department").on('change', function(){
	
        $dep_id = $("select#doc-department option:selected").attr('dep-id');
        $("#doc-specialized option").hide();
        $('#doc-specialized option:first').show();
        $('#doc-specialized option:first').prop('selected',true);
        $("#doc-specialized option[dep-id='"+ $dep_id + "']").show();

    });

    $("#doc-specialized").on('change', function(){

        $spec_id = $("select#doc-specialized option:selected").val();
        $("div.doc-content").hide();
        //$("div.doc-content[spec-id='"+$spec_id+"']").show();
        $("div.doc-content").each(function(key, value){
            console.log($(this).attr('spec-id'));
            $spec_ids = $(this).attr('spec-id');

            if($spec_ids.includes($spec_id)){

                $(this).show();

            }
         });

    });
	
    $(".city-filter").click(function(){
    	
        $(".city-filter").removeClass('active');
        $(this).addClass('active');
        $sel_city = $(this).attr('data-city');
        $("div.doc-content").hide();
        $("div.doc-content[doc-city='"+$sel_city+"']").show();

        if($('.doc-container').children(':visible').length == 0) {

            $(".doc-container").append('<div class="no-doctors"><h2 class="section-title">Sorry, No Doctors Found!</h2></div>');

        }else{

        	$(".no-doctors").addClass("hidden");
        	// var result = $('div.doc-content').sort(function (a, b) {
	        //     var contentA =parseInt( $(a).data('date'));
	        //     var contentB =parseInt( $(b).data('date'));
	        //     return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
	        // });

	       //$('.doc-container').html(result);
        }
	
       	$(".view-all-doctor").parent().addClass("hidden");

    });

    $(document).ready(function(){
    	
    	$(".doc-container").html(divList);
		

    	if($('.doc-container').children(':visible').length == 0) {
	        $(".doctor-content").addClass('hidden');
	    }else{

	        $(".doc-container").append('<div class="no-doctors hidden"><h2 class="section-title">Sorry, No Doctors Found!</h2></div>');
	        if($('.doc-container').children().length > 6){
	        	$(".doc-container").append('<div class="view-all-btn"><button class="view-all-doctor">View All</h2></div>');
	        }
	        

	    }

	    var divList = $(".doc-content");
		divList.sort(function(a, b){
		    return $(a).data("pri")-$(b).data("pri")
		});
		
		$(".view-all-doctor").click(function(){
	  
	        $(".doc-container .doc-content").removeClass("hidden");
	        $(this).parent().addClass("hidden");
	    });

    });
    

    


});

</script>

<?php get_footer(); ?>
