<?php
function add_theme_scripts1() {
	//wp_enqueue_script( 'stripe-js', 'https://js.stripe.com/v2/', array ( 'jquery' ), '5.1.1', true);
	
	wp_enqueue_style( 'slick-css', WCP_PLUGIN_URL.'/slick/slick.css', array(), '1.1', 'all');
	wp_enqueue_style( 'slick-theme', WCP_PLUGIN_URL.'/slick/slick-theme.css', array(), '1.1', 'all');
	wp_enqueue_script( 'slick-js', WCP_PLUGIN_URL.'/slick/slick.min.js', array ( 'jquery' ), '1.8.0', true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts1' );

function add_theme_scripts2() {
	wp_enqueue_style( 'wcp_css', WCP_PLUGIN_URL.'/css/style.css', array(), '1.1', 'all');
	wp_enqueue_script( 'wcp_scriptjs', WCP_PLUGIN_URL.'/js/script.js', array(), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts2', 300 );
