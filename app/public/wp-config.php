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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'AOr23sYuLFvTcokj/evMf02WOJ4iCp3wS+Feke+xZ7m3h+Dr2vJzsymS/syUZWlQqt23cA3o8cCNSLTRp8DxAQ==');
define('SECURE_AUTH_KEY',  'Xn9Rkhe0Pph0XrrbUagReq/6vZ62lkZDfErCBHuMfRhnWU4kCz28de7WtuvDDEwL8cjiDIRa/YDOEW+HdIjO0w==');
define('LOGGED_IN_KEY',    'BlrOHJs2dde/GdfcmCJq+69JVXxt4NmdDRmxnaBaVz4+jyowDULPWo5E19rEkGyVb1Fta3d5ol8vMaFjjSmHCw==');
define('NONCE_KEY',        'jCr4WZOkdkvjBzs06YvQAXROtN7DHBe25CUYp5mPYa+C5uwWiATxdzXplexmtILVsdmT76istGlldHqdgxh4yg==');
define('AUTH_SALT',        'X2C5/sWnq6LHVT0XwhmAq3O3EK0ul9kXSTnsi7TR+gf5vd6Nuuuh9Oc1HGzM6J3SodURwvGZoSXbD5E6uALXMQ==');
define('SECURE_AUTH_SALT', 'ogyz1GXvoDXc3QObXZ4ydA99/jhFOpCPyAujlWP/1lc2SCPpk9fRxeXE1VDie32Vg4/t1VqQFM5yqQNZnELSxg==');
define('LOGGED_IN_SALT',   'k5dCJQScbHuNtMxKsjwh4MAUAUBv0IRKwjANmBD3N+YE6mKAoRKfx2PlwdhDz9bbqN9/q1bUpCiMAa78iaqSLA==');
define('NONCE_SALT',       'A3nasX+rQqCQVpXUlD5JrhKJKMk52xHUYPWd1vFnaRmg0MSib9JR9eK9Jk61oTC4loqLPtxLKLEQuCmEThUMgg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
