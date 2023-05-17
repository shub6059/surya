<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'suryahos_live');

/** MySQL database username */
define('DB_USER', 'suryahos_live');

/** MySQL database password */
define('DB_PASSWORD', '5O{)K9[_sZJD');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$ivbAB%QSnzw1 dp?c a#!Fm*$h)Na]bc]GAA;HUhGf]hY%rI+xq?<}=Qw_+6,pO');
define('SECURE_AUTH_KEY',  'w_DYX)V~ jgO|}X^#xC:Uqxgr9ZNeH6g;eG*m*TUP1STp)LM%TWWmjekp] u*jX}');
define('LOGGED_IN_KEY',    '=t#5*51&5+q`u@YA1+LkIlxJLh2wtGM11;h[X_PN^xszakETd(;3O%h@*PPH_*JC');
define('NONCE_KEY',        'DG9P34Rs1^a3W$v%^3b21v3y.GVvjpVp3kVn7[>S#<b7s&xAKQAc5kOtfJLl5u$h');
define('AUTH_SALT',        'p`<Q7ca(edS~rD*ypf#^%,(IO56_yJne28k:ws6FW-.25@~Duw#6fsl=LxBjrd<H');
define('SECURE_AUTH_SALT', 'Bh)2w?4gQvtN K*_%.t<=bZB/M~4S6JGrHUZ+-adz@oF0W[7W{5TW+E`fD3?%0Ej');
define('LOGGED_IN_SALT',   'S.*}&6z7&crz,?AqJ|uj?G!vp^|x)OC?Tl) z08oJco{j;fwNLYg/9T_42,A%_C@');
define('NONCE_SALT',       's}kQT^I*t$VOcXY9^V2$77X-kox:!Yc=wl8+{hclB$W^9;zzc,Bh62zrXm#_N!RJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xs_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
define('WP_MEMORY_LIMIT', '1256M');

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'suryahospitals.com');
define('PATH_CURRENT_SITE', '/staging/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once(ABSPATH . 'wp-settings.php');
//Disable File Edits
define('DISALLOW_FILE_EDIT', false);




@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
