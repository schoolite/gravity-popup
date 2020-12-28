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
define( 'DB_NAME', 'gravity-popup' );

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
define( 'AUTH_KEY',         'Gt=q2CtO>?TMSU>egh<6 $NK!If_g@lGEk+$~BAnib|PDZ>3m&^DFM?XXn4#KdRn' );
define( 'SECURE_AUTH_KEY',  '+pl]_C!9HVd]i+6PCb]L1#FG>oWN.elL:ek9CC*Ge|u4XLy|5L4+lo@Y_<G`5NgG' );
define( 'LOGGED_IN_KEY',    'K3JAP*lVNquwcj!E9*{n|tbgbUED5$js&6G:7weRJn~g>CXc:yKcUh5._/@XIW9V' );
define( 'NONCE_KEY',        '>$j.1o|jwmJ$lGqtVA>=3+7AJ:qi.aQM)Eg*H614?brBTEh``pP4#Z(]p+$xw~Yz' );
define( 'AUTH_SALT',        'h!/vh=)a39}j}ODcz;Ox4Moa.+a;1/X>J~`1Q.(MkE2F7fER1n~Wu *@5CPLBa8Z' );
define( 'SECURE_AUTH_SALT', ')*%o|t?pc<fE} _RdR6IAE oOYZg:8Rt3/L_EEfJS++b:_K-RD-y*Q-K);L9C62.' );
define( 'LOGGED_IN_SALT',   'E9S~LcB4C+ H.[Qr+BlwvARK.,;o$LWDy;?X[yrkls*Fbn >,Wz-T<G}u(Lc`s@3' );
define( 'NONCE_SALT',       '2~><^+EG<[&PzN2lg?W!Ey6RyD^/3!d)DO;f7~(uucdg&MgXbfM6WnGE#U6bwkN+' );

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
