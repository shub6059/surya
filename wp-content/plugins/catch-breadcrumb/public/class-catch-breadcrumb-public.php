<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://catchplugins.com/plugins
 * @since      1.0.0
 *
 * @package    Catch_Breadcrumb
 * @subpackage Catch_Breadcrumb/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Catch_Breadcrumb
 * @subpackage Catch_Breadcrumb/public
 * @author     Catch Plugins <info@catchplugins.com>
 */
class Catch_Breadcrumb_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;
		$this->include();
	}

	public function include() {

		require plugin_dir_path( __FILE__ ) . 'partials/class-catch-breadcrumb-json-ld-schema.php';

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Catch_Breadcrumb_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Catch_Breadcrumb_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/catch-breadcrumb-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Catch_Breadcrumb_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Catch_Breadcrumb_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/catch-breadcrumb-public.js', array( 'jquery' ), $this->version, false );

	}

	public function catch_breadcrumb_localize() {

		$catch_breadcrumb_options = catch_breadcrumb_get_options();
		// Escaping JS before localizing.
		$escaped_option = array();

		foreach ( $catch_breadcrumb_options as $key => $option ) {

			$escaped_option[ $key ] = esc_js( $option );

		}

		wp_localize_script( $this->plugin_name, 'catch_breadcrumb_object', $escaped_option );

	}

	public function build_breadcrumb() {

		$catch_breadcrumb_options = catch_breadcrumb_get_options();

		if ( function_exists( 'woocommerce_breadcrumb' ) && ( is_woocommerce() || is_shop() ) ) :

			ob_start();

			?>

			<div id="catch-breadcrumb" class="catch-breadcrumb breadcrumb-area">
			<div class="section-wrapper">

				<?php

					$catch_breadcrumb_options = catch_breadcrumb_get_options();
					$breadcrumb_separator     = $catch_breadcrumb_options['breadcrumb_separator'];
				if ( $breadcrumb_separator ) {

					$breadcrumb_separator = '<span class="sep">' . esc_html( $breadcrumb_separator ) . '</span>';

				}

					$args = array(
						'delimiter' => $breadcrumb_separator,
						'before'    => '<span class="breadcrumb">',
						'after'     => '</span>',
					);

					woocommerce_breadcrumb( $args );

					?>

				</div><!-- .wrapper -->
			</div><!-- .breadcrumb-area -->

			<?php

			$breadcrumb = ob_get_clean();

		else :

			$breadcrumb = self::custom_breadcrumb();

		endif;

		return $breadcrumb;
	}

	public function show_breadcrumb() {

		echo '<div id="catch-breadcrumb-container">' . wp_kses( $this->build_breadcrumb(), 'post' ) . '</div>';

	}

	public function custom_breadcrumb() {

		$atts = array(
			'before'       => '<span class="breadcrumb-current">',    // code before the breadcrumb section
			'after'        => '</span>',    // code after the breadcrumb section
			'show_current' => 1, // 1 - show current post/page title in breadcrumbs, 0 - don't show
			'echo'         => true,
			'link_before'  => '<span class="breadcrumb">',
			'link_after'   => '</span>',
		);

		$catch_breadcrumb_options = catch_breadcrumb_get_options();

		if ( $catch_breadcrumb_options['breadcrumb_separator'] ) {

			$catch_breadcrumb_options['breadcrumb_separator'] = '<span class="sep">' . esc_html( $catch_breadcrumb_options['breadcrumb_separator'] ) . '</span>';

		}

		/* === OPTIONS === */
		$text['home'] = esc_html__( 'Home', 'catch-breadcrumb' ); // text for the 'Home' link
		/* translators: 1: before text/html, 2: after text/html. */
		$text['category'] = esc_html__( '%1$s Archive for %2$s', 'catch-breadcrumb' ); // text for a category page
		/* translators: 1: before text/html, 2: after text/html. */
		$text['search'] = esc_html__( '%1$sSearch results for: %2$s', 'catch-breadcrumb' ); // text for a search results page
		/* translators: 1: before text/html, 2: after text/html. */
		$text['tag'] = esc_html__( '%1$sPosts tagged %2$s', 'catch-breadcrumb' ); // text for a tag page
		/* translators: 1: before text/html, 2: after text/html. */
		$text['author'] = esc_html__( '%1$sView all posts by %2$s', 'catch-breadcrumb' ); // text for an author page
		$text['404']    = esc_html__( 'Error 404', 'catch-breadcrumb' ); // text for the 404 page
		/* === END OF OPTIONS === */
		global $post, $paged, $page;
		$home_link = home_url( '/' );

		ob_start();
		$home_icon = '';

		if ( isset( $catch_breadcrumb_options['breadcrumb_home_icon'] ) && '1' == $catch_breadcrumb_options['breadcrumb_home_icon'] ) {

			$home_icon = '<span class="fa fa-home"></span> ';

		}

		$link_home_front = $atts['link_before'] . '<a href="%1$s">' . wp_kses_post( $home_icon ) . '%2$s</a>' . $atts['link_after'];

		$link_home = $atts['link_before'] . '<a href="%1$s">' . wp_kses_post($home_icon) . '%2$s</a>' . wp_kses_post( $catch_breadcrumb_options['breadcrumb_separator'] ) . $atts['link_after'];

		$link = $atts['link_before'] . '<a href="%1$s">' . '%2$s</a>' . wp_kses_post( $catch_breadcrumb_options['breadcrumb_separator'] ) . $atts['link_after'];

		if ( is_front_page() ) {

			if ( $catch_breadcrumb_options['breadcrumb_display_home'] ) {

				?>

				<div id="catch-breadcrumb" class="catch-breadcrumb breadcrumb-area custom"><nav class="entry-breadcrumbs">

				<?php

				echo sprintf( $link_home_front, esc_url( home_url( '/' ) ), $text['home'] ); // WPCS: XSS OK.

				?>

				</nav><!-- .entry-breadcrumbs --></div><!-- .breadcrumb-area -->

				<?php

			}
		} else {

			?>

			<div id="catch-breadcrumb" class="catch-breadcrumb breadcrumb-area custom"><nav class="entry-breadcrumbs">

			<?php

			echo sprintf( $link_home, esc_url( $home_link ), $text['home'] ); // WPCS: XSS OK.

			if ( is_home() ) {

				echo $atts['before'] . esc_html( get_the_title( get_option( 'page_for_posts', true ) ) ) . $atts['after'];
				// WPCS: XSS OK.

			} elseif ( is_category() ) {

				$this_cat = get_category( get_query_var( 'cat' ), false );

				if ( 0 != $this_cat->parent ) {

					$cats = get_category_parents( $this_cat->parent, true, false );
					$cats = str_replace( '<a', $atts['link_before'] . '<a', $cats );
					$cats = str_replace( '</a>', '</a>' . wp_kses_post( $catch_breadcrumb_options['breadcrumb_separator'] ), $cats );
					$cats = str_replace( '</a>', '</a>' . $atts['link_after'], $cats );
					echo $cats; // WPCS: XSS OK

				}

				the_archive_title( $atts['before'] . sprintf( $text['category'], '<span class="archive-text">', '</span>', $atts['after'] ) ); // WPCS: XSS OK.

			} elseif ( is_search() ) {

				echo $atts['before'] . sprintf( $text['search'], '<span class="search-text">', '</span>' . get_search_query() ) . $atts['after'];
				// WPCS: XSS OK.

			} elseif ( is_day() ) {

				echo sprintf( $link, esc_url( get_year_link( get_the_time( esc_html__( 'Y', 'catch-breadcrumb' ) ) ) ), esc_html( get_the_time( esc_html__( 'Y', 'catch-breadcrumb' ) ) ) ); // WPCS: XSS OK.
				echo sprintf( $link, esc_url( get_month_link( get_the_time( esc_html__( 'Y', 'catch-breadcrumb' ) ), get_the_time( esc_html__( 'm', 'catch-breadcrumb-pro' ) ) ) ), esc_html( get_the_time( esc_html__( 'F', 'catch-breadcrumb' ) ) ) ); // WPCS: XSS OK.
				echo $atts['before'] . esc_html( get_the_time( esc_html__( 'd', 'catch-breadcrumb' ) ) ) . $atts['after']; // WPCS: XSS OK.

			} elseif ( is_month() ) {

				echo sprintf( $link, esc_url( get_year_link( get_the_time( esc_html__( 'Y', 'catch-breadcrumb' ) ) ) ), esc_html( get_the_time( esc_html__( 'Y', 'catch-breadcrumb' ) ) ) ); // WPCS: XSS OK.
				echo $atts['before'] . esc_html( get_the_time( esc_html__( 'F', 'catch-breadcrumb' ) ) ) . $atts['after']; // WPCS: XSS OK

			} elseif ( is_year() ) {

				echo $atts['before'] . esc_html( get_the_time( esc_html__( 'Y', 'catch-breadcrumb' ) ) ) . $atts['after']; // WPCS: XSS OK

			} elseif ( is_single() && ! is_attachment() ) {

				if ( get_post_type() != 'post' ) {

					$post_type = get_post_type_object( get_post_type() );
					$post_link = get_post_type_archive_link( $post_type->name );
					printf( $link, esc_url( $post_link ), esc_html( $post_type->labels->singular_name ) ); // WPCS: XSS OK.
					echo $atts['before'] . esc_html( get_the_title() ) . $atts['after']; // WPCS: XSS OK.

				} else {

					$cat = get_the_category();
					$cat = $cat[0];

					if ( ! empty( $cat ) ) {

							$cats = get_category_parents( $cat, true, '' );
							$cats = preg_replace( '#^(.+)$#', '$1', $cats );
							$cats = str_replace( '<a', $atts['link_before'] . '<a', $cats );
							$cats = str_replace( '</a>', '</a>' . wp_kses_post( $catch_breadcrumb_options['breadcrumb_separator'] ), $cats );
							$cats = str_replace( '</a>', '</a>' . $atts['link_after'], $cats );
							echo $cats;  // WPCS: XSS OK.

					}

					echo $atts['before'] . esc_html( get_the_title() ) . $atts['after']; // WPCS: XSS 	OK.

				}

			} elseif ( ! is_single() && ! is_page() && get_post_type() != 'post' && ! is_404() ) {

						$post_type = get_post_type_object( get_post_type() );
						echo isset( $post_type->labels->singular_name ) ? $atts['before'] . esc_html( $post_type->labels->singular_name ) . $atts['after'] : ''; // WPCS: XSS OK.

			} elseif ( is_attachment() ) {

				$parent = get_post( $post->post_parent );
				$cat    = get_the_category( $parent->ID );

				if ( isset( $cat[0] ) ) {

					$cat = $cat[0];

				}

				if ( $cat ) {

					$cats = get_category_parents( $cat, true );
					$cats = str_replace( '<a', $atts['link_before'] . '<a', $cats );
					$cats = str_replace( '</a>', '</a>' . wp_kses_post( $catch_breadcrumb_options['breadcrumb_separator'] ), $cats );
					$cats = str_replace( '</a>', '</a>' . $atts['link_after'], $cats );
					echo $cats; // WPCS: XSS OK.

				}

				printf( $link, esc_url( get_permalink( $parent ) ), esc_html( $parent->post_title ) ); // WPCS: XSS OK.
				echo $atts['before'] . esc_html( get_the_title() ) . $atts['after']; // WPCS: XSS OK.

			} elseif ( is_page() && ! $post->post_parent ) {

				echo $atts['before'] . esc_html( get_the_title() ) . $atts['after']; // WPCS: XSS OK.

			} elseif ( is_page() && $post->post_parent ) {

				$parent_id   = $post->post_parent;
				$breadcrumbs = array();

				while ( $parent_id ) {

					$page_child    = get_post( $parent_id );
					$breadcrumbs[] = sprintf( $link, esc_url( get_permalink( $page_child->ID ) ), esc_html( get_the_title( $page_child->ID ) ) );
					$parent_id     = $page_child->post_parent;

				}

				$breadcrumbs = array_reverse( $breadcrumbs );

				for ( $i = 0; $i < count( $breadcrumbs ); $i++ ) {

					echo $breadcrumbs[ $i ];  // WPCS: XSS OK.

				}

				echo $atts['before'] . esc_html( get_the_title() ) . $atts['after']; // WPCS: XSS OK.

			} elseif ( is_tag() ) {

				the_archive_title( $atts['before'] . sprintf( $text['tag'], '<span class="tag-text">', '</span>' ), $atts['after'] );   // WPCS: XSS OK

			} elseif ( is_author() ) {

				global $author;
				$userdata = get_userdata( $author );
				echo $atts['before'] . sprintf( $text['author'], '<span class="author-text">', '</span>' . $userdata->display_name ) . $atts['after'];  // WPCS: XSS OK.

			} elseif ( is_404() ) {

				echo $atts['before'] . $text['404'] . $atts['after'];  // WPCS: XSS OK.

			}

			if ( get_query_var( 'paged' ) ) {

				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) {

					echo' (';

				}

				/* translators: %s: current page number. */
				echo sprintf( esc_html__( 'Page %s', 'catch-breadcrumb' ), absint( max( $paged, $page ) ) );

				if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) {

					echo ')';

				}
			}

			?>

			</nav><!-- .entry-breadcrumbs --></div><!-- .breadcrumb-area -->

			<?php
		}

		$string = ob_get_clean();
		return $string;

	}

}
