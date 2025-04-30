<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'b]6|*F_fTC+ftf?E|$N$$lW9.Pj#(|t.M!D@-!1E5[?-w]u6Kq&zyg4(>iI3)]#q' );
define( 'SECURE_AUTH_KEY',   'n8Dx$oW`Xe dme)l,S#G028PnQqu>WXy%Lxgpes}J{qn2I?Z_Q*@fDJ?FHOa7XnV' );
define( 'LOGGED_IN_KEY',     '1~er=k5~q<?{d<4+UO9m*1-0M#=$J?dsQ =<s>1n1bVCGnFe`f77NG,kQ{?KXDWN' );
define( 'NONCE_KEY',         '<eX2#ero&&AS$x>iz,F<,xN 9[L4`}*d 5NFN#yqSdi04_*MV[l; Mc*zRE- TBF' );
define( 'AUTH_SALT',         '?r36<~<!ac;JbL) ?y`1`+f;yjI6YmE~n XwiUO-{O$&pD!{ZASp:q<DwLKSu%x[' );
define( 'SECURE_AUTH_SALT',  '2}&c&L2R4Wg4y!`<]ULR2@z@U*w-6(/4jvOdd`vQFYQ;u)|*]Q[P{ZRnMBMZi40$' );
define( 'LOGGED_IN_SALT',    '.#c;:t +SC_T{$GEn7 b_Dx{Mlr>/nsEDiN7m}Qe{!)TjJ=LHvE`uJ V2|C6vg33' );
define( 'NONCE_SALT',        ')]*x0#hvX34VkF$8OX!jxYCcC!5?3n?x)n>(n8AK}C<}zb$8{y2$]nhH=WMJ}ts9' );
define( 'WP_CACHE_KEY_SALT', '*4Vg_3{jghs_F@y06V30nE}rMT/`=6|Tay[SXQf]zo5ki!,3xp|W%CwvSf@-8_ef' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
