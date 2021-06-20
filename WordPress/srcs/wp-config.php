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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root');

/** MySQL database password */
define( 'DB_PASSWORD', '1337' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ' 4hRqY:wNUt~SD^Z$U:h{#(0$_SGhLX_Q1 2_NTZv{ByVa0GC)v+5#?.4(lgk;J;');
define('SECURE_AUTH_KEY',  'cw(bg(>DXZ-U@2R-.bb$MR[dJ myg@=DDSK+55|(mCY:5@l,e1)0W&3a+HnLGptQ');
define('LOGGED_IN_KEY',    '>uit9H*R=wT~a*)HC@6MFOW`tW*v>Zpy?D66sOEN4:*[L@`iic0vw_8hCJvn(/?|');
define('NONCE_KEY',        '.3}m|XS10z5Y[8VX4gT?WwgZXhdW~aOQ=1 zXmSmfTiMadZRk+l^u4}r,J_;D*)]');
define('AUTH_SALT',        'Iz(!WyeemaUB.Ha^C}YtT`(-M,K.5N<s.!m[px|_8IW,vdDI~bw`|L|PISCM@?v?');
define('SECURE_AUTH_SALT', '?QIslD3Y2I`gK4BIYL*,,xs9yMV+])~vs;T!])_&^&aF<QWwzfu]YoSrulr-Xl_w');
define('LOGGED_IN_SALT',   'H:i~)D*|S_Vl`.47F/-{p>,IWC9]FrQ+.L.z.NDj><_V;?G|t&Sfb`9+E+oBL&Kz');
define('NONCE_SALT',       '<+@i<($#9[6;!XoN!m,^eH[|CG$E;x+kIoP%?y)T,BUh7W2~(jj$$@T be`n0afy');

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
