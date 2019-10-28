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
define( 'DB_NAME', 'mysite-wp-test1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3QCTSiCWs250OCePiCJwf4T7WYqvWk92sq7cfKfEjXn5lo6UEn6O53W27xZDeYr3' );
define( 'SECURE_AUTH_KEY',  'C6kFCbF9FRygzAhSV3Ua1yvRYDl60TijanSAh1M1PZL3R166yKhzxbxqDl6AnNAY' );
define( 'LOGGED_IN_KEY',    'RbiFXWr1jtIOR9L3BZ1KarEcbOHjmf8BlYphXWc3j6pIMcrV9Ml7ZlzVtnnPZFu1' );
define( 'NONCE_KEY',        'aWWO7ZUj3oFzG9IsaKd5B5YgJfBHuZgmmym1rKZjNU7xxWy1AvGAfdY0NiUEXY0h' );
define( 'AUTH_SALT',        'HwZr3Ah5aUnuUEifUmiY6PqjrEY9Ma6cfxJlG99qjermd2OWCbApTEdQQeL2JmwY' );
define( 'SECURE_AUTH_SALT', 'tJKDaloxHGdbhVK3edNQJzzct9AdHXfProJO62PvQpXLed4P0EF2PYWnQCAH1wZG' );
define( 'LOGGED_IN_SALT',   'lqy3u32CpqeEYRUGViYOOWuE23y2ZmpDTIlQGK7XnE2RuIW5uFG4vnKYBjgKkQCg' );
define( 'NONCE_SALT',       'jCnE1Gclg8qUYsKdXANUkVaG5lRyDmACztzpthXLVYEG1vsFDfFwVSCD5jNbIloK' );

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
