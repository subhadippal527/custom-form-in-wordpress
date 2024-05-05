<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp-practice' );

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
define( 'AUTH_KEY',         '*R6c7kaL8bX[6j4VjQksuei2sIWUo^E?Sjx77.Cy>1_T~Z=ocMfeekhjf;h]CSzG' );
define( 'SECURE_AUTH_KEY',  'u(;zT}I*S]:|Kd0=-w!d8x]Y:.t&%<Y)0[m6.$OPQ4f.wo8Wmce;,0~K7Im8w$&S' );
define( 'LOGGED_IN_KEY',    'e5e_c;#[u]`[OM7W3n2Jw$+Xpx C$,v1_nVB+^s$eeLISU2z]i_u_9m;4vgEHmXL' );
define( 'NONCE_KEY',        '&ulSwU9nWA1 VQ}cOWPO/VKB$q/Mo&zm(rQ.QNs0b4^YLZgB^ued7^5PuHoQI@$n' );
define( 'AUTH_SALT',        ']G$xmBza1&6Wn#SbdRYg(]IEGbpv4/!jy|R4bcIIaRpm3J)jCTFPn{p<Pq3GBD5R' );
define( 'SECURE_AUTH_SALT', 'pyJ,fIdR_mb3!KV#Lv5M67en~%GHPI!y0>06#/XXMTd.Om,oKvAn7ohE1x-U_P *' );
define( 'LOGGED_IN_SALT',   '>=N[Sf#^vuEUf]%]F!na`mVK_|4QD<w2hn7k%X$Mgtn;8y>%FG2zaCiMe9:& k+&' );
define( 'NONCE_SALT',       'Ui3BxlXnFnNy,*#/D;VFh&U~c*_.bA.OiH}%]tWGx`d7[7+-A_<}-p6&E_Wa`jTZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpp_';

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
