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
define( 'DB_NAME', 'sm' );

/** Database username */
define( 'DB_USER', 'zabiro' );

/** Database password */
define( 'DB_PASSWORD', 'Sawadatsunayoshi1' );

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
define( 'AUTH_KEY',         'XV(_*]HMFfGuGLA`LUi.JaLMhI$(otyE6isrYI9Wk?.5i^.x|p*{]Zad6,F$[oL#' );
define( 'SECURE_AUTH_KEY',  'wBFnr}Ag[Ug13H&mko$<UjrOQC^_:v8J(W[;-vRb9#.PrPd)<S<BX$zK5LnS{-iA' );
define( 'LOGGED_IN_KEY',    ']wM#Pgh+G+ U;)kJ?OD=jhVi(+kO^9a_EAy#L<%qcBqg:cfc-%8mS]p7~tW5<@JA' );
define( 'NONCE_KEY',        ':jv#?0RZNZNx^<aj(^$#eC([qU/XFz[%s/[td|p.2Q~ciG+~ gL<-(y!<djz27bv' );
define( 'AUTH_SALT',        '%n8;2Lh;_z@ TuN^}-?v%]DA >V!]o_xkgpn%Uls9.R~vsqGYmh86*bg(//2Ex,!' );
define( 'SECURE_AUTH_SALT', 'E{]cULs-@,ajVuyEQRt.tL56@+;7DM>E<E2w,P5HIX~dE(%2)];V_=S/[7=wvuBH' );
define( 'LOGGED_IN_SALT',   'is)pZ7c<-;H>g;xuiJfJus2c%8jlavqc4$AypvF|^hy-$VLExi[E~(MHudJD%RKH' );
define( 'NONCE_SALT',       'd6-m6tBt=-Gjhn!I~CFj_RU5y0ZVf1ym/ZcQq~6pY_CcBjG$h)AD78H_Oy0JPA}A' );

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
