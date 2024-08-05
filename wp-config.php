<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'indiaccm' );

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
define( 'AUTH_KEY',         '6wBjraP&sJ8,agY>dKa16*Ec@-,=)*S3:b[II`<SAqj#~{DO~N0fg),^]i@s$5[v' );
define( 'SECURE_AUTH_KEY',  '|tk-Od:k<d2o< !OXIgy/1OTI.wF~I6S<{Oj}V7:+VHJ_bP* KbZ2~uM}/AIpOEO' );
define( 'LOGGED_IN_KEY',    '_o8;{K-_KE7xaI/j#)36}cSNwx?8g/^9GDhN4Vp|t=I+cht20C RWS0(Ee!|t|qa' );
define( 'NONCE_KEY',        '[Yuj.SI;`-ZH&/*_sn@}o>=bI5mw0;LB}d{4@<krsnlH{MGYQk^y1:;G_V$BYnUU' );
define( 'AUTH_SALT',        '.3PCCrWEYufQz%hE(7JH1(%4|N660c8pf25<i!R6@:!L>z[bhl1a(@bL,a+y}MnF' );
define( 'SECURE_AUTH_SALT', 'lhEg0bTGMQL+md6+:?i7BV@c@^o -&300~OM8L%8tMPNX6Oo>2KSN6TUD.>4?>Gc' );
define( 'LOGGED_IN_SALT',   '?d{3J;Aq,#vv#Y;%bNJG#XW`JvJ5{Z_y^<;$U37,+;+=dT%?RqAPm5ruShMh7Zxq' );
define( 'NONCE_SALT',       'u:?DJVu!5YjFo{j%;Nv-M}hg^`64JM-Tku.T(0HYH4Yspsz1$9CeBJ:HVjd)V[r!' );

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
