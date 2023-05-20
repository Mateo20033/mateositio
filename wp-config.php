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
define( 'DB_NAME', 'mateo_wp935' );

/** Database username */
define( 'DB_USER', 'mateo_wp935' );

/** Database password */
define( 'DB_PASSWORD', '[6S1bE9[pN' );

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
define( 'AUTH_KEY',         'bg8nhgilbfqpmivn9nqymo4xwd0cdgcev8hjqutd10wlcvli47wmycdj33v0lwof' );
define( 'SECURE_AUTH_KEY',  'jkr7edcjpjeie5sd18a6b1moxzzcufwptd9jmzdiyomwcp9xdgveifowpmndwevu' );
define( 'LOGGED_IN_KEY',    'q0s6ftc4bwaroyjjkvmngc9olyqwv2xrgnsvgtvdtw8ex67bbfmbtecswfydwwjt' );
define( 'NONCE_KEY',        'gyreiupzsiswhfxiuqgvuhutarlpmdn8xr7cza9hjzgv7gjf2j4sjvvwxs9ghdpv' );
define( 'AUTH_SALT',        'wmadbheu8w4cibvzf4cuufytko8hwr3byxcfcecr0gbidvcrh9jhcnj2hstfws9g' );
define( 'SECURE_AUTH_SALT', '77q3oaxb4xnxwmkwpkgkon38jtgm4uonk7y8yoeflf5l7xhdockjupeq645laevt' );
define( 'LOGGED_IN_SALT',   'sjl59gdmowylvdn8ltvbs96xmz9pitmvy0reihzltsxqiijojts4yedx5tb11ywq' );
define( 'NONCE_SALT',       'zrxtwpbtqd8uob1df9wcpz1a6iyeiaxs4rql4zmqyfolmd3vvcp1pcbxy4nwmb01' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdt_';

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
