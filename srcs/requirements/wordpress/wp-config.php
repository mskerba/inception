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
define( 'DB_NAME', 'admin' );

/** Database username */
define( 'DB_USER', 'monaim' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '=7@S_^Di!~t]>k6Lu+;bZN78ie{lzz}idIg G# ($MrX6[v.MT0dK3:=%rI!xDTq' );
define( 'SECURE_AUTH_KEY',  '+l+{vG +qAyQ!R!u{MY{)vlFj^>e=uMcl@Bl}Y!4rfCez]Zxn mW-9g]3MO#|};]' );
define( 'LOGGED_IN_KEY',    '=]*(&p?$gR7>#eP@P@wH}.NLLm-By,yrzD}|R]wI(bN)I]dTFVugw-E+*{~To 3M' );
define( 'NONCE_KEY',        'NLOIj2*$+W*V>lwQy3UvS>:h$,ap|7>KmSc5f6i(IBvAI#0w|9V6h2@smD$>6* f' );
define( 'AUTH_SALT',        ';}-{i<Y^1Ms@r]^E$l>BPKT&PqpXH1.!1}jTQ8FsH1q(h,{3Lx$uZx@,PUlgEI/2' );
define( 'SECURE_AUTH_SALT', '?^|@*~-]aBNNWS}G^iON#Yhpju{Z@)(M-Zj0;o}{YZ~t?$wS]fm4`lBN]HW&YQ9u' );
define( 'LOGGED_IN_SALT',   '[te^-=SGra|uVFwD)P~6.$AKNMs[GN]e+}yr=mH]*>1l:i9Ezs_y*x,Bv.n`Nx|_' );
define( 'NONCE_SALT',       'zTJ0[43FSmGkJoLJsqW1.Ad3HuPZmBYVit8O@*PuJ4M^VI!yTJHFqM_v0l=$ZZ$9' );

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
