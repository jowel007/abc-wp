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
define( 'DB_NAME', 'abc' );

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
define( 'AUTH_KEY',         'UV4.fx57-k:_AWOksS `4]qV}b8(Z-HP2/K=%An|D^<88K-hjt`e=h,6GgBAW3H*' );
define( 'SECURE_AUTH_KEY',  'Oad/,(!YALlJ~wQ9C,,5x=|=;>{YN.J2e}.M~+.A/.p1fv]Ah^,gWTfI57jzv6CY' );
define( 'LOGGED_IN_KEY',    'LS?E$/r@ymnXj];#h~WT(3X3M%xBFmqi87]uWeV>jo5nF>g )9!.lR;S~F+@l_l7' );
define( 'NONCE_KEY',        'bGft%1t@~DRgxE>5{x@u7K&]w+i3s&?RRSKU_oauE+<|gS*C8gD2v&OL89(wjGq-' );
define( 'AUTH_SALT',        'OM>f$q9A-k5?]Y!Ez&plJL;+PxRXXWGCD-fM!aapYH}ZJYr*b.(_a8{F<?Cu5vOS' );
define( 'SECURE_AUTH_SALT', '6l{U{$PP&3#(`{(_s[OM6Mt)cd%e$f.sBEdVO3QUpt^c#G)8uED&mEdV5^T{xV#z' );
define( 'LOGGED_IN_SALT',   '<P9st$P@[c0Ufcj7h!so@Tn(Z+][T|/Q?o)f%c6g.f t7*=6&&o,&bOS[D`08al?' );
define( 'NONCE_SALT',       'n%^Og-!?HMdW@j }~/f<w(iK8TTSysa0g~cT&yt%v%|#oq!fOPJ!.b AXrlYtb)4' );

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
