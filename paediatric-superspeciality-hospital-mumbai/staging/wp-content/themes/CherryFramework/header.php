<!DOCTYPE html>

<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes();?>> <![endif]-->

<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes();?>> <![endif]-->

<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes();?>> <![endif]-->

<!--[if IE 9 ]><html class="ie ie9" <?php language_attributes();?>> <![endif]-->

<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes();?>> <!--<![endif]-->

<head>

	<!-- Importing Font Awesome Icons -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<title><?php if ( is_category() ) {

		echo theme_locals("category_for")." &quot;"; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );

	} elseif ( is_tag() ) {

		echo theme_locals("tag_for")." &quot;"; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );

	} elseif ( is_archive() ) {

		wp_title(''); echo " ".theme_locals("archive")." | "; bloginfo( 'name' );

	} elseif ( is_search() ) {

		echo theme_locals("fearch_for")." &quot;".esc_html($s).'&quot; | '; bloginfo( 'name' );

	} elseif ( is_home() || is_front_page()) {

		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );

	}  elseif ( is_404() ) {

		echo theme_locals("error_404")." | "; bloginfo( 'name' );

	} elseif ( is_single() ) {

		wp_title('');

	} else {

		wp_title( ' | ', true, 'right' ); bloginfo( 'name' );

	} ?></title>

	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="//gmpg.org/xfn/11" />

	<?php if(of_get_option('favicon') != ''){ ?>

	<link rel="icon" href="<?php echo of_get_option('favicon', '' ); ?>" type="image/x-icon" />

	<?php } else { ?>

	<link rel="icon" href="<?php echo CHILD_URL; ?>/favicon.ico" type="image/x-icon" />

	<?php } ?>

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />

	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php echo CHILD_URL; ?>/bootstrap/css/bootstrap.css" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php echo CHILD_URL; ?>/bootstrap/css/responsive.css" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php echo PARENT_URL; ?>/css/camera.css" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	<?php

		/* Always have wp_head() just before the closing </head>

		 * tag of your theme, or you will break many plugins, which

		 * generally use this hook to add elements to <head> such

		 * as styles, scripts, and meta tags.

		 */

		wp_head();

	?>

	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>

	<!--[if lt IE 9]>

		<div id="ie7-alert" style="width: 100%; text-align:center;">

			<img src="http://tmbhtest.com/images/ie7.jpg" alt="Upgrade IE 8" width="640" height="344" border="0" usemap="#Map" />

			<map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" /><area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />

			</map>

		</div>

	<![endif]-->

	<!--[if gte IE 9]><!-->

		<script src="<?php echo PARENT_URL; ?>/js/jquery.mobile.customized.min.js" type="text/javascript"></script>

		<script type="text/javascript">

			jQuery(function(){

				jQuery('.sf-menu').mobileMenu({defaultText: <?php echo '"' . apply_filters( 'cherry_text_translate', html_entity_decode( of_get_option('mobile_menu_label') ), 'mobile_menu_label' ) . '"'; ?>});

			});

		</script>

	<!--<![endif]-->

	<script type="text/javascript">

		// Init navigation menu

		jQuery(function(){

		// main navigation init

			jQuery('ul.sf-menu').superfish({

				delay: <?php echo (of_get_option('sf_delay')!='') ? of_get_option('sf_delay') : 600; ?>, // the delay in milliseconds that the mouse can remain outside a sub-menu without it closing

				animation: {

					opacity: "<?php echo (of_get_option('sf_f_animation')!='') ? of_get_option('sf_f_animation') : 'show'; ?>",

					height: "<?php echo (of_get_option('sf_sl_animation')!='') ? of_get_option('sf_sl_animation') : 'show'; ?>"

				}, // used to animate the sub-menu open

				speed: "<?php echo (of_get_option('sf_speed')!='') ? of_get_option('sf_speed') : 'normal'; ?>", // animation speed

				autoArrows: <?php echo (of_get_option('sf_arrows')==false) ? 'false' : of_get_option('sf_arrows'); ?>, // generation of arrow mark-up (for submenu)

				disableHI: true // to disable hoverIntent detection

			});



		//Zoom fix

		//IPad/IPhone

			var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),

				ua = navigator.userAgent,

				gestureStart = function () {

					viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";

				},

				scaleFix = function () {

					if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {

						viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";

						document.addEventListener("gesturestart", gestureStart, false);

					}

				};

			scaleFix();

		})

	</script>

	<!-- stick up menu -->

	<script type="text/javascript">

		jQuery(document).ready(function(){

			if(!device.mobile() && !device.tablet()){

				jQuery('<?php echo apply_filters( "cherry_stickmenu_selector", ".header .nav__primary" ); ?>').tmStickUp({

					correctionSelector: jQuery('#wpadminbar')

				,	listenSelector: jQuery('<?php echo apply_filters( "cherry_stickmenu_listen_selector", ".listenSelector" ); ?>')

				,	active: <?php echo (of_get_option('stickup_menu', 'false')=="false") ? 'false' : 'true'; ?>

				,	pseudo: <?php echo apply_filters( "cherry_stickmenu_option_pseudo", "true" ); ?>

				});

			}

		})

	</script>



	<!-- Facebook Pixel Code -->

<script>

!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?

n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;

n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;

t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,

document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1070437072982083'); // Insert your pixel ID here.

fbq('track', 'PageView');

</script>

<noscript><img height="1" width="1" style="display:none"

src="https://www.facebook.com/tr?id=1070437072982083&ev=PageView&noscript=1"

/></noscript>

<!-- DO NOT MODIFY -->

<!-- End Facebook Pixel Code -->

</head>

<body <?php body_class(); ?>>

	<div id="motopress-main" class="main-holder">

		<!--Begin #motopress-main-->

				<!-- Font Awesome Icons and Custom Written Code -->

				<div class="container">

				<div class="row" id="social-container" style="padding:5px 0;">

					

					<div class="span6 header-contact-us" style=" color:#cc3366 !important; font-size:16px !important; margin-top:15px !important; height:40px;">

						<strong>Helpline No.:</strong> Mumbai: +91-22-6153 8989 | Pune:  020 67915400/01

				</div>
                	<div class="span6 text-right">
                    
                    
<?php
$sites = get_sites();
//echo "<pre>";print_r( $sites );echo "</pre>";
?>                    
                    
                    <a href="book-an-appointment/" class="btn btn-primary btn-large" id="book_appointment">Book an Appointment</a></div>

					

					

				</div>

  

</div>

				<!-- Font Awesome Icons Custom Written Code End -->

		<header class="motopress-wrapper header">

			<div class="container">



				<div class="row"  id="navigation-row">

					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?> custom-class" data-motopress-wrapper-file="wrapper/wrapper-header.php" data-motopress-wrapper-type="header" data-motopress-id="<?php echo uniqid() ?>">
						<?php get_template_part('wrapper/wrapper-header'); ?>
					</div>
				</div>
			</div>
			<?php if( is_front_page() ) { ?>
                <div class="row">
                    <div class="<?php echo apply_filters( 'cherry_home_layout', '_span12_' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-slider.php">
                        <?php get_template_part("static/static-slider"); ?>
                    </div>
                </div>
            <?php } ?>
		</header>