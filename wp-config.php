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
define( 'DB_NAME', 'epiz_24620860_wp5' );

/** MySQL database username */
//define( 'DB_USER', '24620860_1' );
define( 'DB_USER', 'gsantucci' );

/** MySQL database password */
//define( 'DB_PASSWORD', '(@P39ISZ6p' );
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
//define( 'DB_HOST', 'sql305.byetcluster.com' );
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2gigr8uar22p64qexxwemzpmd8xyj9iy7lzqflfcwn4ejicgobdcsj5zwxc282wy' );
define( 'SECURE_AUTH_KEY',  'kzeew4mt7vnmeozvxhjig6qpiqiqxlpqhdtrgzn2ixyi1zncczwrizuvrppnljkg' );
define( 'LOGGED_IN_KEY',    'ta26egefubzokxb4asvzo0y9zlihkdlqvk5g5vvz90mdngppt52k7omqijgeydf0' );
define( 'NONCE_KEY',        'k3nctfvem55lw8oz2sldacpynwgl70kgivulpgjvqyxnybkirgtnkabhfzs962pa' );
define( 'AUTH_SALT',        '738dkklld0b0urtu8s1aqybe8h2jwvb0dl3dr6ctuzp9vajkqafaanqqq7twmcdb' );
define( 'SECURE_AUTH_SALT', 'ohn81g0zvic9esewgzzbhdqzzoqghqenscxkt219nnfmdcu5g7gzq7yscmx9jpe8' );
define( 'LOGGED_IN_SALT',   'isnq2hk4kmyztuzj22zhyqq7px2vwt9ka0zfgjm6nvpgmrsfhidl78iwivp29wmy' );
define( 'NONCE_SALT',       'ef7enwqqtrazvrj5esogc3a8mx7m4htuc3wczxh5h3vrchwkwqfjfg48eur7ujyl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpto_';

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
/*** FTP login ***/
define("FTP_HOST", "host-ftp");
define("FTP_USER", "nombre-usuario-ftp");
define("FTP_PASS", "password-ftp");
/*** Definir FS_METHOD en WordPress para actualizar de manera automatica sin FTP ***/
define("FS_METHOD","direct");