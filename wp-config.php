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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ash_domsters_static_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~pI!%NqLxs#^nKPdfN+K4c!P?W~PLy0ocSWg{F|~hm?8;51%!Z)z&d7ua-s[ 0uI' );
define( 'SECURE_AUTH_KEY',  'JE_)gJAm4IQ8,.Y,l j{A;+7UvLs*SEOZeX}FOW;e)s`RZTF*0F=(YWh]$j3[)ZJ' );
define( 'LOGGED_IN_KEY',    'x&kGQoLzc1Sotp6iWccU|(s$bI=fY8k|3Ue$yNy)+$1Xoi%s0m ze+lz]3!xPlQ,' );
define( 'NONCE_KEY',        ':!}pf,6)UXW9PdPW%V&C?~dvfKTv3/?qH/r-BR~nH:ptwpDt)S<*KRrL)ohm-EY*' );
define( 'AUTH_SALT',        'S;9Kew[4.i%|q/&PeS#f!&IA*Dp>=:E&c9I9b >d2DrW^?Molh)2UbU20v^9`w6J' );
define( 'SECURE_AUTH_SALT', 'Q[T-(`S. |VrnAyt~a@n;|L3-rV{4J>&[d]tR$=,ZXD~wq3NoK8.Rv|Q?MtWF49#' );
define( 'LOGGED_IN_SALT',   ')a+_;UemWp|YX~Hir>n0IhpT<i3?*t _!kDwb8H9N!KC6]zp|?0CN/NCX?;mCe7V' );
define( 'NONCE_SALT',       'F+x~!N0xi,4hj#pZI7Wo^a<4doj)KLJkYa,8G)EbBWR]G=p5w(9|:{xzI twsrl^' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/* only set to true in development*/
define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
