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
define('DB_NAME', 'service_hosting');

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
define('AUTH_KEY',         'F_x_TX=~v4oiYYX{(gzbe0+o>~pT?4$8yXn$-VBl_{ j;6v6!~rvk.<YUGDDs<m(');
define('SECURE_AUTH_KEY',  ')Tp9Z0Q]lqdl2yO-|LQ>km0PH3fnt)h}e7G6,@FDJ=OXaVs@,H$BR7+b^.hBmXjJ');
define('LOGGED_IN_KEY',    '|O}33+dom,)>(=l3d+{~)l|&-az6=P;u+=9_yJ^7Dv]/m+[^v[[H2Ns&Di,Rme_E');
define('NONCE_KEY',        'Qwbzb&,o*v,QT5yNJ[_8)9S+h/o*#W2%+b!f%zJq_-SfbjE|r2yZTgk:eP>k/t A');
define('AUTH_SALT',        ')AY}6V`T Crx,)vk{@$9MHKEvJ8]GzYA+T}_mMFDBde;Y7(0c4hffFv}wYn7Utcg');
define('SECURE_AUTH_SALT', ',w1!*dTTnjW<><fLq0B:BTPj6i$iCi8P[hw&*zxQv+cg{py;K;&.,&o%(l=qv&0|');
define('LOGGED_IN_SALT',   'alw@3x}LY6tFWW3~W;zQ}/lz8*ag(`Ep#=Zp~n`A.6:k,u@=t.j7N<A2DKbrsOg;');
define('NONCE_SALT',       '/2iI9BOr8i _Nh{Ig5E4b^;~8g|?>j(PIRKV[,?vo 6Vr8A0zuV-MUKedP.+<[l_');

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
