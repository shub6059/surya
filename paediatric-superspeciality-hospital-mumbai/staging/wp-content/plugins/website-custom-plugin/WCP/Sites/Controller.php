<?php
include_once(dirname(__FILE__)."/View.php");
//include_once(dirname(__FILE__)."/Model.php");
//include_once(dirname(__FILE__)."/Metabox.php");

class WCP_Sites_Controller {
	public static function popup_func(){
		echo WCP_Sites_View::build_html( "popup" );
	}
	public static function video_slider_func(){
		echo WCP_Sites_View::build_html( "video_slider" );
	}
	function create_posttype() {
		register_post_type( 'video_slider',
			array(
				'labels' => array(
					'name' => __( 'Video slider' ),
					'singular_name' => __( 'Video slider' )
				),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array('slug' => 'video_slider'),
			)
		);
	}
	// create the Metabox 
	function video_slider_register_meta_boxes(){
		add_meta_box('video-slider-meta', __( 'Video slider', 'textdomain' ), array("WCP_Sites_Controller", 'video_slider_display_callback'), 'video_slider' );
	}
	// Save the Metabox Data
	function wpt_save_events_meta($post_id, $post){
		if($post->post_type == 'video_slider' && $vd=$_POST['vs']){
			foreach($vd as $key => $value){
				update_post_meta($post->ID, $key, $value);
			}
		}
	}
	// call the Metabox Data html
	function video_slider_display_callback(){
		echo WCP_Sites_View::build_html( "youtube_link_metabox" );
	}
}
add_action( 'wp_footer', array("WCP_Sites_Controller", "popup_func" ) );
add_shortcode( 'wcp_video_slider', array('WCP_Sites_Controller','video_slider_func' ));
add_action( 'init', array("WCP_Sites_Controller", "create_posttype" ) );
add_action('add_meta_boxes', array("WCP_Sites_Controller", "video_slider_register_meta_boxes" ) );
add_action('save_post', array("WCP_Sites_Controller", "wpt_save_events_meta") , 1, 2); // save the custom fields
