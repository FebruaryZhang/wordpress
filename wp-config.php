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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         ';?}VwA| ~-%Z_MM7 {DBXze{yI/(+4,hB?nwP=,A?3[*9O^|&R}aw3L#3D:dxx_!' );
define( 'SECURE_AUTH_KEY',  'K[op=IB+gzbSRkr>T;k-@-GY3c%zZsFq:zN+#%<l=Q^5Uhb#ezp9V=m}xMx|<quU' );
define( 'LOGGED_IN_KEY',    'AGTv,i|9:`$$|A*>e$39]->%@5~G{iz;St?<Q%k}Ub&@&Fl6lH`|dVQ~vCP8S2 i' );
define( 'NONCE_KEY',        'z)A*PsH<u!:3;P9`C//1z-c{vy}V9q]fxp#w]K{D]wfVv=sB@yRM`={uKjec3e:o' );
define( 'AUTH_SALT',        'rC(tiw>1^JaQj&HO:>ynNVhOj!1X2kNdLF0p.n&Zi(jH.~vp>}A(){s@jY3gHRZ>' );
define( 'SECURE_AUTH_SALT', '[BKY8lQ*P8[85$)v<q~BOZ}t~YGiv(._QW$v@Op$1J:m/<]B.sSeiTX.j1s|1ero' );
define( 'LOGGED_IN_SALT',   '<J-^r!S5lC28%TC|~Zm#?>zO;cqBl<1/FRS{-FSlUwqh/V>Fyb{4])x/VY?fO4@j' );
define( 'NONCE_SALT',       'w9wLD$ ,L|Zxr}V8,j0pfWJy)k(u@1,x&c1oT~T4t(;~;AuyXM(/90HR/sJ,XY-G' );

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
