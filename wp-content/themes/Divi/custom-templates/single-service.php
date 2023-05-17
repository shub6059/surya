<?php

/*
* Template Name: Service Page Template
*
*/


get_header();


?>
<style type="text/css">
	.doc-container {
        display: flex;
        flex-wrap: wrap;
        margin: 30px auto;
        justify-content:center;
    }
    .doc-filters select {
	    box-shadow: 0px 10px 24px 6px rgb(0 0 0 / 6%);
	    height: 45px;
	    border: 0;
	    border-radius: 6px;
	}
	.doc-filters {
    display: flex;
    justify-content: center;
}
.doc-filters select {
    box-shadow: 0px 10px 24px 6px rgb(0 0 0 / 6%);
    height: 45px;
    border: 0;
    border-radius: 6px;
    width: 100%;
    /* margin: 15px; */
    padding: 5px 15px;
    font-size: 15px;
    font-weight: 500;
}

    .main-doctors-page {
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
	@media all and (min-width:991px){
		
		.doctor-info {
		    min-height: 160px;
		}
		.doc-filters>div {
		    width: 260px;
		    /* padding: 15px; */
		    margin: 15px;
		}
	}
	@media all and (max-width:991px){
		.doc-content {
	    	width: 100%;
		}
        .main-doctors-page{
        	padding-left:20px;
        	padding-right:20px;
        }
	}
	@media all and (max-width:991px) and (min-width:480px){
		.doc-content {
		    width: calc(33.33% - 15px);
		}
	}
    	div.et_pb_section.et_pb_section_0 {
	    background-image: url('https://suryahospitals.com/wp-content/uploads/2021/01/bf_20_tb_14-1.png'),linear-gradient(122deg,#00a0e3 32%,#e63a6b 84%)!important;
	    padding-top: 7vw;
	    padding-bottom: 7vw;
	}
	.et_pb_section_0.section_has_divider.et_pb_bottom_divider .et_pb_bottom_inside_divider {
    background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMHZ3IiB2aWV3Qm94PSIwIDAgMTI4MCAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iI2ZmZmZmZiI+PHBhdGggZD0iTTAgMTQwaDEyODBDNTczLjA4IDE0MCAwIDAgMCAweiIgZmlsbC1vcGFjaXR5PSIuMyIvPjxwYXRoIGQ9Ik0wIDE0MGgxMjgwQzU3My4wOCAxNDAgMCAzMCAwIDMweiIgZmlsbC1vcGFjaXR5PSIuNSIvPjxwYXRoIGQ9Ik0wIDE0MGgxMjgwQzU3My4wOCAxNDAgMCA2MCAwIDYweiIvPjwvZz48L3N2Zz4=);
    background-size: 100% 10vw;
    bottom: 0;
    height: 10vw;
    z-index: 1;
    transform: rotateY(
180deg
);
}
.et_pb_text_0 h1 {
    font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif;
    font-weight: 700;
    font-size: 70px;
    line-height: 1.2em;
}
@media all and (max-width:991px){
.et_pb_text_0 h1 {
font-size:32px;}
.doc-filters>div{
width:calc(50% - 10px);
}
.doc-filters{
flex-wrap:wrap;
justify-content: space-between!important;
}
.doc-filters select{
font-size:14px;}
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
<div class="main-doctors-page">
	<div class="doctor-content">
		
	<div class="doc-filters">
		

		<div class="doc-department">
			<?php 

			$city = get_field('city_name');
			$taxonomies = get_terms( array(
			    'taxonomy' => 'service_department',
			    'hide_empty' => false,
			    'orderby'=> 'ID',
			) );
			if ( !empty($taxonomies) ) :
    $output = '<select id="doc-department"><option>Select Department</option>';
    foreach( $taxonomies as $category ) {
        if( $category->parent == 0 ) {
            $output.= '<option dep-id="'. esc_attr( $category->term_id ) .'">'.$category->name.'</option>';
        }
    }
    $output.='</select>';
    echo $output;
endif;

?>

		</div>


		<div class="doc-specialized">
			<?php 
            $city = str_replace(' ', '', get_field('city'));
			$get_doctor_list = array(
              'post_type' => 'service',
              'orderby'=> 'ID',
              'order' => 'ASC',
              'posts_per_page'=> -1,
              'tax_query' => array(
		        array(
		            'taxonomy' => 'city',
		            'field'    => 'slug',
		            'terms'    => $city,
		        ),
		    ),
            );

            $the_query_doctor = new WP_Query( $get_doctor_list );

            if ( $the_query_doctor->have_posts() ) {
            	echo '<select id="doc-specialized"><option>Select Speciality</option>';
              while ( $the_query_doctor->have_posts() ) {
                  $the_query_doctor->the_post();
                  $term_obj_lists = get_the_terms( get_the_ID(), 'service_department' );
                  if($term_obj_lists){
	                  foreach($term_obj_lists as $term){
	                  	$dep_id = $term->term_id;
	                  }
                  }
                  
                  ?>
                  <option value="<?php echo get_the_ID(); ?>" dep-id="<?php echo $dep_id; ?>"><?php echo get_the_title(); ?></option>
                  <?php

             	}
             	echo '</select>';
             }
?>
		</div>


	</div>
	<div class="doc-container">


		<?php
			/* Get Doctos List*/
            $get_doctor_list = array(
              'post_type' => 'doctors',
              'orderby'=> 'title',
              'order' => 'ASC',
              'posts_per_page'=> -1,
              'tax_query' => array(
		        array(
		            'taxonomy' => 'city',
		            'field'    => 'slug',
		            'terms'    => $city,
		        ),
		    	),
            );

            $the_query_doctor = new WP_Query( $get_doctor_list );

            if ( $the_query_doctor->have_posts() ) {
              while ( $the_query_doctor->have_posts() ) {
                  $the_query_doctor->the_post();
                  $specialities = get_field('speciality');
              ?>

				<div class="doc-content" spec-id="<?php for($i=0;$i<count($specialities);$i++){
                if($i>0){
                echo ',';
                }
                echo $specialities[$i];
                
                } ?>">
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
			          
<!-- 			          <a href="tel:+918956455150" class="btn btn-contact">Contact Hospital</a> -->
			          <a href="/book-an-appointment/?doc-id=<?php echo get_the_id(); ?>" class="btn btn-book-app"><span>Book Appointment</span></a>
			        </div>
			    </div>

	     <?php 

	 		}
        }


          ?>
	</div>

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

});

</script>
 
<?php

get_footer();

?>