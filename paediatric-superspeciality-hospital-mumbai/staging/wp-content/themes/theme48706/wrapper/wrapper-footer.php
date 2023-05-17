<?php /* Wrapper Name: Footer */ ?>

<div class="row">
  <h3 class="span12 text-center" > Center of Exellence </h3>
  <div class="span3" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
    <?php get_template_part("static/static-footer-text"); ?>
  </div>
  <div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
  	<div class="fmenu">
        <?php
			$location = "footer-c2r1";
			$theme_locations = get_nav_menu_locations();
			$menu_obj = get_term( $theme_locations[$location] );
			$menu_name = $menu_obj->name;
			
			echo '<h4>'.$menu_name.'</h4>';

        	wp_nav_menu( array(
				'theme_location' => $location, 'menu_class' => $location, 'fallback_cb'=> false
			));
			
			$location = "footer-c2r2";
			$theme_locations = get_nav_menu_locations();
			$menu_obj = get_term( $theme_locations[$location] );
			$menu_name = $menu_obj->name;
			
			echo '<h4>'.$menu_name.'</h4>';

        	wp_nav_menu( array(
				'theme_location' => $location, 'menu_class' => $location, 'fallback_cb'=> false
			));
		?>
    </div>
    <?php dynamic_sidebar("footer-sidebar-1"); ?>
  </div>
  <div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
		<?php
			$location = "footer-c3r1";
			$theme_locations = get_nav_menu_locations();
			$menu_obj = get_term( $theme_locations[$location] );
			$menu_name = $menu_obj->name;
			
			echo '<h4>'.$menu_name.'</h4>';

        	wp_nav_menu( array(
				'theme_location' => $location, 'menu_class' => $location, 'fallback_cb'=> false
			));
			
			$location = "footer-c3r2";
			$theme_locations = get_nav_menu_locations();
			$menu_obj = get_term( $theme_locations[$location] );
			$menu_name = $menu_obj->name;
			
			echo '<h4>'.$menu_name.'</h4>';

        	wp_nav_menu( array(
				'theme_location' => $location, 'menu_class' => $location, 'fallback_cb'=> false
			));
		?>
    <?php dynamic_sidebar("footer-sidebar-2"); ?>
  </div>
  <div class="span3" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-3">
    <?php dynamic_sidebar("footer-sidebar-3"); ?>
  </div>
</div>
<div class="row">
  <div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
    <?php get_template_part("static/static-footer-nav"); ?>
  </div>
</div>
