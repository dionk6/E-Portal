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
define( 'DB_NAME', 'eportal' );

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
define( 'AUTH_KEY',         '>[6X[Ae:kv>vo0i}MglDS; Bbc})F-iW%Yr5kH}y#xh>9Z/RZ8d/!]P6v8r*dxK;' );
define( 'SECURE_AUTH_KEY',  'P%a}MP*TN%#i]U]v6a7Q>0F1Jf^9%$s%OjoSD^/S5nyL6.|64 UHP$v+]t-o*YAL' );
define( 'LOGGED_IN_KEY',    'ZU8-TN7mxWhciL,uNU&$%`h(TT)I0U|df{Rud~`.0^Ym8udM$]*UXL@A~5t(lP$n' );
define( 'NONCE_KEY',        'Yn._n3SAfz+TW?L%E[4#qo+RVUq {$?bW07P ~f_;K>]}M,EZ2lE~J,d(zU0}uyy' );
define( 'AUTH_SALT',        '6llY`({R1<S;olo4oQst5kGrd]Dh8puAt%,H2zuFDaP5cL& ]GH-,M[hHLRxMf#2' );
define( 'SECURE_AUTH_SALT', 'ZK]!*EKHJoYCs4!z~[/432;-m9lt7~uSL=t LC0fXc(>lV9>H9/#%?4pK4ZV*A^r' );
define( 'LOGGED_IN_SALT',   'Ow}qmD76tXX874Cn/UCtp7i$k96DAj%Dx;|B2{DOW`-|8 L]}QhBAFH!U(ZW[|i&' );
define( 'NONCE_SALT',       '9Ues-%f32Mg-l8&5}1F{kcCij[5G9Bs>*>V[$q?ILIZ=]ip*b^rXKE]zD,qbRV}=' );

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
