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

if(strstr($_SERVER['SERVER_NAME'], 'self-fit.local')){
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
}else{
	define( 'DB_NAME', 'kmmkcamy_selffit' );
	define( 'DB_USER', 'kmmkcamy_helvin' );
	define( 'DB_PASSWORD', 'Dora0411!?!' );
	define( 'DB_HOST', 'localhost' );
}

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
define('AUTH_KEY',         'CKNhoJF3ot4hAehNLRnKbyAMS1dnXFc2P8W5Li71yuuvrQz+ns6ZD3DpgKc/VtcPJ6/rGIuukdsfg8yExlT+5Q==');
define('SECURE_AUTH_KEY',  'VhEw/cjEhUc8prxkVHKoT0yTemt4z5jxRlOd8ThtPJH7hN2Cxc5LFMdVRuUi+AsOluZ54/PQoopvGAK2cAfVPw==');
define('LOGGED_IN_KEY',    'MxTyCosiLJ2phg8tEOXphWm4fT9BwW3oQw0xMbjF5bU/x4E2F6pKYgPmk+oTZ5bb2qPOt0Xr9kG8uX22Ps14Cg==');
define('NONCE_KEY',        'gl8Zfn5Ce1uapu4rtR+53r7xTy66+jDZdfcsdeNahF57N5RYLmeDmaOdaPLNpu5s13Jy5vbgiZNGj82Dg9bAsQ==');
define('AUTH_SALT',        'KIusu7AucZgsaklaWzDvEoivlSzgjKm1wFfGWEnzxIxAP8KetCYy9rQaGBErv3kvW25pMmrpflp/PgpfLnNhBw==');
define('SECURE_AUTH_SALT', 'GTK9I4UhxRkFRM2yG5U6BatPSEjZW9172HpcOQS+qCcDttZ9fc5W0BMznv5ifPMRefCi8OGoGBGbKJRp6BGMnw==');
define('LOGGED_IN_SALT',   '+hkBe4vdKmuwdU/4BcSAEP2wWW2WJg1VmGrBMY8nYcaw/pcDXTdTmBXtvtO8V4lPB6Lsq5+Try1wzySeMFPWSg==');
define('NONCE_SALT',       'aryldtGxf7b9CwJWQdcDRS0OFFbxwZlYSfxdIfAmRNWlyQRdStZjbv62Sz3lV71QoXs5P7WpWKAvY2pmpwnatQ==');

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
