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
define( 'DB_NAME', 'pleasure' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'VQg-g3jzbGYbu3ls3,ES_Tz@x9#Q/^9tp)QJv?XubYgA=J&*-GJJ~cIJQ`Om=m5}' );
define( 'SECURE_AUTH_KEY',  'ss;kyU*XlOA9J~[6n%K`M[9t$ ]Pxd1<.X0[ d0$6MU%ElcSccubt}7HWQZ8#;0]' );
define( 'LOGGED_IN_KEY',    '//.t2;ING/%q/J@QJ?-B{B{@p_GX@sV0h1r7D@nt[>+lp% iK!]&nt9mB*VF)4<u' );
define( 'NONCE_KEY',        'kJOjy,1j%2Rm%H.8RN/hHi(_;?m?#IO_`;sus~X^O~Z(oedp=0$G&?)=FM1o5ou`' );
define( 'AUTH_SALT',        '2glt)r1%~Mn&Fsy6W)D)1><-,Q)!OlC-?Cb^;Fb,G8;SEW/b[9)[t85[MktOd9*F' );
define( 'SECURE_AUTH_SALT', '/LMe)>D; )!7j7vluw`skas-CWR,UJbLjF?3QMuOP|nkeK%p6Ks@]^2#/k>/&ia^' );
define( 'LOGGED_IN_SALT',   'WA Nc-wbf5%.Y9~#9{vC!wozKT2)mxyf~TB;MEk@yqH9`9*QzDGU;}/K2B<QiGkD' );
define( 'NONCE_SALT',       '(@KpkFb%M~Z+i(;wt}D|DLi~*%V*ks|2 hMlgH?+!Z=K,e+K>`loZ%aYO;M9c1sn' );

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
