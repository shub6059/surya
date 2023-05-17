<?php
/**
* Plugin Name: Website Custom Plugin
* Plugin URI: 
* Description: 
* Version: 1.0.0
* Author: Hitesh patel
* Author URI: http://easterninfo.com
* License: GPL2
*/


if(!defined('WCP_PLUGIN_VERSION'))
{
	define( 'WCP_PLUGIN_VERSION', '1.0.0' );
}

if(!defined('WCP_PLUGIN_DOMAIN'))
{
	define( 'WCP_PLUGIN_DOMAIN', 'website-custom-plugin' );
}

if(!defined('WCP_PLUGIN_URL'))
{
	define( 'WCP_PLUGIN_URL', WP_PLUGIN_URL . '/website-custom-plugin' ); 
}

include_once(dirname(__FILE__)."/js_css_register.php");
include_once(dirname(__FILE__)."/WCP/SliderText/Controller.php");
include_once(dirname(__FILE__)."/WCP/Sites/Controller.php");
