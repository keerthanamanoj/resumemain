<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'data_tworesume' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6|{M W[nmXhCT~.<.~JP!)mk}.7dd/Xn-K-r%dyYV[}2Yfs^WzHrPq?-}%wMx0AD' );
define( 'SECURE_AUTH_KEY',  'myF&@3P&hI0D#tUSc*v%I]p|Y8D=S||R|Fx;3X;==JOq]g^u!V);qyyd{L(X[Ln>' );
define( 'LOGGED_IN_KEY',    '{yQ7^ :{l;Gz1F`qH[zk;#aPqEAB}@%QNQppi.Sc9:;u&7AC`8`xG5`*S[m;_.!6' );
define( 'NONCE_KEY',        'nB>}=[MSB.g,on)ek`WU<&ffaTcdPE+~$-|$mN,8z48OjP@pgvHYwLGyrS}%GE_f' );
define( 'AUTH_SALT',        'l<$x}SkpeMVq#q9hK@,XWuG$T7Cs.:c@}+F53X-S}HO3[w6&@hv 7RfLp_4Z5%D6' );
define( 'SECURE_AUTH_SALT', 'x+>I/)< Zo=JA7HpQrN0n/[C73__a~9H=pb%FvPL?Co4oMj.^%2+ O7:|_4@-Heq' );
define( 'LOGGED_IN_SALT',   'bpACgqy5;)#4qz)=Uft+6:{~/IP>gBgbhC9D H>)=L__okkcx:lA=+$D poiEtbp' );
define( 'NONCE_SALT',       'T~#.,H?X{G.O,%8g8NO)]%}k0S|fo@ lvFm7xvW6<I[%-?!t$4mriE-kjuMmEp8H' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
