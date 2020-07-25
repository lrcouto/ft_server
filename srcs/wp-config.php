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
define( 'DB_NAME', 'wordpress' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'r3QFs5qq2p0/yr9]PMczmgPJ:b]e2AllHfw1U9Vhy:CP3{;YZ}0WTO/r;qZXP4q2');
define('SECURE_AUTH_KEY',  'Y;59cvhVWYdr=x0XWDiNyDzlv2eV9A3cDsX/CKdxn]XeouhWA2}1BtRPiiaSlP]v');
define('LOGGED_IN_KEY',    'd/a-Uow051nWXCl[dV/1AtUJ=ZgzCD;VmMBQ6rVm/ffrplzPW.QhklWZgB{N}pZV');
define('NONCE_KEY',        'NvRb,:,0,keN9hs[zbsv{bo:Cu=sRiKiDJT;A6T-lx0oTeWeB2L9RDdPvON=za0D');
define('AUTH_SALT',        'cIz0jrg1f1j0=7HbjvU3YW8a16fjDXXzuxyz0}uz6SDKaY/T:Lqbrp.QK3QX0n5y');
define('SECURE_AUTH_SALT', 'Yds3IPCe5r}xAtaQC8R=ZCa0UQCRTk]1eoB0H[wmC-AqhNa75aBeAxdIsjK=Ee9p');
define('LOGGED_IN_SALT',   'jsGWhUtv}pdV6Wfv]tJE91;jcM,Z7kt[}UPnbfxQM8W6w,B6RmW0g4[gf[t-;ou2');
define('NONCE_SALT',       '6So3CQ]9;eTRZCW718v0QBzy.PDzjEk:JdCNIfl=J7ky}5jd:vDs-UctU6s.UF0z');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
