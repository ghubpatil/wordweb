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
define( 'DB_NAME', 'sociakvu_wp780' );

/** MySQL database username */
define( 'DB_USER', 'sociakvu_wp780' );

/** MySQL database password */
define( 'DB_PASSWORD', 'XS466]US(p' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'rcnqrqcujdbfyb9icek9ysmn6oef2g6grujvigrzthqlwbhtaqhv9kofn8ydrodi' );
define( 'SECURE_AUTH_KEY',  'dqkbndaxvytmtoienqoewfox25asw4pk1lxpu1nbh4syyyftzewf0jneeyqicnsa' );
define( 'LOGGED_IN_KEY',    'qhiuisxt4sgzar1yvkjkoibtk5uubqjmacqkivpeqbzwl9d8gtnxapenrjfkxkyg' );
define( 'NONCE_KEY',        'fjotzu0rnxcp3hv0skdl5qconbkjziaq77sspmxkcnaqixvgdniueeaqwvhdrott' );
define( 'AUTH_SALT',        '3u60ulrvdhzlvc5a0iie87qaicxydsdli9zd2vq8bcpxn9led25gqu3hckasmv7y' );
define( 'SECURE_AUTH_SALT', 'll9bkoby6wp6xh2rz2ipltlbxgioty6ew0ymvzdnpycnq9ijnpfiacqxm7puxarx' );
define( 'LOGGED_IN_SALT',   'rp0dnprlrajvgsn7w09h6daqbjknoupmfebj2qqjuxyncwhwbqhxsxtjfke2mrp7' );
define( 'NONCE_SALT',       'gejuzr6y6eb6npy89rax9tggxwijlb99j7n6hmhkibfim2cfbfpibsfohn1szfpn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp45_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
