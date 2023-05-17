<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://catchplugins.com/plugins
 * @since      1.0.0
 *
 * @package    Catch_Breadcrumb
 * @subpackage Catch_Breadcrumb/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Catch_Breadcrumb
 * @subpackage Catch_Breadcrumb/admin
 * @author     Catch plugins
 */
class Catch_Breadcrumb_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Breadcrumb_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Breadcrumb_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		if ( isset( $_GET['page'] ) && 'catch-breadcrumb' === $_GET['page'] ) {

			wp_enqueue_style( $this->plugin_name . '-display-dashboard', plugin_dir_url( __FILE__ ) . 'css/admin-dashboard.css', array(), $this->version, 'all' );

		}

	}

	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Breadcrumb_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Breadcrumb_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		if ( isset( $_GET['page'] ) && 'catch-breadcrumb' == $_GET['page'] ) {

			wp_enqueue_script( 'matchHeight', plugin_dir_url( __FILE__ ) . 'js/jquery-matchHeight.min.js', array( 'jquery' ), $this->version, false );
			wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/catch-breadcrumb-admin.js', array( 'jquery', 'matchHeight', 'jquery-ui-tooltip' ), $this->version, false );

		}

	}

	/**
	 * Catch Breadcrumb: action_links
	 * Catch Breadcrumb Settings Link function callback
	 *
	 * @param arrray $links Link url.
	 *
	 * @param arrray $file File name.
	 */
	public function action_links( $links, $file ) {

		if ( $file === $this->plugin_name . '/' . $this->plugin_name . '.php' ) {

			$settings_link = '<a href="' . esc_url( admin_url( 'admin.php?page=catch-breadcrumb' ) ) . '">' . esc_html__( 'Settings', 'catch-breadcrumb' ) . '</a>';
			array_unshift( $links, $settings_link );

		}

		return $links;

	}

	public function add_plugin_settings_menu() {

		add_menu_page(
			esc_html__( 'Catch Breadcrumb', 'catch-breadcrumb' ), // $page_title.
			esc_html__( 'Catch Breadcrumb', 'catch-breadcrumb' ), // $menu_title.
			'manage_options', // $capability.
			'catch-breadcrumb', // $menu_slug.
			array( $this, 'settings_page' ), // $callback_function.
			'dashicons-sort', // $icon_url.
			'99.01564' // $position.
		);

		add_submenu_page(
			'catch-breadcrumb', // $parent_slug.
			esc_html__( 'Catch Breadcrumb', 'catch-breadcrumb' ), // $page_title.
			esc_html__( 'Settings', 'catch-breadcrumb' ), // $menu_title.
			'manage_options', // $capability.
			'catch-breadcrumb', // $menu_slug.
			array( $this, 'settings_page' ) // $callback_function.
		);

	}

	public function settings_page() {

		if ( ! current_user_can( 'manage_options' ) ) {

				wp_die( esc_html__( 'You do not have sufficient permissions to access this page.', 'catch-breadcrumb' ) );

		}

		require plugin_dir_path( __FILE__ ) . 'partials/catch-breadcrumb-admin-display.php';

	}

	public function register_settings() {

		register_setting(
			'catch-breadcrumb-group',
			'catch_breadcrumb_options',
			array( $this, 'sanitize_callback' )
		);

	}

	public function sanitize_callback( $input ) {

		if ( isset( $input['reset'] ) && $input['reset'] ) {

			//If reset, restore defaults
			return catch_breadcrumb_default_options();

		}

		// Verify the nonce before proceeding.
		if ( ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			|| ( ! isset( $_POST['catch_breadcrumb_nonce'] )
			|| ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['catch_breadcrumb_nonce'] ) ), CATCH_BREADCRUMB_BASENAME ) )
			|| ( ! check_admin_referer( CATCH_BREADCRUMB_BASENAME, 'catch_breadcrumb_nonce' ) ) ) {

				return 'Invalid Nonce';

		} else {

			if ( null !== $input ) {

				$input['status']                  = ( isset( $input['status'] ) && '1' === $input['status'] ) ? '1' : '0';
				$input['breadcrumb_home_icon']    = ( isset( $input['breadcrumb_home_icon'] ) && '1' === $input['breadcrumb_home_icon'] ) ? '1' : '0';
				$input['breadcrumb_display_home'] = ( isset( $input['breadcrumb_display_home'] ) && '1' === $input['breadcrumb_display_home'] ) ? '1' : '0';

				if ( isset( $input['breadcrumb_separator'] ) ) {

					$input['breadcrumb_separator'] = sanitize_text_field( $input['breadcrumb_separator'] );

				}

				if ( isset( $input['content_selector'] ) && $input['content_selector'] ) {

					$input['content_selector'] = wp_kses_post( $input['content_selector'] );

				}

				if ( isset( $input['breadcrumb_dynamic'] ) && $input['breadcrumb_dynamic'] ) {

					$input['breadcrumb_dynamic'] = sanitize_key( $input['breadcrumb_dynamic'] );

				}
			}

			return $input;

		}

	}



	function add_plugin_meta_links( $meta_fields, $file ) {

		if ( CATCH_BREADCRUMB_BASENAME === $file ) {

			$meta_fields[] = "<a href='https://catchplugins.com/support-forum/forum/catch-breadcrumb/' target='_blank'>Support Forum</a>";
			$meta_fields[] = "<a href='https://wordpress.org/support/plugin/catch-breadcrumb/reviews#new-post' target='_blank' title='Rate'>
			        <i class='ct-rate-stars'>"
			. "<svg xmlns='http://www.w3.org/2000/svg' width='15' height='15' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-star'><polygon points='12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2'/></svg>"
			. "<svg xmlns='http://www.w3.org/2000/svg' width='15' height='15' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-star'><polygon points='12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2'/></svg>"
			. "<svg xmlns='http://www.w3.org/2000/svg' width='15' height='15' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-star'><polygon points='12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2'/></svg>"
			. "<svg xmlns='http://www.w3.org/2000/svg' width='15' height='15' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-star'><polygon points='12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2'/></svg>"
			. "<svg xmlns='http://www.w3.org/2000/svg' width='15' height='15' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-star'><polygon points='12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2'/></svg>"
			. '</i></a>';

			$stars_color = '#ffb900';

			echo '<style>'
				. '.ct-rate-stars{display:inline-block;color:' . esc_html( $stars_color ) . ';position:relative;top:3px;}'
				. '.ct-rate-stars svg{fill:' . esc_html( $stars_color ) . ';}'
				. '.ct-rate-stars svg:hover{fill:' . esc_html( $stars_color ) . '}'
				. '.ct-rate-stars svg:hover ~ svg{fill:none;}'
				. '</style>';

		}

		return $meta_fields;

	}

}
