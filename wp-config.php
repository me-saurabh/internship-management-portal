<?php
define('WP_CACHE', true); // WP-Optimize Cache
/** WP 2FA plugin data encryption key. For more information please visit melapress.com */
define( 'WP2FA_ENCRYPT_KEY', '982cJz496ok9Pn86eL9XLQ==' );
/** WP 2FA plugin data encryption key. For more information please visit melapress.com */
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
define('DB_NAME', 'wordpress-313539c793');
/** MySQL database username */
define('DB_USER', 'wordpress-313539c793');
/** MySQL database password */
define('DB_PASSWORD', '05e4361b1f2a');
/** MySQL hostname */
define('DB_HOST', 'shareddb-y.hosting.stackcp.net');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CjawQ3jmBCfIoVCpX3lmRpXqqj7oLJs9');
define('SECURE_AUTH_KEY',  'iCbpyVN8jmzSkDdTJ2bYrG9w4TuGeZDf');
define('LOGGED_IN_KEY',    'XA727lapx84MFuQnwWK1n+g/+gwDtS7s');
define('NONCE_KEY',        'SRBEYH/38qvGwduLj/owK2UQdloXWWtu');
define('AUTH_SALT',        'JfvU2zQmEvvA/Sdo5F3WzP+2Dzuc4rIQ');
define('SECURE_AUTH_SALT', 'qPmy6MSIbLVvHw2fY3Aa0Bg6g+qkASgP');
define('LOGGED_IN_SALT',   '59E/FkFsC8pFmEJ/av75Hs1l0i1uH1/h');
define('NONCE_SALT',       'T+Fd80rifcDwg7IeOB423EJhSt/uRJHk');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ea_';
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
define('WP_DEBUG', false);
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');