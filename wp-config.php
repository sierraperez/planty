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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'KjY~PYx2,X+U kTxg@79k9:UHEi/uw&1CnZs-/Dh@|}UVRR%p?cEe#-%k`Le.?38' );
define( 'SECURE_AUTH_KEY',  'B)2&&Ek+d:@Kp{ZSoa4PN23g$uGA;9yC2ie<$sD-l7=3W:NJMc`P!`XO;~e@T~wr' );
define( 'LOGGED_IN_KEY',    '`5}L[,y5WPDbXIJ=0lm^ZJv+C|?uL=)xva;C[80_CmQB$Gcu&r]r H^`MWhay,pj' );
define( 'NONCE_KEY',        'p/,F#H#jV?0_.{Z~0zm8m11SpkOzJQb}c)wMkZ6#,Lpf4WgD|l%22_(gZ8qb:,lt' );
define( 'AUTH_SALT',        '@DJR1][m&)dj<oHQ /+}t3,biLd?ymLB.*@3<[z|#<9L])?-|%K>G#1PR%6-GI+A' );
define( 'SECURE_AUTH_SALT', 'joK|o2,dqYZ7eu4NTUB6mo%kPfh5sK7R/kbT,gk:hI`x7vD4frm)ViXk-VTMuzOp' );
define( 'LOGGED_IN_SALT',   '$-,tZtmR`%!@|?(4IrE[JBG17z5~:esy#|<jpohW4Sa!:E^$H0 LH#O5Ad8,t6(1' );
define( 'NONCE_SALT',       'hV3[z &5LBAE2]/W5F0nHhrtFQ9*efR|[RpRF]vA{ro59eKEiK8c(5ob)2toWvQ<' );

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
