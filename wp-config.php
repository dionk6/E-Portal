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
define( 'DB_NAME', 'EPortal' );

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
define( 'AUTH_KEY',         'y~=,VX,xW&e>B[e17;1_H.d]v]vde4yVA!n(u1=5N$~dMyB3{lm*P{@mh)%%:?1z' );
define( 'SECURE_AUTH_KEY',  '&N:HdR~+&qymk~s7y/;,hI#Z(p>i6?#(@p8ov z^l|J*qx}=pfRI7o@?P61NMN8<' );
define( 'LOGGED_IN_KEY',    'G!!CfRRJaGs}!aMDoCN(o2h#4akD!JXHYfthzD3tvd$nn$C5U~=cO3k/v}n{(fny' );
define( 'NONCE_KEY',        '.`$UO/Sy,MjFuQLO^lW(BUO8syf=z@AGn>!^+~aPyhB}1x>l oMDaJ3j,dlwfJwB' );
define( 'AUTH_SALT',        ';^:,9 vPgYmM3b?)?yA1b;EzW|R5 z~,=p=hN/#R6i{ `@P6[s=[$NzdhtPeTzCg' );
define( 'SECURE_AUTH_SALT', '#QvdI|7&vUl?^(,l0]T6/Ozza1fb7|D8S;oodm)hnub.GBS:Z[8oe3-.pHTM<7;u' );
define( 'LOGGED_IN_SALT',   '^f[4h%Qj5?X@azmNK=[#h`A^#Y4,h4WrHYesz/qz2[<r2bbgE0I7-:YZsi%V.1B0' );
define( 'NONCE_SALT',       ')U=IlLm!mF._mlmu#o4m9kGLB{9r[>)Fva./S7YbZ~sZP=Rt_P!tMr!keduW>Zt8' );

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
