<?php
define( 'WP_CACHE', false ); // By SiteGround Optimizer

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
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbgbdci07hypk8' );

/** MySQL database username */
define( 'DB_USER', 'umebtocdf6ogj' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mbpggim9az2a' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
define('WP_POST_REVISIONS', false);
/** The Database Collate type. Don't change this if in doubt. */
// define( 'DB_COLLATE', '' );
// define( 'WP_HOME', 'https://suryahospitals.com' );
// define( 'WP_SITEURL', 'https://www.suryahospitals.com' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uMH;I/),PMynKk}v$Fb(Bgza0U2B3G(@J?2p.k./NLvkq`/DTGnHiuHE8BJX0 8d' );
define( 'SECURE_AUTH_KEY',  ',8^U}Ci&Se!*C%TFbYDwT?cy7V6IAgO[;N[~y-uZ*Iz{>XFT{wDoA4xi(c|GYA(Q' );
define( 'LOGGED_IN_KEY',    'y{@Rj3(8+A(AvqE[9L}y=cTiSRDie<_/Qr!.04mO>BfccK#zKMdz0xALLyYN$>d?' );
define( 'NONCE_KEY',        '^+#Y8npVEA,kgy08%ykt3&E=ov_|tG)>rDLH^#VTt,?N=Rd^V[I)`WITx6P]IVMq' );
define( 'AUTH_SALT',        '7vKh]Q6hgxZ{$*iqRCx}IB8q R 7`UWhPBcz3eE)Tq`=Z&,-eHW5xRw<D Q%`Gsf' );
define( 'SECURE_AUTH_SALT', 'SjfQj~}7QpE7gIiC,O7FD1WL~ V-&>c0Y?B4S/Vz<bwTfP119EiA1Cn]~zb!%GG[' );
define( 'LOGGED_IN_SALT',   'zzHP}En]IRZ{JaTLUE|mep>r9qYRV?m^neN_U3>MFpiTg$QJ==NQG>+.^W,K_v^)' );
define( 'NONCE_SALT',       'A9R |B.LdS}3J/tV.y<l 2By{M%=_q_+<1gYy|.G<g~|f[k$VHa-]$Id719ld-?$' );

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
// define( 'WP_DEBUG', false );
// // /* Multisite */
// define( 'WP_ALLOW_MULTISITE', true );
// define('MULTISITE', true);
//  define('SUBDOMAIN_INSTALL', false);
// define('DOMAIN_CURRENT_SITE', 'suryahospitals.com');
// define('PATH_CURRENT_SITE', '/');
//  define('SITE_ID_CURRENT_SITE', 1);
// define('BLOG_ID_CURRENT_SITE', 1); 
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
