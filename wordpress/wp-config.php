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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'Tenshi');

/** MySQL database password */
define('DB_PASSWORD', 'test12345');

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
define('AUTH_KEY',         'N-3>vG@26bi!sRx?$;:?v@Lu|,OX~]9?QGnl~mAI<A:SI(9p<Y{=91[< SH=p4kf');
define('SECURE_AUTH_KEY',  '?,s~N}/Ow#8?z3h+-^(Ao_%h5.F[6%<ZTd0^kw8A;g!+`eKWam8Nf(mc~+!QQnWE');
define('LOGGED_IN_KEY',    '9^QX-RjyQ9TsDDs6]_N(_}Y57n,;k;wv_<8:{][ls$+6T N==fLilH9*O;Oa^2(/');
define('NONCE_KEY',        'ku,yd<X8V,~;v]lKU7T7Jv=lIvxF6nyNg4bwK=wU2J*=00h^JuO*$zTwe<Bsm.Kd');
define('AUTH_SALT',        'dDv{).P.G]h.91!Xn^=j,wWRcFW$~>)Sknt2ES`[a#iIYf,7CdE+5Ol=;9ynxjVb');
define('SECURE_AUTH_SALT', 'w,#/fGEHlj*R4rn`fB2RATekHZFbr1,0rB[`<Ib35.X@Gjue+k[//hO@X=i#h8o@');
define('LOGGED_IN_SALT',   'tj[fA3aoC4S]F?{+Ek@0s%a`V;XSe-Tu.j2K.%M0Q6=w[Qb(:3DRH4d[Muz+%?U,');
define('NONCE_SALT',       '5{[7<,iT,UoO2{ZdZ]=`-cOGRUV1&|RTiOcJEEEo@vA,dO1Knq(Fm.?uB|s7zr/c');

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
