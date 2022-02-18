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
define('AUTH_KEY',         'janzEQYlb5wWO5Ds6d/FEYCwH0Qhb/OHpuBlzmfdJafhi617lyQuj5OTW2/fugRc/sqZujHqT8gqkJVnhxqS7w==');
define('SECURE_AUTH_KEY',  'U3RJL6GmDB7evHc+IyMamOmqrXwqh0lisJ+tmuMAUQAUTmAly+xV303Cp+sV61U+dnpwpM/Fn/SUG4VU6QbCxw==');
define('LOGGED_IN_KEY',    '6x9dhqlpmhGrxFumz6g9V0tAAUpicMXPxkVsy2MNUyTz2iJFPRiFVGyM3aEFAUtG89lJvLGU5kka05yHn/odgg==');
define('NONCE_KEY',        '/jpTs8HtLH0IZ2fsl8McenJ7JStRJ07XP/kHlKmP0zeTShw+2djvJEobvXPvOBcLJICmuIP0iJlt1k5xmMtakg==');
define('AUTH_SALT',        'RfSaZrk6hX0FJSvhopoadwqCb2mE76aWT/iW6V3u1YhA4ng+7lhjyV7ufexB2EnU0FPy+jUjgiCMG/mVDr4Xlw==');
define('SECURE_AUTH_SALT', 'wnBO3zLU8kakb0NtkkZcP0Dzew/rCsRLxhj3o9ygQoTr5CaxJ7+lReI8LgxeEN7TSfFtuLSx56G7prL6D0xJiw==');
define('LOGGED_IN_SALT',   'X+m69sDVW8xvfHKuNBCp4cK2uslkpcIRffebedaHiN5GulZ0ExTMvY2VVBX1E40blQHHqSgac9SEzMvR7u8MCg==');
define('NONCE_SALT',       '0GY4nSQlUbEzo7jiU2kPk4s3i4H9+IyUcjZqgyM4pHjpTS0Do8hLOZj5cjSqQpKq/VAqEeccEMmgz5ojk0pWnA==');

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
