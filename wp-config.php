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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'daves_property' );

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
define( 'AUTH_KEY',         't3Vr]_&UF!:<#$gb@tAV~GWTb5yCPBp0e{0m&5>qIfiU<k{kyo}}sGEKNyrA>;{,' );
define( 'SECURE_AUTH_KEY',  'g6UrM,#[q2D&yxT}>(A]GA(4vtA];!j$l#&0Zt^j)cl(Y=kC9{N_>YL^Tb4dD9]^' );
define( 'LOGGED_IN_KEY',    'X.^j3_}cBD5n4a6,<!xdG]xuN.>eY7qYNye s1N,5MlIMrOe$MJ2~:R%~[mb1*W=' );
define( 'NONCE_KEY',        'kn<-~}rvw?,t?7(7k?2.@ig01N5:fvb}Xm*+hv`BLO*apab{~5s,%OJP;N6f=9CI' );
define( 'AUTH_SALT',        'KquQJa /hJer7Lu%%I6!zpK}6aEAB]H.:.>H;D#)afbQ^)O`=yj%3]#aST<AaqK}' );
define( 'SECURE_AUTH_SALT', 'a<R}1@un 7_ZrZ#jGX474i&[k[M%]~>Y;X>%M^ZTDK^m!rD/D)#`>g!}SD]:GYP3' );
define( 'LOGGED_IN_SALT',   'h&dXWQ`V>)FVBU}*#zJ$.BTnM>A w3H=lgD^g3!8Az*paBk,<myGV!2lI+GTZvJ(' );
define( 'NONCE_SALT',       'aVL>4X3yi:J9_ue=Vm]!4*Y{/K1vt.R]hWfF2[)eum/bTfP:W_Atyc9YZR,1.[A!' );

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
