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
define( 'DB_NAME', 'New Era' );

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
define( 'AUTH_KEY',         'jIyyr!o8?;)PX7V]g7=tGsKS8Fbh21y$5$Nk99uSf6HFhBk+v*/T4g%tl]D6)&R:' );
define( 'SECURE_AUTH_KEY',  '2>]~ywwJh=ptn7GR`Vk0ne{p=g_P?<Df&D/y/k&^R9pvs_k9Jl.v35YOPq1g]}It' );
define( 'LOGGED_IN_KEY',    'BXkhyM^Ns#.c:A1e/pUQWD##&!GCBx |!ZM1eX8r+}gZWCUS{-2B?z*0CI^6k<ht' );
define( 'NONCE_KEY',        'WxK)KXW4?$;4_^(;,><P,Yrb<xfszKTQs-l# .v0:nl5ihlG]R5o.RzvzQqyRvwj' );
define( 'AUTH_SALT',        '<|_qP67VubzA@{>dF9X`*HQ#.VI7VJ|O,Eq3c$Er6*3Jz}?=*wFlE|[rZs6Y{e(w' );
define( 'SECURE_AUTH_SALT', '{n(S,|%lL9=G8I%QR>wp-O~QOAv8mlJri_;~QwX;o/`nV_|uFco1l8|@has.?f>.' );
define( 'LOGGED_IN_SALT',   'gCq{gG[Crx9+iP98p~*562F|tB)dDt1s#:bkzCMu$6J^Sc, R%UgAsbcRX4~89h?' );
define( 'NONCE_SALT',       'bAg4 wWJQ&p&EiuWb8f<t?W}KgiZs 5:@tIz@}enbxMP%bWXg_L&TU!?YT{fs5&T' );

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
