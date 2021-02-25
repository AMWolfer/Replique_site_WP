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
define( 'DB_NAME', 'proj_wp_real_db');

/** MySQL database username */
define( 'DB_USER', 'Jul1');

/** MySQL database password */
define( 'DB_PASSWORD', 'digital2019');

/** MySQL hostname */
define( 'DB_HOST', 'mysql_db:3306');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ca57331d05ddf3acde849debf6bc95c076a23053');
define( 'SECURE_AUTH_KEY',  'e6e37fa2c3dbb3000c92fc08ae216efd77b07644');
define( 'LOGGED_IN_KEY',    '0eeaef2da2a31ae665cf02fc616ab9b863f2ead6');
define( 'NONCE_KEY',        '064d0b85e70713b5e41cacb7dcbc82b945cdfa05');
define( 'AUTH_SALT',        '65c3312c1c8205402ae993f1bc4915fc8ae090a1');
define( 'SECURE_AUTH_SALT', '3c26e366f94f17ba19d97277b5acd4534e632224');
define( 'LOGGED_IN_SALT',   'fabe7f8f144b9e6c107beeb1583be9e251c428f9');
define( 'NONCE_SALT',       'df76ab84563ca02044a21d4a7b1b94e4353c542f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pwr_db_';

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

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
