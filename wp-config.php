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
define( 'AUTH_KEY',          'G@I+I`/[s9lznN{nyg3y;G9l)/&DNl8-8?MQ79il_n[i*`BYL(lx`  i_#{Ec``D' );
define( 'SECURE_AUTH_KEY',   '59!gr4/QuSUG;u7qHx0+>i{>DVX&B_i:+xSE5T)<:0D5.%H`gkcOa|8TIZOL]}:]' );
define( 'LOGGED_IN_KEY',     '2UMQLupz$+r|XQp>i)3ibh[35hg&E:NdZ*:2w>E}Txs1%` 9[?2B:AMicMJ[3Hj,' );
define( 'NONCE_KEY',         '! /br:8uFx73OQ.<.)3X3^+qnVdl.AfH)N-?YYS-Q7CQ,]qVp`q>b|KwJ6Uwn{)]' );
define( 'AUTH_SALT',         '_?y_NMwvC0UETT-`rekF`cd=:+YnE?n(`59YikpPP#1RRleQ>04dJ#J-[Hczlju@' );
define( 'SECURE_AUTH_SALT',  'e~utKiQ+~LS&ZkZza{:;VZ%XXrf{pC=BqUPwES!TEb=OCi-nsv;?Mati|SsJ^=9a' );
define( 'LOGGED_IN_SALT',    '9Aj+5n x(y*]P&Joji:kQA>{as2(7`P/t}Hi`Opwdk$qi$O5eYb8$2 mh@ *kGl!' );
define( 'NONCE_SALT',        'CN.Q+[np([1:(0&Q^XJVtH+uR`OQRZ~{=Y7/jrn~+6V71/^_8Ca9eoHd-SbWp?_L' );
define( 'WP_CACHE_KEY_SALT', 'D>O[dwC7*Yw`5N@)x1cw9De6dMy6f3.fW#k^D9DoWMVLkyM!Fg[J[1Dn<ef_bg*P' );


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
