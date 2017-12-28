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
define('DB_NAME', 'wp_david');

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
define('AUTH_KEY',         '5>w7=dL*Ixn5x/!w`>1}lKz]G%>*fWa2mxBLt~_bgxP/O[11V*.r|o {176n|~~o');
define('SECURE_AUTH_KEY',  '!<tiVh8-po(-pS$c81`}j?B=~4=>Musdr)K~d]a&TTA&>4mzbP%:Xyij&@gSL1]y');
define('LOGGED_IN_KEY',    'wI8${yA0Er#pU]?Ul(,PwEky9^Xcg,#hR@OaIpgSjXvDi7&[p10ReKi&@_5l%mrz');
define('NONCE_KEY',        '<=n@B[DI^Y6S#9olY?R8-vMs=HmQ[==,X?CBJ:5[lY.J<V=D3T3-g6#`rR1H{u=_');
define('AUTH_SALT',        '=GLPd7]~(x%_vFKPqZdYww@=#<UmtPz#3dZUtoykQSxZ;DZJj!!z2+1h,d8*052q');
define('SECURE_AUTH_SALT', 'g6Z4CxUA]8Bm8 ):[o_B8P~:8NuciM:9F1}BAd-ecau^%zZ0,w(Hul:wv2+n%hR5');
define('LOGGED_IN_SALT',   '9Rs&&77s3gq`6i2{kp3]P,Yo-[j.A;U)@ti^K~`P}A(8mofPb |=p/V`jc`)vcSt');
define('NONCE_SALT',       'x<Oo|Re3U.#LUM^,8}A13.TWv|^Ver>T)~#wC%uJ]U4&m@V>HuF4J2By/{BIdsId');

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
