<?php

function surya_get_doctors_list( $atts ) {
     ob_start();
if(!is_admin()){
   $a = shortcode_atts( array(
      'city' => 'mumbai'
   ), $atts );


?>
<style>
.hidden{
display:none;
}
button.view-all-doctor {
    color: #ffffff!important;
    border-width: 2px!important;
    border-color: #e63a6b;
    border-radius: 100px;
    font-size: 14px;
    font-family: 'Poppins',Helvetica,Arial,Lucida,sans-serif!important;
    font-weight: 600!important;
    text-transform: uppercase!important;
    background-color: #e63a6b;
    padding-top: 12px!important;
    padding-right: 36px!important;
    padding-bottom: 12px!important;
    padding-left: 36px!important;
    background-size: cover;
    background-position: 50%;
    background-repeat: no-repeat;
    border: 2px solid;
    cursor:pointer;
}
.view-all-btn {
    text-align: center;
}
</style>
   <div class="main-doctors-page">
  <div class="doctor-content">
    
  <div class="doc-filters">
    

    <div class="doc-department">
      <?php 

      
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
            $city = $a['city'];
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
              'orderby'=> 'date',
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
              $j = 0;
              while ( $the_query_doctor->have_posts() ) {
                  $the_query_doctor->the_post();
                  $specialities = get_field('speciality');
                  
              ?>

        <div class="doc-content <?php if($j>14){ echo 'hidden'; } ?>" spec-id="<?php for($i=0;$i<count($specialities);$i++){
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
                
<!--                <a href="tel:+918956455150" class="btn btn-contact">Contact Hospital</a> -->
                <a href="/book-an-appointment/?doc-id=<?php echo get_the_id(); ?>" class="btn btn-book-app"><span>Book Appointment</span></a>
              </div>
          </div>

       <?php 
  
    $j++;
      }
      
        }


          ?>
  </div>
  <div class="view-all-btn">
      <button class="view-all-doctor">View All</h2>
    </div>
  </div>
  
<div class="no-doctors hidden">
      <h2 class="section-title">Sorry, No Doctors Found!</h2>
    </div>
  </div>
    
</div>
<script>

jQuery(function($){
  
    $(".view-all-doctor").click(function(){
  
        $(".doc-container .doc-content").removeClass("hidden");
        $(this).parent().addClass("hidden");
    });
    
   $("select#doc-department").on('change', function(){
  
    $dep_id = $("select#doc-department option:selected").attr('dep-id');
    
  $("#doc-specialized option").hide();
    $('#doc-specialized option:first').show();
    $('#doc-specialized option:first').prop('selected',true);
    $("#doc-specialized option[dep-id='"+ $dep_id + "']").show();
  
});

$("#doc-specialized").on('change', function(){
  
    
    $spec_id = $("select#doc-specialized option:selected").val();
    $(".doc-container .doc-content").removeClass("hidden");
    $(".view-all-doctor").parent().addClass("hidden");
    $("div.doc-content").hide();
    //$("div.doc-content[spec-id='"+$spec_id+"']").show();
  $("div.doc-content").each(function(key, value){
        console.log($(this).attr('spec-id'));
        $spec_ids = $(this).attr('spec-id');
        
        if($spec_ids.includes($spec_id)){
          
            $(this).show();
        
        }
     });
     
     if($('.doc-container').children(':visible').length == 0) {
           $(".no-doctors").removeClass("hidden");
        }else{
          $(".no-doctors").addClass("hidden");
        }

});

});

</script>
<?php


}
return ob_get_clean();
}
add_shortcode( 'get_doctors_list', 'surya_get_doctors_list' );



function surya_get_doctors_dynamic_url( $atts ) {
     
if(!is_admin()){
  ob_start();

  $doctor_id = get_the_ID();

  echo '<a href="/book-an-appointment?doctor-id='. $doctor_id .'" class="doctor-boa">Book an Appointment</a>';
    
return ob_get_clean();
  }

}


add_shortcode( 'get_doctors_dynamic_url', 'surya_get_doctors_dynamic_url' );


