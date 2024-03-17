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
define( 'DB_NAME', 'TechSavy' );

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
define( 'AUTH_KEY',         '>(C8+S2Ri76cgWhV@(;#I=em5V<_S5dKa3pY2[8*pTIVh+lD,a6E~KRh+Mx2lfiz' );
define( 'SECURE_AUTH_KEY',  '*`CZ95^iT,^DeR5@y-7j;!C-UIo$K?&&Q%=i6,nu&,N))#(<M(Z0BVTb86]!/{s_' );
define( 'LOGGED_IN_KEY',    '6a&TTz,QJzT,}|~a~a9E&Old$>~UHkv?-6,9`1u6v:c[WS>A_Y]*PUc!X.oQ)XZE' );
define( 'NONCE_KEY',        '@y:1%0P<Su! ^mhq|KOG+r=Y!%`!|wU]L2JR22i;[wo)+y<zs|vOd^>:5a%C(mR@' );
define( 'AUTH_SALT',        'f;K:R=C^nV>D}U+:f`?x7RYj*`?cI&6S3A1m.tIQmRG.JX/5G{1tXxq+oKa?iXc]' );
define( 'SECURE_AUTH_SALT', 'Qnc;Es9nOmA{k$&cek06];*C:N0m>WaVbIq(,+<L~Pbnrk&OmVg_ JD.TEz5|9B:' );
define( 'LOGGED_IN_SALT',   '%csM]m-XpX2oI:Xz/O6%tbBqiUe3G_+k.} -t^WBM %6j{`pz{<~{bC/y=J&?|,(' );
define( 'NONCE_SALT',       'ie[qM?*z3I$5L|TCPoh`olBB|W&q4h|#[Ed~G${_5r4ORw3m-ef>}ca|F6rv9Eq2' );

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
