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
define( 'DB_NAME', 'elecronics' );

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
define( 'AUTH_KEY',         'E9i1ZyVWmE[Hb>ira;9;BrkOlEv-2VMj<_^:BUHnyucU<p_K^a{MIMw_O;[4D?@=' );
define( 'SECURE_AUTH_KEY',  ';$WId.z1<SKjTA*J!Rz6}~M*9k1dB`MFVV`>%ne^SE#jXm|g-tzH!iS(%~Cb&oc_' );
define( 'LOGGED_IN_KEY',    'N;5C3wvj9Fy;o8cf&WNtgHW-Lg{QizG4Xf2n!X&F9YwY4].ZlbW^KQ)j1.bo0<,N' );
define( 'NONCE_KEY',        'xjq0%mw}V@D]O/n>rCIzpkn%!O4C+SXZm=zo8.3dVKM9faf z>nS1R&FfdWY$w@L' );
define( 'AUTH_SALT',        'cALqyU0Aziik7M>AByz[YAvnpq;DTGv|tLmK)mIWf5n)lY6X)aPal7dwP)y4#uJu' );
define( 'SECURE_AUTH_SALT', 'Fr=1~M_*A}Uo`7NI-AU~L_D7Dy(mU/5F(W;(|KmxErVn@Gs[oqwJ>6r=/6)X>q`V' );
define( 'LOGGED_IN_SALT',   '/la|o9Pq$!o|zDEMxuu[^P+srHU?weDwO+TcIFRC+.Hl?v_bjOmE31si1}g3Asi7' );
define( 'NONCE_SALT',       'q9y+6*l`zZS5}>EEz`jG-1%cWY.J/=F5kR;h[v?TD+ZilAk]Y8?#%p@UINA>1H<C' );

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
