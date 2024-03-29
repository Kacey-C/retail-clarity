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
define( 'DB_NAME', 'retail-clarity' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`ZQPPQ>!yiA>^EIvpK1ZaLW: WHZ x#r*q/|(+d)a99{uM+9^iZ+e^AQ<t9jR_Ln' );
define( 'SECURE_AUTH_KEY',  'v&33w~n>9I/FTtEuveH6<Xcf~A(}f^/<@@)+vQKn(M3A}$)!6[}-F0n&H}&=Y*~0' );
define( 'LOGGED_IN_KEY',    '0H}>y [,uZqbtEc]hnTpy}pDs;XAR3vX?SA;kYbdNn[9eNRiZQDt(5 >*SIE0(A=' );
define( 'NONCE_KEY',        'PK/CZq9GI]e<]%E-.[,kjzKiN/A4f0$Q^T?:jH,L*Gt%?-EB-rKfq8ZMB{?+CGD/' );
define( 'AUTH_SALT',        'Q;`Jf9h7d|!aHV= CYk_a5OD8R/{qGd/dVM?+XF{(@u)WP?j+752,x;mA&7~:D&4' );
define( 'SECURE_AUTH_SALT', 'z#M)Um!l1(pNV!Z.Fun4^_k7 W/^)Qb4[1JE;U%Z~KGC41CLy(Ir%QvYj^J H^Ai' );
define( 'LOGGED_IN_SALT',   '?2`f,~2PXBe|1HXx?[hvq[cqZek+^8tN327*(;5`;[T-(uGG04}!^-{cSwVWv{_m' );
define( 'NONCE_SALT',       'Yn9j/_O8T-DF5.( j~*!L5oK|>Z_L)F~=)WPWM<1FckQY`>_OH4A2Z<4@dT6np*]' );

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
