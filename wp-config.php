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
define('DB_NAME', 'civorra');

/** MySQL database username */
define('DB_USER', 'vincent');

/** MySQL database password */
define('DB_PASSWORD', '1Tvmq2tl@');

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
define('AUTH_KEY',         ';xQ~vy<k4k3OXf2WGET5UxGXUZ-CQ:l}2=4*,4/RTqD4+Qeqp`vyGHJ%TKrD^Q=T');
define('SECURE_AUTH_KEY',  'kFKWm$C/pS,875x3uZ;*b/XZ%JTv1-n.h[<PIQ{FtSYyzTlY^a%cBP2E_g-I~Pyd');
define('LOGGED_IN_KEY',    ' oVN?Zl {w)2mIxjoI&,gL|5e@S_dL.qh3VI~Ns[s%sTGR;wHfW5Tz}6+mDz=T;v');
define('NONCE_KEY',        '=Kh,XJHH>QI.9|VwBgoqFm(:!oY|Lt=W-EErY]UX]4S11c~q&,I&Io|+Bi-inl)Q');
define('AUTH_SALT',        'dVJ[J3~FLEV6pNo1z-a&5k>Lb?J,F#k[O`+D83M7wgH]byqJ~,O~1fQMY@kq`ZNF');
define('SECURE_AUTH_SALT', '`c[_v|pz]?/2@1tmSiKo5VcA:,Q&C?Civ%2 ^Y=--*K]b.^Dy^vbMQ.?nR4h)W}c');
define('LOGGED_IN_SALT',   ' ,QiWzA<d%mUl6w$m5HsQI+}KE 3+@|CB-Y9Y~wClC$JvNy*YSnHVV}#Y5)]@1k^');
define('NONCE_SALT',       '`h[,Q:`(7h)muwIFny.)?ZT~b?jv0m-?7z3U<XBo;%Wzi}yYb*bnA -PJqN~0B[}');

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