function get_doctors_using_service($atts){

ob_start();
if(!is_admin()){
   
   $a = shortcode_atts( array(
      'service' => '0',
   ), $atts );


	$services = explode(",",$a['service']); 
	$s_count = count($services);
  $docs_print = 0;
	if($s_count>1){

		$meta_query = array( 'relation' => 'OR' );
		for($j=0;$j<$s_count;$j++) {
	        $meta_query[] = array( 'key' => 'speciality', 'value' => $services[$j] , 'compare' => 'LIKE'  );
	    }

	}else{

		$meta_query = array( array(
			      'key'   => 'speciality',
			      'value'   => $a['service'],
			      'compare' => 'LIKE'
			    ),
	        	
	        	);

	}

 $get_doctor_list = array(
    'post_type' => 'doctors',
    'orderby'=> 'date',
    'order' => 'ASC',
    'posts_per_page' => -1,
    'meta_query' => array(
        'relation' => 'AND',
        array(
                  'key' => '_thumbnail_id',
                  'compare' => 'EXISTS'
          ),
                array(
                        $meta_query
        ),
    ),
);
  
 // $get_doctor_list = array(
	//               'post_type' => 'doctors',
	//               'orderby'=> 'title',
	//               'order' => 'ASC',
	//               'posts_per_page'=> -1,
 //          		'meta_query'  => $meta_query          		
 //            );

            $the_query_doctor = new WP_Query( $get_doctor_list );

            if ( $the_query_doctor->have_posts() ) {
              $i = 0;
              $j = 0;
              while ( $the_query_doctor->have_posts() ) {
                  $the_query_doctor->the_post();
                  $specialities = get_field('speciality');
                  $doc_city = get_the_terms( $the_query_doctor->ID, 'city' );
                  $prio = get_field('priority');
              ?>

        <div class="doc-content<?php if($docs_print > 9){ echo ' hidden'; } ?>" doc-city="<?php echo $doc_city[0]->slug; ?>" spec-id="<?php for($k=0;$k<count($specialities);$k++){if($k>0){ echo ','; } echo $specialities[$k]; } ?>" data-pri="<?php echo $prio; ?>">
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
                
<!--                <a href="tel:+918956455150" class="btn btn-contact">Contact Hospital</a> -->
                <a href="/book-an-appointment/?doc-id=<?php echo get_the_id(); ?>" class="btn btn-book-app"><span>Book Appointment</span></a>
              </div>

          </div>

       <?php 
  
    $j++;

               
                  

$docs_print++;
                  }
                 
                                    
}


 $get_doctor_list = array(
    'post_type' => 'doctors',
    'orderby'=> 'date',
    'order' => 'ASC',
    'posts_per_page' => -1,
    'meta_query' => array(
        'relation' => 'AND',
        array(
                  'key' => '_thumbnail_id',
                  'compare' => 'NOT EXISTS'
          ),
                array(
                        $meta_query
        ),
    ),
);
  
 // $get_doctor_list = array(
  //               'post_type' => 'doctors',
  //               'orderby'=> 'title',
  //               'order' => 'ASC',
  //               'posts_per_page'=> -1,
 //             'meta_query'  => $meta_query              
 //            );

            $the_query_doctor = new WP_Query( $get_doctor_list );

            if ( $the_query_doctor->have_posts() ) {
              $i = 0;
              $j = 0;
              while ( $the_query_doctor->have_posts() ) {
                  $the_query_doctor->the_post();
                  $specialities = get_field('speciality');
                  $doc_city = get_the_terms( $the_query_doctor->ID, 'city' );
                  $prio = get_field('priority');
              ?>

        <div class="doc-content<?php if($docs_print > 9){ echo ' hidden'; } ?>" doc-city="<?php echo $doc_city[0]->slug; ?>" spec-id="<?php for($k=0;$k<count($specialities);$k++){if($k>0){ echo ','; } echo $specialities[$k]; } ?>" data-pri="<?php echo $prio; ?>">
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
                
<!--                <a href="tel:+918956455150" class="btn btn-contact">Contact Hospital</a> -->
                <a href="/book-an-appointment/?doc-id=<?php echo get_the_id(); ?>" class="btn btn-book-app"><span>Book Appointment</span></a>
              </div>

          </div>

       <?php 
  
    $j++;

               
                  $docs_print++;


                  }
                 
                  
                  ?>



    

                  <?php



                  
}

?>
    
<?php

}
                  

return ob_get_clean();

}

add_shortcode( 'get_doctors_using_service', 'get_doctors_using_service' );



function get_services(){
  
    $city = $_POST['city'];
    $depart_slug = $_POST['dep_slug'];
    $ser_list = array(
        'post_type' => 'service',
        'orderby'=> 'ID',
        'order' => 'ASC',
        'posts_per_page'=> -1,
        'tax_query' => array(
        'relation' => 'AND',
        array(
        'taxonomy' => 'city',
        'field'    => 'slug',
        'terms'    => $city,
        ),
        array(
        'taxonomy' => 'service_department',
        'field'    => 'slug',
        'terms'    => $depart_slug,
        )
    ),
   );

            $serv_list  = new WP_Query( $ser_list );

            if ( $serv_list->have_posts() ) {
              echo '<option data-id="0">Select Speciality</option>';
              while ( $serv_list->have_posts() ) {
                  $serv_list->the_post();
                  $term_obj_lists = get_the_terms( get_the_ID(), 'service_department' );
                  if($term_obj_lists){
                    foreach($term_obj_lists as $term){
                      $dep_id = $term->term_id;
                    }
                  }
                  
                  ?>
                  <option value="<?php echo get_the_title(); ?>" data-id="<?php echo get_the_ID(); ?>"><?php echo get_the_title(); ?></option>
                  <?php 
                  } }
                  wp_die(); 
                  
 }
                  
add_action('wp_ajax_get_services','get_services');
add_action('wp_ajax_nopriv_get_services','get_services');

