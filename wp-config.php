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
/* Themify Cache Start */
define('WP_CACHE',true);
/* Themify Cache End */

define( 'DB_NAME', 'sulud' );

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
define( 'AUTH_KEY',         '_.}0m%</D_zhN{_dz[`9umZCc(P;>T|rGcTLIJ_E|7L(iMvBFVg yK)m@/+1E:)r' );
define( 'SECURE_AUTH_KEY',  ')ve2n4!x.@)^m@kKttk^>}s<G+s [^2,-EGYU4o[6Rs#b+g5*lkWV T qv*1t`fU' );
define( 'LOGGED_IN_KEY',    'F^%Pr+`O5L,S`^>O(wU~mM|C`rfPKD[%d:R(9i::PR%8TKpYn#yO7Q:/&v[tA.SK' );
define( 'NONCE_KEY',        'rzkMY*k^<HQE7-N+F8{xcjF?WI+jbeo&eC1;WHGo0oZ.gv ?YTOf~:r40e|c.Kbn' );
define( 'AUTH_SALT',        ')a_9ShTJ)7$!fQmVdx3QI`Q)TofyDca.;J|XUIx&Xgi-IyA8Y!8t7om`Bz8+cc$=' );
define( 'SECURE_AUTH_SALT', 'tt%qx&G;VoS1kRq{sXAGi R:P{<}ub~UC@Tx;3|$TcCkB4Pr#G448XEG6y31<kx!' );
define( 'LOGGED_IN_SALT',   'S]u*xR&hg>|LxUX`A:Xw%gt/7t35]vWJ wMT<S1:`Y$|Zq;Zpuao=iroBxc{JTWW' );
define( 'NONCE_SALT',       'QgiV5WpNAAX+=>>RNda._GSGO{WmMG9$*V0bQe>!w1e_RZeHhxGDCUwp}8O*W!.1' );

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
