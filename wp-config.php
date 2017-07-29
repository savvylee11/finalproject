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
define('DB_NAME', 'finalproject');

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
define('AUTH_KEY',         'TIaT/oj2g*FsrOv9_P=pQ>PqLBXU#)KKfL$w;23r_Q{dC{K:Tq`,U=0ubeUb{3|h');
define('SECURE_AUTH_KEY',  '#zZ?[1M+Q|fdK@)uhcAx@[~{9$1EV(^zETvg2rk$_w%XLl<UjuTSnmt2QXX^p=$o');
define('LOGGED_IN_KEY',    '@[BIRZ<@E7gs?4(<rB?4eQL7i]yr:8cLzI*ofX+k@]N NgF3%E 1WoBYNO{kb)HU');
define('NONCE_KEY',        '#%B;.0 kJ3EA:aajAOCZQG[W%LWQo056;}+4`t!z0|!l}XR_{w=~vx+_:bR Ywg`');
define('AUTH_SALT',        'Q;yga)5U~6vgyC4`$V/O=r-h6awy,iP=MyDI:]>hVT78Q2!K,IY;vqu>n$Bf_7a3');
define('SECURE_AUTH_SALT', '{G@[G(tH.Z(3=I5EJ]$m~^C)Q8rS:,:12lSVtLX.8QfM|^+<c~&(-H>QCNg*f75n');
define('LOGGED_IN_SALT',   '5B?8`-JJ}^pLtW8os7 t}R&?fdYO]h$WB+)ym|-:xUKEyqGQG` Swt[L,y33CF3.');
define('NONCE_SALT',       '_++^;K<M6o@D+cUMTk7WFpe>oJ0`>MraEM6geL+We?_<jUQh0y};b0F!QZ!jxJ+p');

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
