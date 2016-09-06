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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
 define('AUTH_KEY',         'g6IJtx|,F)[zirIb._DP*wgL/+>PXb :*UP|,^%HogA4k+NZ,|?`d2>||BZ+5>]4');
 define('SECURE_AUTH_KEY',  'w`n|G2X+h}}*W/j0j]vOxMJO]=fV3nfBc(}|m=.q*xLXSQPon]kQ:{&`r-v+DuoR');
 define('LOGGED_IN_KEY',    'A_pm8+we:jeiTN9:&|4skvi@:hy~($/[F1A2H }:]m|9=mxl6 (-`+5 LG0|<U#P');
 define('NONCE_KEY',        'vATEv.JGOp,R~owt6+fp+4]E`k=rbDsU0EjOtWK?*VE@v|]9mrt|}lw<6rW=m|Uo');
 define('AUTH_SALT',        '[&oLuv#R|vjkZdl>RXRl>/|Xf#=0nf-`O?h<fA@YOX47@QPVj$9),{.^SwY2YFZ5');
 define('SECURE_AUTH_SALT', '@P|`MH(*Xc/;Sbj0SEx<+b<EP&/.LeUdS[>|&h50aMXtW]TYx>.@1O`}$,yN5%/s');
 define('LOGGED_IN_SALT',   'Wc;=-%Kbch^!.Yy|fat)TT9#7^59&u-jF<Zx.UsDLo=V2ikt.ss]UK<i]ph9{oqj');
 define('NONCE_SALT',       '1SxwU>2lNvwO{}uv$|X^0-iIK1.^G?J;LI.Z:K;AObk:Nj^hjdnH#2$<}[pqi~55');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
