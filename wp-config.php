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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'z/(v,AWQs=eZ 4qizU=~^^idIpsFbMv{2-+!Zzt520kZ6upFa<qF|;[nAuB Pqp@' );
define( 'SECURE_AUTH_KEY',  'T%V*A|juko:JCOpZ(Le^rhdhQn;vhL!H[@89TP5yHFLr>R?oeQhU$T9@/J4`8Z%2' );
define( 'LOGGED_IN_KEY',    'y;|VV5^Q+p#XL[Q7Xx#e47H?)1JTjIIFn#l@!KA-04YG6y5E8mssZlD4f[B%Y`0.' );
define( 'NONCE_KEY',        'Wslx|O#mc5 viSy,_6HY]Sd;~Mju4KxktHz0OrSQh$C-TGOfdByCbUKkp!9F6,t.' );
define( 'AUTH_SALT',        '.Qe~cw]{^*dD]JqeOD&D56v=/^njSi&g*9J0E4;~[.zO(Eg~)!,P_3wc]pm m:mR' );
define( 'SECURE_AUTH_SALT', '^0QXn-g9G30|_E60>V5jT{@SvPwT@F7[/L3iBV};x+Jygv`smNg),<6tG,$OQqf-' );
define( 'LOGGED_IN_SALT',   '$)+??AxF|ebt7)`%uDaz~yN4ND;ev^poN(?#v`kABwb+{b&AE0@G@ [ZB[pJGyEw' );
define( 'NONCE_SALT',       '6UW21yTT]hp?c5H(dQC!d9cd]J=r6p0>aF8eY*QU=2Ogv<p>Z$vd5_kB}=*,LO^R' );

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
