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
define( 'DB_NAME', 'wp-blog-instructory' );

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
define( 'AUTH_KEY',         '#3;6_$.LZr?5#-H47jcs:tuqi5I_j9&1BAr<9natqTF7<E8-ZzJI!Sjakt|,SAT-' );
define( 'SECURE_AUTH_KEY',  'z6uvgIL%HY@pr{t?|.hFI`rgSs{@aL?W)/@:<z)0a_c({tSB3D*V:f0VlnW5;4&:' );
define( 'LOGGED_IN_KEY',    '/,)*@(4W|6AiH}ZO!4v<`TL`ySV1YV&mge;$uRKmyT%+Lt?2$KM%aE(]mtO{L s9' );
define( 'NONCE_KEY',        'kx6QvN>:Kc2jV!vt%xpF.R=FLhp-USu,1PvT<DZv6qsxA6SK2>RYLPKeF$Lp1YzC' );
define( 'AUTH_SALT',        '`@sM4H-[9.I==o0Xf;rONs-LCs.t)*!FpEpdN~=,3:{*MIXWT#z%)!5U@8aJ4TTV' );
define( 'SECURE_AUTH_SALT', 'Gj<!*q(!4(fl^~]H#~$Zk{P`b9#kDBciy~xIs*%A;P_kmiSu#Ojdm@yb,GT/&M`*' );
define( 'LOGGED_IN_SALT',   '!B .1WhVE|&<IK$N2kt>4!&J1&AkP~6rD&!0{gI):e!],ctu Swu%_xAC=Blyt_!' );
define( 'NONCE_SALT',       'dxl|jVvJfiM|DF)!P&:D.eGk[!i=;R[}9use4}#$:=L.>SOw%F?a=/MX1v~Wbu3M' );

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
