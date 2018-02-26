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
define('DB_NAME', 'u0418925_wp444');

/** MySQL database username */
define('DB_USER', 'u0418925_wp444');

/** MySQL database password */
define('DB_PASSWORD', '@)7pH482uS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'iftifoip60fxvpsa2oc90egv0anz5auaipbgrgkotezg0girmzh1s0bmb0tmsagy');
define('SECURE_AUTH_KEY',  'hevi41wjpxqeeagtdytsiqw3bozroritc3hzhpfhapjpp55cyipatmlzlxb78vx5');
define('LOGGED_IN_KEY',    'evfjhbwkj8kjovhk567c8mrwntilbr0mbbldsqe4v6ejdssfgxg3zfkku06igkub');
define('NONCE_KEY',        'pmdo9qioqafmtsmpmlh5phqffjtx6hvtoz02jnsnywdenzks4hodkrirtjoqzbnk');
define('AUTH_SALT',        'feczw6dtyx2cxljmzxu0xuzfskkpnxdz6peloim6ezxjylqcxz3vbe2s70uv5svj');
define('SECURE_AUTH_SALT', 'caxskodn99ieyvkap6gpkodzxcqzqirqltdsxca1mlkkmgxjluhvmkge9nd7gfgp');
define('LOGGED_IN_SALT',   'bngqnyb0dogklzxvhp2l0b1kiyksno2uertgcbqlwgtynxfjma1fenwmrrx3szbo');
define('NONCE_SALT',       'jmdmhqeacnt2vxbfiwbda2arxkitfpzaphnozso9nykabrdzknsdric0ophvquyx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpzi_';

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
