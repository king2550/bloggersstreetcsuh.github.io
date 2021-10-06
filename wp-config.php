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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'aVJ.7{UX&&YjL/5OSU>*<JY;v/GGX,[)AGmk;*NvC8m/yk0mb/rS-#FRQtl4KF8N' );
define( 'SECURE_AUTH_KEY',  'JyfIU?#)X,z/tJAQx>ezr/aVgm0]aFz;zt<71[G?q#yX%z;(V4cAz9=4F2-M4%O>' );
define( 'LOGGED_IN_KEY',    ']f+5PTxRKYs[qMG7P%kXU+xMdHH(7=H?&Os+fJ!+1QYCjDZe9tr&2rlB=$au_RIE' );
define( 'NONCE_KEY',        'kK&7=lfv?D[v6Jo.~KD25<x(o<(yn.{},>IM}9[v0}!3&VE4 !x=usLi%bsW*-P#' );
define( 'AUTH_SALT',        '!99W#OWN2?2!#5jD0wgklfpq8*PgJFd*K4Mc]n/Nwz/Q7G]w-tP>0Vwnh*XMLWmL' );
define( 'SECURE_AUTH_SALT', ';9$&@c|G7&[9[Eu|Ue2WXVJKLyVb2sy *E5=2)?TGOCH#L}5xay>2-=aV-2O^$<!' );
define( 'LOGGED_IN_SALT',   'Kg p UF]e=/yY$XJG|:p&SmE}_c=}MnpF5W~a3Mc|_FGNw50F#^~&>lxS|U9bUev' );
define( 'NONCE_SALT',       'h_0?8?^cOIj6F6)7:42eS{=OVh3fy3=& } 5/Vk25Gixb({utr8G&qA*$q#Jx(h&' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
