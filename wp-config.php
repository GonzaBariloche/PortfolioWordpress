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
define( 'DB_NAME', 'behh22kuomlwahptcter' );

/** Database username */
define( 'DB_USER', 'u5vhb9wgl8roykkd' );

/** Database password */
define( 'DB_PASSWORD', '1R3oH2K7p9OrSLi8pbIJ' );

/** Database hostname */
define( 'DB_HOST', 'behh22kuomlwahptcter-mysql.services.clever-cloud.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '{bfzoxHyP9idjC-0;LPD<gkILGM:&66+PY~R-V,{_Jrl|jYbl-Y&`HOVM+zKN+K-');
define('SECURE_AUTH_KEY',  '#E~bc;cgZYot5xk%iu+*tPrNPBKF[uQSX(3lgLLco#`2K=U0P06JR-L-ElNRPF Z');
define('LOGGED_IN_KEY',    'Y7?-~iFfl/A5&Q}$laKWrx|JI.+2hy@S5T<Ij2)(`:$dQs{tOQEK 1+V^RyKh!y5');
define('NONCE_KEY',        'zV#}~2-L]z}XVc~BNrKcdmGhH-7+V)%+Phd(il`r]3iYC?tw4<G}-|[-zs-My&h ');
define('AUTH_SALT',        'y/KC%_x&qK+#DiX{j{fc>d+FZ}ydh3,+LOYn=9<RKA]-Bm41xhAKi9VTok+;|+.6');
define('SECURE_AUTH_SALT', '#[W..d3eo.F-PU,<ESLh<h*t]C0LzEGi6MEJkJ=w).2ud~Q;6WC7)ly_OiTuRbhP');
define('LOGGED_IN_SALT',   'vC6O^|s|gH)lUlG8v/,q;/88#x)3kfO6F.Xy2wk;#QJ(#K(GeLxPNrbfcJ!fg-Sa');
define('NONCE_SALT',       'lq+w^>ayc+*W|lX-)Xc#3mkvo{@-!@#e~&{VQ+]+20q.(73#Jg2.TiAoAu!tY9!^');

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
