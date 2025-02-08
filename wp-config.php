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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_myweb' );

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
define( 'AUTH_KEY',         '%CeB`EWlJ5a q6X0@~Lup.z;MIS#c5z~q@RM!r6ulXs6NH6jS]XeTza%4[7h9FD$' );
define( 'SECURE_AUTH_KEY',  '%fiu& C3{7_]>o:qSG;8eYV;#s=3G4 n|z:>!X+|+%g,%ANQ^%&(^MKvzooo{*Aj' );
define( 'LOGGED_IN_KEY',    'YS[S@#O7_NC&i&S[0rShNN& O~ju<V{F=&U7%Kt2z&O!-E*svH`J)v&l~,[gxwTC' );
define( 'NONCE_KEY',        'B?]xnIpaX)K9#%V%uo&B@G$,ui<xD@}jO*e?|O.JSZsmFh0Jp+SH`u$t5cX2H|2E' );
define( 'AUTH_SALT',        '~6_}90d63-,-8$D6$ob5?>zRkXCtZE+p4KyV5g]%V}IPE#z#;I3Fw`?^Qz.{)Hmh' );
define( 'SECURE_AUTH_SALT', ':31VC$*C.5vfBNPm:EX[;a]U3qC~V+oW?@U1C%s0.P|qE%H1hY+7/t,[I4zwcDhK' );
define( 'LOGGED_IN_SALT',   'bsd6A%{*(u9$br))RaDIbrA^:,ISQ?Dh*1$1:tnu4}FljR*G)v!CsbY:`bDi r@z' );
define( 'NONCE_SALT',       'd1)Tl?}go=@QH1Te%qn]nSj8q@l6T:n!x.!6h0xSnT]>l!#n~7#4<l]:ya10He^f' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
