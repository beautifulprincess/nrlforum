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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nrlforum' );

/** MySQL database username */
define( 'DB_USER', 'nrlforum' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Nr!F0RUM' );

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
define('AUTH_KEY',         '/HTkHTrN8tTktRVRvdaZd9/2huL1lM+hCLBuYXnJv2IRunaomGT74SsoP3hKXyAYcpVvZgNjTVopj+KX2N73SA==');
define('SECURE_AUTH_KEY',  'Rw9wQgsyb2o08Di8aQELIFD5sIvy4mQbYjccmE3g3vkzSx4Sn3F4f2oV0pt+rdkrpJ96uqqL2lFWHlCZBw89Bg==');
define('LOGGED_IN_KEY',    'eOq1s4PFo7KLk7OCzRDrBk1LNUFBFCC+T1vyOE/Myj9HQnOyWlaHmD6K8kQ9ss30QboBmTy4hOpM6N9gQN2bZQ==');
define('NONCE_KEY',        'fJUn/UrQDnpxJK66L0pgYlJSl+rzFMvbDdpfsIkIegQz5v7KldDbbBC5ZJRgGIiGimgDNrt3wjrC+2ko0I7Vkw==');
define('AUTH_SALT',        'ICMMbPtX8yWgD6B2Whbjus34w1JWXD041HaGl9eN9IFjJXVJYsjprkHHxg1RHTIwAT/uKyK8HGaUbo1ZeKOwEA==');
define('SECURE_AUTH_SALT', 'WIxLaS4+EAqR2KMQ3GQ+C+vDU1ggeuG1TE7qx1tzgDbdtl+PtaA1qh1Dc43V3EatkcmJy9ZyjL0ararIxnbUuA==');
define('LOGGED_IN_SALT',   'yZzfqxf6MTssvzhFbtEebz4LdlFiIlnXPjhMcwigbMFsmbO1XIUrTyudFrXa245yWToXZYFAtaMz8drDIKoc9w==');
define('NONCE_SALT',       'rd1VmBSLa0CSUxCj4oyB9zgIenukv32yHwx+WLKB+gFZIB6SSBDrB4QTyI4qL8VQWjUCXAEI4B2A58PRCa/RAQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
