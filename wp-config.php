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
define( 'DB_NAME', 'wp_api' );

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
define( 'AUTH_KEY',         'F|C?|A:pGqV6b!1EG4wcbo{H51dd-[1TzejaQw<%83:EZjJjjsjHl,->j6#Quz_$' );
define( 'SECURE_AUTH_KEY',  'S1B+8}f:*,>AW3Z(e7wgo8u}i)}2z}r,W/coH7`CF*aoIo|GWd88{5?WF!OgivD/' );
define( 'LOGGED_IN_KEY',    'AE/hRv)EB>`o2^K$weQ~G3G9>8du-qeGh-*0}haRm6Ms4<a}W/,#i1TQ|bF.a[Oy' );
define( 'NONCE_KEY',        'WFtG_enI^[1gYHs*)SYM!3DD1bcl7(K?!KL<<3.y=NQxZrOGA1o]24epq?St|h^9' );
define( 'AUTH_SALT',        'dXekRU9Pz#(0_ $+ZX-Hc*Ve^gn/V8F Tw?[O}&QJQL-4x]`)d9^UPuu!@-}E5EH' );
define( 'SECURE_AUTH_SALT', 'ukRjO@9`C$S#jRnav,Hz$5tXuj4UQ!aEDBP>JQy { }?%)}kp5Vd;!0}9~hF.w6=' );
define( 'LOGGED_IN_SALT',   '=?veMcLCB#@bw6Fype1/QMd&gIG{*?8}orc7Wv-w|vB9^DuK6J#Wq~#C*jO=$f7p' );
define( 'NONCE_SALT',       '#^Ga~q(k;]MmzAGd/m,{yKdS!c.Xw40|O~TA2vTnwv8Jn6._5@E<LK*t-TA>bR7a' );
define('JWT_AUTH_SECRET_KEY', 'I_h+}R,WxM%Q@X5k6]keLiYkSG-)9Q+Q`c$|}~uoiMnol@- zKQ $JcVPXe+s?NK');
define('JWT_AUTH_CORS_ENABLE', true);



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
