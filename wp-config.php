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
define( 'DB_NAME', 'nomadsun' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'kFdZ-XiIEAyhmH)rhS^} ~*H,=qxYacR;#56 =c,wVhn1eqt9C@e,KDa1fT#7[q[' );
define( 'SECURE_AUTH_KEY',  'J~,I77>nV4f<)44~lwP(o197>)nYX9wz,dsGiv%~?3MEFfry)cS`<g],V{!Br&_j' );
define( 'LOGGED_IN_KEY',    '5fvKi<ZiDrxwL= ku&(EMY*U_H^`jI(Gh|(FYv_l`K jM*&^J,:`up#69A<Lo<(<' );
define( 'NONCE_KEY',        'XV%?f9Tm:jb/~1B[W[vnKL[2)YYXQpHX6mN>TH=d>+_4lFOysce=A=5>yb|Xc;W%' );
define( 'AUTH_SALT',        'WxXatI)1H[?@ $s.v74D{IJw$d&T!5~!|0w3:ddLW:xKAUSmjz08M+TkU&td8EwV' );
define( 'SECURE_AUTH_SALT', 'kywJz}@]`J.@Bu#ShMD SO.ap}t</!~z&OZv,bv%u9z+5TP}$iv!nwT;ZB=.k5q?' );
define( 'LOGGED_IN_SALT',   'qp*+%)cH(%oB2Y,D ~z=ju!x.GYXrzZ;f4H1X):r}gCob.we=(JUZ(&`4&q3!os/' );
define( 'NONCE_SALT',       ']bm|I%};wxT.l96LibS-:.4Q!Su{e{W?E`*6SwzeA.#@e>atcfUgrk]7c@=:_ux5' );

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
