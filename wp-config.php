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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '#b31kHscd-q7YplX:4+~|<,Fh$+-OS(al}-6J$O,)u`k{SO~F8X~x1iL}ZhK:]z?');
define('SECURE_AUTH_KEY',  'tZY:Zmm+9&x2zc|:;t-vvh{pTy%x-MJoY< E#_vc=+N6q*?]_##]&s?3(rr?*,ys');
define('LOGGED_IN_KEY',    '!cS;+$=X@rZ77kP.`#y/2`2IS+s@k@VrqOST/co(ih*s@*SOotG9:6@A:d>;fkEa');
define('NONCE_KEY',        'se#zd]5v0O{X!xsN|ZduR|09aWghfT Bhp7b&XN},(y2~~a/A[?$wEG5(!N?Q^T;');
define('AUTH_SALT',        'sP{|*GjfG )=Z0($|8>WexvGbE+~/JawM-yx|SB0lP0/)xa/!Q-8uY+GeUn6Ya9B');
define('SECURE_AUTH_SALT', '5L9/!]El!o;y@3|S*()5w[MRCkvTf+|NFw,-WaSut-uJ>9o1L^ohBNS<Lc#_y7+Y');
define('LOGGED_IN_SALT',   '1>H$#5#O=zam;nD1U}Yufwl`u5n!vClY<Ut)v#.a-YJ-nVJesXe+kE5FkVu-D8`K');
define('NONCE_SALT',       '+X.Q%Tn(_vjZ~`}>=g*.@ajk~vfd?!DE+:38HAn}h[apETM{yMZG$;$dr+=Tjt/L');

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
