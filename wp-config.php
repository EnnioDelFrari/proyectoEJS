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
define( 'DB_NAME', 'dbproyectoEJS' );

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
define( 'AUTH_KEY',         'ZZ7Jau?(K7<8H&)(7$?5Q,` R23h2IWC;?_@4BT-kZVZ?S%&LJ56l|kKX:~)u(*i' );
define( 'SECURE_AUTH_KEY',  '>uBXLMg>iMw[L%WXa]3mM.$(X_2JWN7vpUI~LP-#Cd79 M|yr*Y$jP2+Gd0 ?jLc' );
define( 'LOGGED_IN_KEY',    'Ir_:l}W<Xpt07Qr2Z.DIj`I]g5#3)Qw-qK)_OxM}|Iv6[4y^H`5g ru<Y{AX[?nn' );
define( 'NONCE_KEY',        's)h=_>|G?LgwIb>aAD=oj_D~V7k8yZ]rBY$+v-??-R[Hg@@6g2@#Y#QnLNjMmuEO' );
define( 'AUTH_SALT',        'd$d>N;_.<;kr$2[,UO>#/+`x~b^~2iB4V|?JYu6J3q5[AV{=cSmRrvgmrio-JNc!' );
define( 'SECURE_AUTH_SALT', 'I zm]:#>csIq#!kf[:$-+/T=/ss|DO1,;LC*XudQHeIq!U9ay{e7&3/sx:ccGV+`' );
define( 'LOGGED_IN_SALT',   ';gyg|,r,<U=+8rrbg)0;i/vLDnCXf_5.-7P!)qFb *55 k!LvF`AWaDQcWu5GWBC' );
define( 'NONCE_SALT',       '$sK=_&SvdF:AUvFH,)Z` QMb@(r53|AAOLql9Q[nT/7N0^Y9`oo42O%pWNZqk~s6' );

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
