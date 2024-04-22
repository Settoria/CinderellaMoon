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
define( 'DB_NAME', 'CinderellaMoon' );

/** Database username */
define( 'DB_USER', 'Admin' );

/** Database password */
define( 'DB_PASSWORD', 'Admin' );

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
define( 'AUTH_KEY',         'mTo35EbC^z,x<a$Qg:#% :*U%T@Q])DP;rbd+b6%7)2#M$m1SGb6~Z!UKHkus Kp' );
define( 'SECURE_AUTH_KEY',  'Fz$w1mvPUOB!Ush~bW&VKPPIyr+7O(uY+x}q>d>O)I(zw$6F!=c|KzC%e#-j#Uv.' );
define( 'LOGGED_IN_KEY',    ',D:5i6g:ms9z(5pw0e}5I_Yo|`hMl~w3nJ{{),wV/:~vE~)IG%+Qg*Dw/y1RBZq{' );
define( 'NONCE_KEY',        'sp:5K)t0eX&ZuxfZ;D@{<R1Jw[wwetti[)fIRh410Mw``C*9N=z*8+9P}ov)M+>(' );
define( 'AUTH_SALT',        '3sGHMh,ue^3w,GN|1Ae`+~UpN{;R^+|~<N?P{9.(sk6(c#.up}4h5=J0XsTk6wtV' );
define( 'SECURE_AUTH_SALT', 'VlO9xT>T,ueJ!K_j$-nTg1 ByohGQd4Z>X^1~q3~qUw#.5dO;PlbY:,ww>mYfqf4' );
define( 'LOGGED_IN_SALT',   '%#(2gZ(Sb``-@}WnpeCZ>yye(yqJ!$GQ~RU];`Ct,09$eD]spft9wT&>nBO8Tmk;' );
define( 'NONCE_SALT',       '[3lzBc$MXhK uH UWoiQNwAgIr!e]O##.`.=tiJIqy?d;eH&HPWAZWi_F$/#`DLw' );

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
