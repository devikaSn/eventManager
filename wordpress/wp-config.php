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
define('DB_NAME', 'event_manager');

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
define('AUTH_KEY',         'Ne}z<!V:@MRDTIL:zDhtW^5IO_7 LrRv|2%PM2Lx.PLi66U:.a+dRfUh5sW!LN^V');
define('SECURE_AUTH_KEY',  'c!f2PTjJzAONvj.G~($j:5}9W%jVeuYdEYAxpS?t7}v[EG+BvfvWa%La[cWi?D)=');
define('LOGGED_IN_KEY',    '$V~OCzxg&zwJq(bvj[+Mc.vp D(.B]e:S]L~P/sv5vT1r.dw9D!qH8oB8eRD;]|!');
define('NONCE_KEY',        'k*}RYKia1d|h3^}*eH`uQVrBa=y;m$hXqHo-oM2<tj_^R0iCRETR,wC/:aZ<8$,%');
define('AUTH_SALT',        'r)I^5[jX!CGcWV&rYu[W,6V08:e0#yURSt8AHtfkNe[)U<B.tagm=EhI$IlYm7ey');
define('SECURE_AUTH_SALT', 'wjc&ge:mE?f fylk8K:lzjWY>`t0Ob!vWTadEz>3gU*s|OV+X[t}Z%NtZ;rEJmsC');
define('LOGGED_IN_SALT',   ' v0c&1^(I iwP(k{aIhS-H]sP<(rx,|@d:%}$l$+YT5.]XVmyYHAS2arC=kcwi1P');
define('NONCE_SALT',       '=vZ?9kv7J}>?)1e*EGmC=;m)g1Xs{$q; 3y>64W-P!FlGHU*I|p /(Koq=*I9|u3');

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
