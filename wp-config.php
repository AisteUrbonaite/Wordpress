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
define('DB_NAME', 'ausra');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$|XBa ;}}v[/e`jl)S=b0LEp);i#R=pit:!XHV,+TbfP;_gd{_}G.*y`X>|Qp)Vg');
define('SECURE_AUTH_KEY',  '4Dh$?;c.EB*<N12FJN7;gGsuusG)Tq`PReosGZ_K2U,:jTUX:.RSo&_nS|}C^ZpO');
define('LOGGED_IN_KEY',    'PNItho$hrt4^+^eXs(8)3!e$EPG`mzad?ueY`-GZI&KQ|kI#W8i~ns|+tV{L*nqC');
define('NONCE_KEY',        '=|Gc(1T@|YO!gnun}EE@lp>*TsNlx+ 0rNVi]5#qcSEcP30f71W!&h1=6g;AAt?v');
define('AUTH_SALT',        '7-=9Ba.>Dg, otz,S!&wwYS](3l:>LIH<wkwFA)akc?&+s;)Vx/vA8#-NI_8G7*r');
define('SECURE_AUTH_SALT', 'L6/FGc| P:gE6@do}/,MoAtb*AKX2{Z(l7Dph<(**gi;bTyyn*`[<S(J,Ge~gOp:');
define('LOGGED_IN_SALT',   'QJ,7{@R?sj ethR^@e%M#L(h#HO^AZQ|3(beJVO0l;n!7?0#OgS./8e*%fR>Fl]a');
define('NONCE_SALT',       't8lMRCnK:Pph LG ]L.zo?jcXt+8?wNi^pE1Op5%O+Dfe|TA5G=>o(zs&-*[`E~2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
