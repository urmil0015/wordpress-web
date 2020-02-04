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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word53' );

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
define( 'AUTH_KEY',         '2i3eNNpiyKMYOBf7ccmC?-7LI4yCXQ|BQ0PT~*mnQ@AM,Cep|2^}.f(ZK$N|/kt3' );
define( 'SECURE_AUTH_KEY',  '%!?nY&$hpNJkiU0>eXlT^OKRN3>zLxQxJl#2-,619_`d!^[&cLc[{@]]L`5}*%W0' );
define( 'LOGGED_IN_KEY',    'gRMQ{Dpb(l*~5V}Al-w$6rk0bV:Dm:Z+Px{dX.vUgk}1>^06?EpCXg&[;j!LdOQz' );
define( 'NONCE_KEY',        'c2Wh+KtJGqbQeD|p4}ktyI3V`FC()Su.Srg0?k;.vSj&u?/v<HJ.2+P> 2}7>$)v' );
define( 'AUTH_SALT',        '?`@WXA|&KBZh^Zp3_=?D>Vn-D/cjq_/j$ipi}<`sCg&aYQzh8GZe|X*Nq&()o(vD' );
define( 'SECURE_AUTH_SALT', 'avpM~gM;[!20ddEqlD~i!!xVT`]n%kP@h-VHn8m?=Xg]M[P|-$2>IRxvJbn*wplR' );
define( 'LOGGED_IN_SALT',   '4+L!|x}78QZ&V>+2D2;@^vq0YDK21|JfH`DS<4SE2GT V) cSjnmks_YF} B1[5b' );
define( 'NONCE_SALT',       '[fZ+n,p@u ]%uoXuB[`--t%b?j~VAz3U=NcR`2v71[QYvNe@`)1v*?RMW~PsT}&:' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
