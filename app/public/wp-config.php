<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define('AUTH_KEY',         'wjR0sIy4frgABVnYMR36ypwL3QvBH3sOdAdw6CgjstgopiY9JvxhV2TQfZK6jcPv5oEsfMEQCBbdF5Y5ReeMAw==');
define('SECURE_AUTH_KEY',  'CGtb3IYVi1OmxP/qOWdlqKRjhPGTESq+MoRJz0lIRZhH9dZ/k5yB7wW5KPo/htsufprhVXtKx1mxG2sYRHj9mQ==');
define('LOGGED_IN_KEY',    'PCoUhNcpD2objwAronwkPEH+J7bLWxGKrNfap6eZfi2ywf+CLzlcN9lNDr69o4NZ58fd9qaZr0XnENWzE5YkQw==');
define('NONCE_KEY',        'HTUKCQeaUO172zzfT2mRBKV4YDnPhxrcv9HD3WAEIxPmopYPRh5UZD+RWLUp7G3bgoELHsBUZBRaXBXcC0WcaQ==');
define('AUTH_SALT',        'AwAgm75Y1qh2mv8HztMUUxW5Dc935yGHcynPkJ7DneC8FeqgfZavKRWpbC3flRTBVQ5Fz9H9ohEJ7Gs/0ISk9g==');
define('SECURE_AUTH_SALT', 'QYY3xuJPP2CFNdoyIX6Dsm28KSCUGKop/eWsn4167nLB7gFFqwq2/vwwqrviMO4zkQUvuFeUYRovVltg8a9h7A==');
define('LOGGED_IN_SALT',   'lsQFPAeXjyjaP6FS2QwJyk61YFh7K+kjtvGm2lmLMIyf9ig5iv5tfPmgZaM/lK0EiPStI5n7WF5zS/uxqcN3Pg==');
define('NONCE_SALT',       'fvwK404eI8o34D5lDf6+o+Gq4zS6wX7RGpRINSRK2nf5F2bLOgNQNCrodShPCFuncTz5YIexbZ9+VXtPIcRRjg==');

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
