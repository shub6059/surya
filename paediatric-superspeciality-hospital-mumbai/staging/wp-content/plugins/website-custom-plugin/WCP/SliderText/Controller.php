<?php
include_once(dirname(__FILE__)."/View.php");
include_once(dirname(__FILE__)."/Model.php");
//include_once(dirname(__FILE__)."/Metabox.php");

class WCP_SliderText_Controller {
	public static function slider_text_func(){
		return WCP_SliderText_View::build_html( "slider_text" );
	}
}
add_shortcode( 'SliderText', array('WCP_SliderText_Controller','slider_text_func' ));