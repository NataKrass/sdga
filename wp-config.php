<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'sdg' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CyECE v`8u@Xss}}j47sje%-d{kEe) _YRR-qm8AVX1mo1~P;;u;<7!{`H8wq-(X' );
define( 'SECURE_AUTH_KEY',  'ERgRhlBlq211QyeTv6l.w bg=?74~1>>x&H34[oQj-!bRoXfRae{R.KO?.?v2e%>' );
define( 'LOGGED_IN_KEY',    '&f.M69ll/W 7)IY0gY_(7!Wemd*k#1S8VK1D(ijS!$<Pec~Na&FKVWR4|R|BD)V2' );
define( 'NONCE_KEY',        '~jN*?>G:d#}`z#DN.QELA/hh3,9yT~M4$&YC8+?sc;H7D#/DMa9e5ILSY}#M{^hI' );
define( 'AUTH_SALT',        'uWXY#fKZC);qdyA!HS{cb3<gShmUpi}`;4Z;,!-_*<DI?R=<a^NGmd2?>)yB)Q[K' );
define( 'SECURE_AUTH_SALT', 'p9kfI4T^_H7VSSffr%YcgRkm`*okg%tXL8&l`&/K)2,95~{(v7Vv +s{mrQv@NMP' );
define( 'LOGGED_IN_SALT',   '%Dr@^,AP;K~ND3xl`==<W|{Dk[*~o9WXhGQVlVL*98YD8cwyOK|5rjHUGlH[DYr(' );
define( 'NONCE_SALT',       '`Z,wN:&,,4L&3@7E1MuPJ3HumaQR[lKG_u[;V{E|LG&3$Hb.@5J6=72kJJI.Y{s<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
