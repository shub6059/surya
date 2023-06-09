<?php

/**
 * @author Mohammad Mursaleen
 * function To register and enqueue frontend styles
 **/
function wpcs_enque_front_styles() {
	// Calling style sheet for WP contact slider
	$style_url = plugins_url( 'css/style.css', dirname( __FILE__ ) );

	wp_register_style( 'wpcs_style.css', $style_url, false, false ); // phpcs:ignore
	wp_enqueue_style( 'wpcs_style.css' );

}
