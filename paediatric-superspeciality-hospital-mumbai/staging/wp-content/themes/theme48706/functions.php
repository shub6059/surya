<?php
//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
function add_theme_scripts() {
	wp_enqueue_style( 'stylecss', get_stylesheet_directory_uri() . '/css/style.css', array(), '1.1', 'all');
   wp_enqueue_script( 'scriptjs', get_stylesheet_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts', 100 );



function register_my_menu1() {
	register_nav_menu('footer-c2r1',__( 'Footer Col 2 Row 1' ));
	register_nav_menu('footer-c2r2',__( 'Footer Col 2 Row 2' ));
	register_nav_menu('footer-c3r1',__( 'Footer Col 3 Row 1' ));
	register_nav_menu('footer-c3r2',__( 'Footer Col 3 Row 2' ));
}
add_action( 'init', 'register_my_menu1' );