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
define('DB_NAME', 'japr7195db');

/** MySQL database username */
// define('DB_USER', 'japr7195');
define('DB_USER', 'root');

/** MySQL database password */
// define('DB_PASSWORD', 'tweety2121!');
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
define('AUTH_KEY',         't7O#}./~wmi:23?)}a<s+_P,{*jD!>1 IkE#9k+}F7)2MA+|~&qRvr792c4)ZTo[');
define('SECURE_AUTH_KEY',  '*d+UEv15a#k=Il!+v/df(C{a|Yd>CMQwi c~aB#Qk4!A%MtQ4bs5_^DZ650r)J1W');
define('LOGGED_IN_KEY',    '}b;sL)x)N|T&-}}Q~|7j(-i-]|c[)kX2!E]y6[ku8-~8-gF4hp&1)C#.N=E<*j5)');
define('NONCE_KEY',        'eerK)i<s/DQ`pQ6[>(dmj+^7kx~=9y>>gW4jTl3<@zDOA!EI:ynl=2<g(2%R:Tq<');
define('AUTH_SALT',        '?r)WxZ)cAPz%4W-S[<m8|,M)r`V0^:}d:X<Ys~h>SB1`;SZ@0w5B[ u=!I+P6bqA');
define('SECURE_AUTH_SALT', '@8uU/nOD,HNkmygh?tKf1ZW!qh(+3,:&})IN11u_.[>V0ISwu|2bF4X@V:zMnIsN');
define('LOGGED_IN_SALT',   'CsH|%BoB}CtaKqK5K#zUZs@E9GQG+{Yo_auJ(4p]c8:oT5Nx^; L-xT_bh:Zl1Iu');
define('NONCE_SALT',       '(h~K<-(g,yQo~>EVo_Ub0mG*{j[L:H>auZE:^J{Og2V-!wf~~9Oc}<*c*OV$OQ|b');

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
