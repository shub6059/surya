<?php /* Wrapper Name: Header */ ?>
<?php 
	$base_icon_link = get_stylesheet_directory_uri()."/images/";
?>

<div class="row">
  <div class="span3 logo_wrapper" data-motopress-type="static" data-motopress-static-file="static/static-logo.php" >
    <?php get_template_part("static/static-logo"); ?>
    <div class="belowlogo_text">Super Speciality Hospital For Women & Children</div>
  </div>
  <div class="span5" style="text-align:center; margin-top:5px !important; ">
  	<div class="surya_life_text"><i style="color:#E74472;font-size:24px;" class="fa fa-ambulance fa-3"></i><!--<strong>Surya Lifeline :</strong>--> <?php echo of_get_option('mobile_number_in_header')?></div>
    <form id="searchform" method="get" action="<?php echo home_url(); ?>" accept-charset="utf-8">
      <input type="text" placeholder="Search ..." value="<?php the_search_query(); ?>" name="s" id="s" class="search-form_it" style="background-color: #fff; height:18px; border-radius:5px; width:80%; border-color:#cbeafd !important;" onFocus="background-color: #3CBC8D;">
      <button type="submit" id="search-submit" class="search-form_is btn btn-primary"><i class="fa fa-search"></i></button>
    </form>
  </div>
  <div class="span4 text-right heade3rd_col" style=";margin-top:5px !important; ">
    <div class="top_header_appointment">
      <?php
    $subsites = get_sites();
    //echo "<pre style='text-align:left;'>";print_r( $subsites );echo "</pre>";
    ?>
      <i class="fa fa-map-marker locationicon" aria-hidden="true"></i>
      <div class="dropdown">
        <div class="dropbtn"> <?php echo get_bloginfo( 'name' );?> <i class="caret-down"></i> </div>
        <div class="dropdown-content">
          <?php foreach( (array)$subsites as $subsite ) {
                $blog_details = get_blog_details($subsite->blog_id);
                //echo "<pre style='text-align:left;'>";print_r( $blog_details );echo "</pre>";
                ?>
          <a href="<?php echo $blog_details->siteurl?>"><?php echo $blog_details->blogname?></a>
          <?php } ?>
        </div>
      </div>
      <a class="btn btn-primary btn-large" id="book_appointment" href="<?php echo home_url('book-an-appointment')?>">Book an Appointment</a>
    </div>
    <div class="header_social_wrap"> <a href="<?php echo of_get_option('social_facebook')?>" target="_blank"> <img src="<?php echo $base_icon_link?>FB.png"> </a> <a href="https://twitter.com/suryahospitals?lang=en" target="_blank"> <img src="<?php echo $base_icon_link?>Twitter.png"> </a> <a href="https://www.instagram.com/suryahospitals/" target="_blank"> <img src="<?php echo $base_icon_link?>Ins.png"> </a> <a href="https://in.pinterest.com/suryahospitals/" target="_blank"> <img src="<?php echo $base_icon_link?>p.png"> </a> <a href="https://www.youtube.com/channel/UCd4zax49Ge9KECO48XyruVA" target="_blank"> <img src="<?php echo $base_icon_link?>Youtube.png"> </a>
      <div class="connect_with_us">Connect with us</div>
    </div>
  </div>
  <div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-nav.php">
    <?php get_template_part("static/static-nav"); ?>
  </div>
</div>
<?php if( is_front_page() ) { ?>
<div class="header_indent">
  <div class="row">
    <div class="span6 hidden-phone" data-motopress-type="static" data-motopress-static-file="static/static-search.php">
      <?php get_template_part("static/static-search"); ?>
    </div>
    <div class="span6" data-motopress-type="static" data-motopress-static-file="static/static-login-out.php">
      <?php get_template_part("static/static-login-out"); ?>
    </div>
  </div>
</div>
<?php } ?>
