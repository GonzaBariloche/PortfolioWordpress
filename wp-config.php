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
define('DB_NAME', 'behh22kuomlwahptcter');

/** Database username */
define('DB_USER', 'u5vhb9wgl8roykkd');

/** Database password */
define('DB_PASSWORD', '1R3oH2K7p9OrSLi8pbIJ');

/** Database hostname */
define('DB_HOST', 'behh22kuomlwahptcter-mysql.services.clever-cloud.com');
define('DB_PORT', '3306');
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
define('AUTH_KEY',         'BHrHh-!Hp5IF;ch]?9|%R;6S!|o[1;zhK!/TZ1S+9)W_z&vfEo|(R!jRDo#R#5>p');
define('SECURE_AUTH_KEY',  '*3BJz!CYnrC83,hcgUON_DmRwE3lTf3d5a`G9[Ejr?/+2$-V*E_j!Bk0=z(|MUq%');
define('LOGGED_IN_KEY',    'xlgr-T@PxR-c9H3/.QG/A*&S;G*&l_=^QS-2^bg*}p102;1SmZ*{;>-apIs9pdJ%');
define('NONCE_KEY',        '&6Z#R*uR;oZA)mwFd6ZEtayuOP?|_<f0I,t&O>^E.P<]sT.j-+5b@j42U3MN|ErU');
define('AUTH_SALT',        ')-2,6w~N:$I$(<94gLi-2YRj$%#Z6*-HW{<;|(CNMV]f}r<}A!(I4i8|I aK]lx[');
define('SECURE_AUTH_SALT', 'Z!-+SDF19*n$00dhKMKUw302iL!i?%&>9op!X>C%a=`q. 5P--;~u^^w:LZf~O}&');
define('LOGGED_IN_SALT',   'K5WrmPu#:5BN6H-oF9I&fR|<U)..J-!+tIl{-^VH||H4.WuWT$)@u&h!v00vSC*l');
define('NONCE_SALT',       'Y+MTa.Syb!dFNafXt:GFc-xkwwPPXW-BGEtsq?yQUiHW[9hM;B<EgW;vtjV~~rML');

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


