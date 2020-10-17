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
define( 'DB_NAME', 'store' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'IDgw{q/W3Q~rkGc+ByNz.Ch=)U7kUjhc zsQvG?9&j>oTFhBCTb170OAHscU<.VW' );
define( 'SECURE_AUTH_KEY',  'w^owTXOVz92_O`{!CMU3|?V5Ma9?E{O.4]}2Z4sDRXHU:fHr+@c4,F@qoqk]aBIq' );
define( 'LOGGED_IN_KEY',    'z{o-mH6}2m N4%@on#.gx6}`L,kZk&^j=_:$Hd49<UgNDF(gK_:.@YY|R@^SS=NO' );
define( 'NONCE_KEY',        ':]rD]G*ck0VZ1z,]`>Sq@L((<ubwLIoj:Qy0M3I@@#R!/^hoLf+5d@yq0F.BVK,#' );
define( 'AUTH_SALT',        ']^BVkwpcUbl}>lX:-W3@v)P0kCO] P<d>9cpiU~Z&.8}fXd;a221@$ZY=j+n(d9H' );
define( 'SECURE_AUTH_SALT', 'Fp!7gzbKc5s?zAj!spKTA&{/%-(B|G;eo~S2%:YKc_GCR~!M3X+2.tU^jWxI?XSn' );
define( 'LOGGED_IN_SALT',   'TBq/_iAOdbdB*Pc*M?`}AdM4E2kn2 ::5Oo]#KDX.H5]Y_k1y}*rZJ-]NXb$ZsP7' );
define( 'NONCE_SALT',       '.ZQujsC]x-t#ltaD}C_?#;czx%:Ec;pWGTtn(NI_i!.LAr7a=qe:3J~1.{%b.I-C' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'store_';

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
