<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dbgbdci07hypk8');

/** MySQL database username */
define('DB_USER', 'umebtocdf6ogj');

/** MySQL database password */
define('DB_PASSWORD', 'mbpggim9az2a');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define( 'WP_HOME', 'https://suryahospitals.com/surya' );
define( 'WP_SITEURL', 'https://suryahospitals.com/surya' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'G3}gKo+-V+E^lZO_zw_HuE9a$R+8:S{Pi>g77y}tS$;v*+V k1=gk!543)5|z#,Y');
define('SECURE_AUTH_KEY',  'WzlyG4+182{+MR/r-=T!mp,5kIG,@wr[tpi}zv1v?22|;k%-]D-4|pPq+S>jn<K3');
define('LOGGED_IN_KEY',    '/sN62}ChK/|3<6%?|ELnw}%H;xGH5S@.vo(Bm0-G1l4%W-V3AVF@[m/mbYe|l;|s');
define('NONCE_KEY',        'Ke9J]`V2$]iADfRe%`g0Si8mI/Jv%Sa0S/BTA8P7lTy(,53(-J/l3kl|aFbJl#%)');
define('AUTH_SALT',        'F5 R=pEJt__bP3n^w%8ksWJqnSqUfqVk53]}?M)q9r!c+.SAXxWIx0.f5*0F5|,n');
define('SECURE_AUTH_SALT', '%OfK<x};3mkqObV4HP<o2!Ij9Di?nq[WUH9wzXc,5vwmzsH&Ysi _a6S1SwJONl?');
define('LOGGED_IN_SALT',   's[,/G-g0oY0y5stHCcOpvp9&7y51qn$%TIjkE.o1!$^EiYBp$R ]Rz|>aO<v<77p');
define('NONCE_SALT',       ':O0z%=O+Gb0Va>Kl][)I$}]DP>:e9~t;Nw~lDN=S#i99dt.0tUdl+q?i:&t_iMc&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/** Multisite */ 
define('WP_ALLOW_MULTISITE', true); 
define('MULTISITE', true); 
define('SUBDOMAIN_INSTALL', false); 
define('DOMAIN_CURRENT_SITE', 'suryahospitals.com'); 
define('PATH_CURRENT_SITE', '/'); 
define('SITE_ID_CURRENT_SITE', 1); 
define('BLOG_ID_CURRENT_SITE', 1); 
/* That's all, stop editing! Happy blogging. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';