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
define( 'DB_NAME', 'menu_auteco' );

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
define( 'AUTH_KEY',         ')iVP!z]XCp=0)Rds%L%p9pC~=>b]7PM$:l<d<#^`)ax F/Oqibv.d!IT5b/,o}Lv' );
define( 'SECURE_AUTH_KEY',  'p  @:wE:h#kGl<x~:`~InXad|fcFk0bM%VT,y6K#PkCt4;o]t%sLn564_d^O4%S=' );
define( 'LOGGED_IN_KEY',    'E)%]vW,.MP+uzxz/o%`rc!csjxClTNbK+[?b&b-mtI4/1|htydu&hv87^.px@EgA' );
define( 'NONCE_KEY',        '(=Kl`;~otLE@p$(5_ymVB{t_tcTm8UB>]>~)wiVCmTu@k0T5@(R@N8&gJ8oz<=J>' );
define( 'AUTH_SALT',        '&~n,s]!pa[OBfZpfWa=f0s+ZkNYJHh`cj]Vbg2e}xQMQzF|8PCuk7[9~x0itqu{7' );
define( 'SECURE_AUTH_SALT', '<~Dxl.YjLlh+lJwf8`*NtiDc5$y,y31fW*^V+Kr}uxOTKhjS=Yu#5*+jwX7H1Y!{' );
define( 'LOGGED_IN_SALT',   '<L-vJg]C$~N11cgqF*@7Vt71XSEOaP9%H}C2s0*bbD5&%{>/Gg|)^zc<o=/i0pr#' );
define( 'NONCE_SALT',       'S>WSYgJm{%sWl H82 @-9H.$t?JcL<_P]89!P]|Ow`t@|sb}>(K%^;BzdHcQ41NV' );

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
