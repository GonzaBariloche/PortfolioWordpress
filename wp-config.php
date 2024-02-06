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
define('DB_NAME', 'bgrs12t9zjat4gvfuuhx');

/** Database username */
define('DB_USER', 'upbergooiue2xocr');

/** Database password */
define('DB_PASSWORD', 'V79LWSupZiaoLHr11KHk');

/** Database hostname */
define('DB_HOST', 'bgrs12t9zjat4gvfuuhx-mysql.services.clever-cloud.com');
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
define('AUTH_KEY',         '>>&1bBx#-xNW-!NMQLz~j0|rZ{Hm6c1x|NwnpP{aAgj$<{4z,Z|s/52`{PD]B@4#');
define('SECURE_AUTH_KEY',  '^]s3,dNa&)r-d.p}W|xUYJP_{%D[>@.7}@E5|TdgP8hh^V8#]&,#s7zqw.*4tgx{');
define('LOGGED_IN_KEY',    '~aF5cuOTFtsi4^7AZesrd={d[dW,{k&SY:[-%498hfN2#haO| .}`9jZA=Uh-FN/');
define('NONCE_KEY',        ';}I0WHQ&,n/=t]Z+qx{)r:&&$X$`!nw|><&iY Ar!}:]C<,|eLA8^d]Mk`e:?Trm');
define('AUTH_SALT',        'T/St)-:e:.@-o>p aioj8> RAly:4-2#tC?N(CcgG)z& :gfiH[-W&.>GNcL0dN}');
define('SECURE_AUTH_SALT', 'K.oCWG}reJaK#==~Lk3LcP[E<5eHuF+i}~{(8q023+-p|cM+7{*lb{:md|>oB%lf');
define('LOGGED_IN_SALT',   'aeikD;y%xH?+$cI{i&io:}[BcXBY9sOe*j-*F/+?PK[}FgLYcL8BOo8]xx{->u_J');
define('NONCE_SALT',       '5;B9!9:*Z`vzP7k.|9d`{|WrcTN+lI3L]O=b=[-o5;`T:+9bvprWe(LK[tTcF6c*');

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


