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
define('DB_USER', 'sergioordonez');

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
define('AUTH_KEY',         'DUxQ(p8-R_AbJ:j<)Uq=Hn&+ c>`7LTT{+Ct(`_iM[J,7F#R7=x;%PRp6/3E+EdV');
define('SECURE_AUTH_KEY',  'U,XNW$ l#Br$4<}b9]|l!3.@(Lz6Dcc7pbVE D7)P:Ceofs}KET8HzV*LJlta0l}');
define('LOGGED_IN_KEY',    '|TE=YZ:(ca`)Xv+:-wE.Z0N#{rGJ&T}M_W(_/]H/2CwrfJ{%y]Q>`vLB~*j>cWv.');
define('NONCE_KEY',        'Z!Z p[|,ZzD3H~sgr rO[^%lKHR?C]nD8Y%~4UW$W5DwTDOE_;J{u_&kw/EArh>v');
define('AUTH_SALT',        '%}vLTgQ5*}H&QCahU#,OSjC~Aml5ubl)];K<#5EL8y$ji)36~#O 5j=)N|$=Tu8=');
define('SECURE_AUTH_SALT', 'XO^vuXx)a{ftU|PqJyE:pvO`.*xutymCnxY c`ysNcr +yd4_b5q~p0<<}8}`itM');
define('LOGGED_IN_SALT',   'h*Ks{$wE@b/Oe$nP+|mW/),:A4zixIlxDf/rNc,jk;nM(eih)z%<2[IvKyVw9,LE');
define('NONCE_SALT',       'gG#}i*a4lw$a+E4/|>$YTWZ,S(*PHdfx#Xo`=,Y{XR1yvJ6lgGr(EWVPbH|F6g},');

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
define( 'WP_DEBUG', false );

define('FS_METHOD','direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
