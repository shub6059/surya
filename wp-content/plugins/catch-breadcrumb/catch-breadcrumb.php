<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              catchplugins.com
 * @since             1.0.0
 * @package           Catch_Breadcrumb
 *
 * @wordpress-plugin
 * Plugin Name:       Catch Breadcrumb
 * Plugin URI:        catchplugins.com/plugins/catch-breadcrumb/
 * Description:       Catch Breadcrumb lets you display Breadcrumb Navigation anywhere on your website elegantly. It  helps your readers navigate easily through your website without getting lost.
 * Version:           1.9
 * Author:            Catch Plugins
 * Author URI:        catchplugins.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       catch-breadcrumb
 * Tags:              breadcrumb, breadcrumbs, menu, navigation, trail
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CATCH_BREADCRUMB_VERSION', '1.9' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-catch-breadcrumb-activator.php
 */
// The URL of the directory that contains the plugin
if ( ! defined( 'CATCH_BREADCRUMB_URL' ) ) {

	define( 'CATCH_BREADCRUMB_URL', plugin_dir_url( __FILE__ ) );

}


// The absolute path of the directory that contains the file
if ( ! defined( 'CATCH_BREADCRUMB_PATH' ) ) {

	define( 'CATCH_BREADCRUMB_PATH', plugin_dir_path( __FILE__ ) );

}


// Gets the path to a plugin file or directory, relative to the plugins directory, without the leading and trailing slashes.
if ( ! defined( 'CATCH_BREADCRUMB_BASENAME' ) ) {

	define( 'CATCH_BREADCRUMB_BASENAME', plugin_basename( __FILE__ ) );

}

function activate_catch_breadcrumb() {

	/* Check if Catch Breadcrumb Pro is installed and active, abort plugin activation and return with message */
	$required = 'catch-breadcrumb-pro/catch-breadcrumb-pro.php';

	if ( is_plugin_active( $required ) ) {

		$message = esc_html__( 'Sorry, Pro plugin is already active. No need to activate Free version. %1$s&laquo; Return to Plugins%2$s.', 'catch-breadcrumb' );
		$message = sprintf( $message, '<br><a href="' . esc_url( admin_url( 'plugins.php' ) ) . '">', '</a>' );
		wp_die( $message );

	}

	require_once plugin_dir_path( __FILE__ ) . 'includes/class-catch-breadcrumb-activator.php';
	Catch_Breadcrumb_Activator::activate();

}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-catch-breadcrumb-deactivator.php
 */
function deactivate_catch_breadcrumb() {

	require_once plugin_dir_path( __FILE__ ) . 'includes/class-catch-breadcrumb-deactivator.php';
	Catch_Breadcrumb_Deactivator::deactivate();

}

register_activation_hook( __FILE__, 'activate_catch_breadcrumb' );
register_deactivation_hook( __FILE__, 'deactivate_catch_breadcrumb' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-catch-breadcrumb.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function breadcrumb_sanitize_checkbox( $checked ) {

	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );

}

if ( ! function_exists( 'catch_breadcrumb_get_options' ) ) :

	function catch_breadcrumb_get_options() {

		$defaults = catch_breadcrumb_default_options();
		$options  = get_option( 'catch_breadcrumb_options', $defaults );
		return wp_parse_args( $options, $defaults );

	}

endif;


if ( ! function_exists( 'catch_breadcrumb_default_options' ) ) :

	/**
	 * Return array of default options
	 *
	 * @since     1.0
	 * @return    array    default options.
	 */
	function catch_breadcrumb_default_options( $option = null ) {

		$default_options = array(
			'breadcrumb_separator'    => '&gt;',
			'breadcrumb_home_icon'    => 0,
			'breadcrumb_display_home' => 0,
			'content_selector'        => '#content',
			'status'                  => 1,
			'breadcrumb_dynamic'      => 'before',
		);

		if ( current_theme_supports( 'catch-breadcrumb' ) ) {

			$catch_breadcumb_support               = get_theme_support( 'catch-breadcrumb' );
			$default_options['content_selector']   = isset( $catch_breadcumb_support[0]['content_selector'] ) ? esc_html( $catch_breadcumb_support[0]['content_selector'] ) : '';
			$default_options['breadcrumb_dynamic'] = isset( $catch_breadcumb_support[0]['breadcrumb_dynamic'] ) ? esc_html( $catch_breadcumb_support[0]['breadcrumb_dynamic'] ) : '';

		}

		if ( null === $option ) {

			return apply_filters( 'catch_breadcrumb_options', $default_options );

		} else {

			return $default_options[ $option ];

		}

	}

endif; // breadcrumb_default_options

function run_catch_breadcrumb() {

	$plugin = new Catch_Breadcrumb();
	$plugin->run();

}

run_catch_breadcrumb();

require plugin_dir_path( __FILE__ ) . 'includes/shortcodes.php';

/**
 * Remove breadcrumb from default position
 * Check template-parts/header/breadcrumb.php
 */
function catch_breadcrumb_remove_wc_breadcrumbs() {

	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );

}

add_action( 'init', 'catch_breadcrumb_remove_wc_breadcrumbs' );

function catch_breadcrumb_dynamic_position() {

	$options = array(
		'before' => esc_html__( 'Before', 'catch-breadcrumb' ),
		'after'  => esc_html__( 'After', 'catch-breadcrumb' ),
	);

	return $options;

}

/* CTP tabs removal options */
require plugin_dir_path( __FILE__ ) . '/includes/ctp-tabs-removal.php';

$ctp_options = ctp_get_options();
if ( 1 == $ctp_options['theme_plugin_tabs'] ) {

	/* Adds Catch Themes tab in Add theme page and Themes by Catch Themes in Customizer's change theme option. */
	if ( ! class_exists( 'CatchThemesThemePlugin' ) && ! function_exists( 'add_our_plugins_tab' ) ) {

		require plugin_dir_path( __FILE__ ) . '/includes/CatchThemesThemePlugin.php';

	}
}
