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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kuru_kuru' );

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
define( 'AUTH_KEY',         ',fdEzMvJ,Gt:Ak%-L-<VGMk,}<rBjDtcmA;qUMHMtY0rIx.G7qfK6(S}}AuE]6eh' );
define( 'SECURE_AUTH_KEY',  'Z~3M:ivkoH9$#0wqh@Nhh`hg76L?Y=p*4z9.:9c~~,d-]=8#e<c]?7b-|&-oZnbe' );
define( 'LOGGED_IN_KEY',    'K+SM/F,qGrvV#6H=ed=|cmutqMxz{W3%Tn)@Rz$9h hGHV9)n2~w`0NtTn uvwjy' );
define( 'NONCE_KEY',        '93n;}h%SeUaWvqdHDBas?^+)Jfr`~<-lo[N>.0)|f(ysn?sE|(w]j3$vuU6c>;8o' );
define( 'AUTH_SALT',        'U 7ejW-+q-MqWra}*B% S,a$&yIZfu(S|mtMuN?fhb|8|- Ljx>g42V.F#[&1*Wi' );
define( 'SECURE_AUTH_SALT', 'gVNhKSRtf-DXNFPUR1@;htt}+XH%8hF}f$Vy+F|dUvUEP0%-UJUMU%#NtuEeq_oV' );
define( 'LOGGED_IN_SALT',   'ZMMuR-L]cvS@NqNfd%M`PE!4Moi;kd5Mg+A;Z;71.6*-*enA!BT*4C~i=?1vaJ@>' );
define( 'NONCE_SALT',       'qeA,!m+)nGM~Be8%Y-$4xZ_%r3c)B%-J[&l:?W/zq*32$r cX]_Ez # tk:-W+*>' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
