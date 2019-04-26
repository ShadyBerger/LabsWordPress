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
define( 'DB_NAME', 'LabsShady' );

/** MySQL database username */
define( 'DB_USER', 'shady' );

/** MySQL database password */
define( 'DB_PASSWORD', 'shady' );

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
define( 'AUTH_KEY',         '[xi~LI*zU7n=gP8Le)XqOXqTFkZ_y]3Q@~O,aLfO)2cM9`W@$y/~[A8!&-&&:HyO' );
define( 'SECURE_AUTH_KEY',  '1Y.!-7 -!Ul8i B#`$zyL3dPmEo|f`6V@e:X}7gm/x*29N33kC}xY/|_DZ^LXGjO' );
define( 'LOGGED_IN_KEY',    'R5~9wiw#Fj:o  d?(x1d>c)}zXvW$HPG.8qm8niMnia+~gH75hK*U8)$OC>_tVtt' );
define( 'NONCE_KEY',        '?5i||cQx3IdNUndz2aj@1A*PbQ:By/0x0X%lzX5E6@nF~0&~#%-WG3vl|]y>S!V ' );
define( 'AUTH_SALT',        '_`fk(KERvdPj4=<%D{a(oSWgNL Xa=ZV>:m4zm5c+k:fDCt2seylq(Nh@y]W5mE>' );
define( 'SECURE_AUTH_SALT', 'tER<3dd_3|lo[Wx}B@-EY^tliDPR2_=pdJk`e`NS})p|nm{.i4u(x@8Kyx:7n:y!' );
define( 'LOGGED_IN_SALT',   'Ny7nBCCC7gw8f=>Rt<sFCyF:u&!rD|%T.o,WC6JgXZ7%c!a1pr8zaVz@ebD?vjsU' );
define( 'NONCE_SALT',       '7bL),d5Ak~Ne(e/.QAaQ]h]_.XT|@DPJwQ4{qA(@S2Xp$Z01L7IET>:?_TmjA>R6' );

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