function get_doctors(){

$serv_id = $_POST['serv_id'];
$city = $_POST['city'];

 $get_doctor_list = array(
              'post_type' => 'doctors',
              'orderby'=> 'date',
              'order' => 'ASC',
              'posts_per_page'=> -1,
              'tax_query' => array(
                array(
                'taxonomy' => 'city',
                'field'    => 'slug',
                'terms'    => $city,
                ),
          ),
          'meta_query'  => array(
    array(
      'key'   => 'speciality',
      'value'   => $serv_id,
      'compare' => 'LIKE'
    ),
        ),
            );

            $the_query_doctor = new WP_Query( $get_doctor_list );

            if ( $the_query_doctor->have_posts() ) {
              
              while ( $the_query_doctor->have_posts() ) {
                  $the_query_doctor->the_post();
                  ?>
                  
                  <option value="<?php echo get_the_title(); ?>" data-id="<?php echo get_the_ID(); ?>"><?php echo get_the_title(); ?></option>
                  
                  <?php
                  }
                 
                  }
                  wp_die(); 
}

add_action('wp_ajax_get_doctors','get_doctors');
add_action('wp_ajax_nopriv_get_doctors','get_doctors');


function get_doctors_data(){

        $doctor_id = $_POST['doc_id'];
        
    
        $get_doctor_list = new WP_Query( array( 'doctors' => $doctor_id ) );

        $get_doctor_list = array(
          'p'         => $doctor_id, // ID of a page, post, or custom type
          'post_type' => 'doctors'
        );


            $the_query_doctor = new WP_Query( $get_doctor_list );
            $depart_data = [];
              $ser_data = [];
            if ( $the_query_doctor->have_posts() ) {
              
              while ( $the_query_doctor->have_posts() ) {

                  $the_query_doctor->the_post();
                  

                  //step get doctor Name

                  $doctor_name = get_the_title();
                  $data['doctor_name'] = $doctor_name;
                  // step 2 get Service name

                  $service = get_field('speciality');
                  // step 3 get department name
                                 
                  if(count($service)>1){

                    for($i=0;$i<count($service);$i++){

                      $data['service_list'][$i] = htmlspecialchars_decode(get_the_title($service[$i]));
                      $dep_name = get_the_terms( $service[$i], 'service_department' );

                      if($i>0){
                        if($data['dep_id'][$i - 1] !== $dep_name[0]->name){
                          $data['dep_id'][$i] = $dep_name[0]->name;
                        }  
                      }else{
                        $data['dep_id'][$i] = $dep_name[0]->name;
                      }
                      
                    }

                  }else{

                     $data['service_list'][0] = htmlspecialchars_decode(get_the_title($service[0]));
                     $dep_name = get_the_terms( $service[0], 'service_department' );
                    $data['dep_id'][0] = $dep_name[0]->name;
                  }

                  print_r(json_encode($data));
                  
                  }

                  }else{

                    echo '0';


                  }

                  print_r($service_list);

                  wp_die(); 
}

add_action('wp_ajax_get_doctors_data','get_doctors_data');
add_action('wp_ajax_nopriv_get_doctors_data','get_doctors_data');



/* Describe what the code snippet does so you can remember later on */
add_action('wp_footer', 'doctor_code');
function doctor_code(){

$page__url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  if(isset($_GET['doctor-id'])){

    if(!empty($_GET['doctor-id'])){

      $doctor_id = $_GET['doctor-id'];
      
?>
  <script type="text/javascript">
    jQuery(function($){
    var ajaxurl = 'https://suryahospitals.com/wp-admin/admin-ajax.php';
  var doctor_id = <?php echo $doctor_id; ?>;
  $.post( ajaxurl, { action: 'get_doctors_data', doc_id: doctor_id}, 
      function(output) {
        

        $doc_data = jQuery.parseJSON( output );

         

          $departments = $doc_data.dep_id;

           $("#department option").remove();        
          if($departments.length > 0){
            $("#department").append("<option>Select Department</option>");
            for($i=0;$i<$departments.length;$i++){

              $("#department").append("<option value='"+$departments[$i]+"''>"+ $departments[$i] +"</option>");

            }

          }else{
             

             $("#department").append("<option value='"+$doc_data.dep_id+"''>"+ $doc_data.dep_id +"</option>");
          }

          $("#department").attr("id","departments");

          
          $services = $doc_data.service_list;
          
          $("#services").remove();

          $("span.wpcf7-form-control-wrap.service").html('<select name="service" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" id="service" aria-required="true" aria-invalid="false"></select>');
          
          if($services.length > 0){
            $("#service").append("<option>Select Speciality</option>");
            for($i=0;$i<$services.length;$i++){

              $("#service").append("<option value='"+$services[$i]+"''>"+ $services[$i] +"</option>");

            }

          }else{
             $("#service option").remove();

             $("#service").append("<option value='"+$doc_data.service_list+"''>"+ $doc_data.service_list +"</option>");
          }
          $("#service").attr("id","service");

          $("#doctors option").remove();

          $("#doctors").append("<option>"+ $doc_data.doctor_name +"</option>");
          

        

      }
    );
});

</script>
<?php
    }

  }

  ?>
<?php
};

?>