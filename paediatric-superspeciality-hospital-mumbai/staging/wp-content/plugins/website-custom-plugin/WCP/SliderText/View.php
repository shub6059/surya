<?php
class WCP_SliderText_View 
{	
	public static function build_html($template,$data) {
		global $wpdb;
		$t = new \stdclass();
		$t->data = $data;
		ob_start();
		include(dirname(__FILE__)."/html/".$template.".phtml");
		$s = ob_get_contents();
		ob_end_clean();
		return $s;
	}
}
