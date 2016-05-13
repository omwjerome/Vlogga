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
define('DB_NAME', 'vlogga');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'A~~#_a:D#ol#_`mp@g#3O*)!{)e[<%mPn1TGwd),sA)&vE,OF2Gq8}v#>KPyz!%%');
define('SECURE_AUTH_KEY',  ']0u?D @{FC$][[=wVYBZ!.r128rnPzHm,g(:=%*a`3(d[q*/Z%>5uA&2c/,Mni$r');
define('LOGGED_IN_KEY',    '9MEDna02G0.$=%NB13Jd_s1`)R^ow%.bZ&[3^XU#s@v:-&x!Fe!:`VJG-9ZfdE1p');
define('NONCE_KEY',        'R]e@y$v3phS,rw|CPd425y7/8$X3r)Rg&cwt^J90lyc:9Yf>1agBOC^=R!CT Wtp');
define('AUTH_SALT',        'Y|)T0I1 W-4Ei~b6Ss86ORDHl_q#oMdglGL9hm[kh|tv.k+(`g~1rfjs}^tH=e^-');
define('SECURE_AUTH_SALT', '6H/uhQ_i|8d^Dj9Uzj1IW rVYYyJG.:|mdf{&}~-9PMe27WwO$f$8%U53cPM2&8V');
define('LOGGED_IN_SALT',   'c[y=`P`W%wz!9`u`*JwtTwFa]LH)2Q5vUY%g)4S4OJX>j3$7Xnvu?zD?jv</=sm/');
define('NONCE_SALT',       '7ag`WlpJI,:~;5ps#^d[:T/mE54xQuBa}2tZ6Pc*T><x@ezZ6%6tGJ~$gXzO#*G[');

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
