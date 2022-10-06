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
define( 'DB_NAME', 'Prog_Gestionnaire' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'J+nU2(hnv7Vi#.W<eG09;q,a<&n- 5q~l|nuTw+9*EkMLw1k_VlMoZS^*TY Ny/L' );
define( 'SECURE_AUTH_KEY',  'jH,HCFPS6@K6;8TmH{u>~tU}PJZ~e_KeC[+!P:o$rY52nsvdih462y22R9__j&rI' );
define( 'LOGGED_IN_KEY',    'Wp%lEP$]}6(^C9>`.~Jfp~uBFX-<k#F&`G*9dbm;YV,B.S4r};E4]<`T~bX(?^g3' );
define( 'NONCE_KEY',        'fT+$PX(BFbf4:sPs28Bd.#cYsmqUqk%}T{_{^PY(6)NQ2.,6Q{3V`;TEApg :EZs' );
define( 'AUTH_SALT',        'mtc)|V](nOd~F2DKr``tULz-`Ru+fWWyE.P4H=JKEMyN|{!0uqwsm$FQQwyeXFDy' );
define( 'SECURE_AUTH_SALT', '*&28!TN /E2{K,I7AzV&v_T8_5fxe%9 @=`l{AQHJI#a48|xxl59[{ SRaJ|WaV.' );
define( 'LOGGED_IN_SALT',   'Pd/IkrNfW1%_}jt4{zW*cO![=`N$GaypmUl0qnq!<,XurY]N2jrh6Kyzdm X7wz5' );
define( 'NONCE_SALT',       'Q=NZc?p&X2G*=x;0jObpa~3=Z5&XDgpdV]D}!NJyMmQ2jH)2%&XFkCTw)RyT ?.I' );

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
