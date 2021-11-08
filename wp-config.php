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
define( 'DB_NAME', 'tahitibd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '#;tDYi`=)+=0]W+Qp5WZ4S3{Qs(l4A!t=.-jP;(gV`Y]#Do&iig{)]*}B-5X3SSO' );
define( 'SECURE_AUTH_KEY',  'hEY;]n9;216H~BM}FCsgVR;4zYLVL6sG *-9WRFM0tBzFAIXzv-Aa5>1xye&y#O;' );
define( 'LOGGED_IN_KEY',    'Z)3<^FSWDNBck.L2:6*L>~>NyS]YC<%DN~m[mU(Jkg|r&&zn$jxc<R$C-qW pY;+' );
define( 'NONCE_KEY',        'CxZ?u).6sh9pxd9yDw.ZH<R #1bji466} 6Y12UDK:vIlCKJ&)ty^Q~b1l)t9o`6' );
define( 'AUTH_SALT',        '$+:).5`Aa9wD{F|n>n At}VmLq;e0KE=ESD!Wiub{Z^7{z2Yt:&MAiBbT(Y]+@R$' );
define( 'SECURE_AUTH_SALT', 'uq2W;2kyBNH4^`mK@/`RoqL*[OIX4?[)VR5:|X/&IuFP9w}e.xu{$aM/D6:)}75v' );
define( 'LOGGED_IN_SALT',   '|s#!faD{`dxMxJ<bj|#ct3_yATCLa$RG`M9YQ4Tb.@W96N%l&SgQNK.MF79riS@~' );
define( 'NONCE_SALT',       'SxyBWg6ZRool28+,$N7Xf<>g=;x^IV|I}0bh} tqK4?oA*-EL+*11(W-MhZliGZ9' );

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
