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
define('DB_NAME', 'nyobaksepuluh');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '9kali9=81ub');

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
define('AUTH_KEY',         'phqs1^Cu(G_SGjZ_K,T3F]Z6H-CMxrKv>i/zert=*_c2hG],uKT=^ wWYga-$#(d');
define('SECURE_AUTH_KEY',  '8vU$Q0VQ$9=^I4zOI25(5x%BjA9.x?,;q,p!D!B$xeGP3uiFo#4(V+OF76:MdCzI');
define('LOGGED_IN_KEY',    '-?/CVGCovBEV|el|39Tng|G0`EtdPyuYgteIU^]ZXZs|Y0:}SJStR4D|YB**;OO3');
define('NONCE_KEY',        '4.JvZ0<Dd|uD14V-S7eNnbZ#=MB-o+3&Bx>j}vkT1%qDHnh7VafET/};ls13p5Mp');
define('AUTH_SALT',        '(GNwvSEOR/]oX(0p5W!uU_q~gY%U<T#9U}gTosvOFE)_:6>!%+Q=gCI]e|WHl<#R');
define('SECURE_AUTH_SALT', 'bC(#$$Q<%`ep;t/#2avZu P@W|44FQRK8rLW~wV3^8qYLHEw#?@qt>^7m?^z:`~g');
define('LOGGED_IN_SALT',   'XO~cNvKuqHEG.p=?^.*6U%#6{/sJ 7W)A1sw!*iXh[x/X6zRh5CcHKEj#p2;O<pW');
define('NONCE_SALT',       '(?3[j5P|-Me7?=F0h:n8-il0{~I[*D:Rk]qX^{fu8fh0$?Jy2 !T>$iOAeeO`[`U');

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
