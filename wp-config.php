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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'JC' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'S<f<5ax-`;SJA9Y*CNb9y<1xr!FK{;82SE4j6?KY:l2B(#w:4i5Hk{ov<:O~57xS' );
define( 'SECURE_AUTH_KEY',  '8{xjMi1y*w;OE|yP,{1J]a*724tZPFB9AQDL<aJWIl4CC-L E + pdQ2`}aSzD,~' );
define( 'LOGGED_IN_KEY',    'PrlV8;.dYS<nU,/YiU!2iJGR[gw:=%2^kmr](Hz$)p-sU@e_dx_b,rZ&![]wrO@R' );
define( 'NONCE_KEY',        '$fuBy!_xb/4<F52lGs@H>DkO:N[GxV/5[7EaRMmG<L*OM)?gs~#N$H$IeOcaN*lp' );
define( 'AUTH_SALT',        '^u7|j&iR^0]D[^/|Vbn7Y5RjCcUs:BWoZ[]vRhVua s)[kS<h4t/V)Fe#>G`,|P+' );
define( 'SECURE_AUTH_SALT', '3lsq3nu8XOYRKRS(=T@o`j6DE-n0),mTaeX<K#ooZ^[Hr_R)Q6eL^Nm[ /M#T-:$' );
define( 'LOGGED_IN_SALT',   '+!G&tvTrrU#wL__YyClze5u4w1{Ju34/-3iR669S.D0S?An^`X2W``U!Zpq?%HDG' );
define( 'NONCE_SALT',       ' lDIswb>+$t?C?b-y-/1}-muB,6U6~j8SZ1F),p{e9Xic Ccefr@}`P>il0,[[m.' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
