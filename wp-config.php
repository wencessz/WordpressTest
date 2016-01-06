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
define('DB_NAME', 'wences_test');
//define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rootroot');
//define('DB_PASSWORD', '');


/** MySQL hostname */
define('DB_HOST', 'wordpresstest.cyzzbkmc8kww.us-west-2.rds.amazonaws.com:3306');
//define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '}4~#f@Z+sY&<Jp8fbXsc<Tw$38@Esqg%I%wt]c*,3|7)_#G$3=p|VKwD_.z*:2|3');
define('SECURE_AUTH_KEY',  'D^?>G2MeBEA?u8}5+Z=+qN`=_DjUWW~?xLra-%U9Lr@.(SS|aKUZ,2|Fws3zzvtj');
define('LOGGED_IN_KEY',    ':H}S93JzN?z)QPGRNeYW[<IjGPigG)IDB.KfH#FQX)^~+ko.X@>J!p|M*$Q!^3@v');
define('NONCE_KEY',        ']>8#A*Yb.>f!X2.ia%alKr@13Ym6+LVXeHh]rIYJ)-/#RU|Ux9$|Z,M.cU]%XM+(');
define('AUTH_SALT',        '0RO+qI]PQ_`V*M>k-1/p. n~uq448B# ?2nd*YRS65N/LmB:m@ACGse7R^/;@-`D');
define('SECURE_AUTH_SALT', 'Fc-=V}JvkFF[o(zH4gcPJ)00F*mSC_i)Sd}%=:688v0;-mV6~OsMiw4Of_*Bcl<%');
define('LOGGED_IN_SALT',   'grnUTSGe[z;NRbU>hPQ+|S8E|DbowCX2_XRn*D)W+c/CAz*6I$,o[MJl$7GIu(%w');
define('NONCE_SALT',       'D.vbr*=t)Xz,Uu*)8=5T6,<h.o!z_e-4xO>x]/XJ3;J|#p+-c=v>!gW7FgQCY9l8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
