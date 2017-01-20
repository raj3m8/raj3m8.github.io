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
define('DB_NAME', 'heroku_6c077afcca543e0');

/** MySQL database username */
define('DB_USER', 'b982380a6ec252');

/** MySQL database password */
define('DB_PASSWORD', '195c9a2a');

/** MySQL hostname */
define('DB_HOST', 'us-iron-auto-dca-04-a.cleardb.net');

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
define('AUTH_KEY',         'L;S(aMF~z?;-7#S{~txW{kRFPTh#ZW_Ixw5&W](II/_H%J0>7C_Um+,7NAFY<)YX');
define('SECURE_AUTH_KEY',  'tk*+SHrqO&jD7*)/?/G`z@an&Cf};|u(zVkcu,t$KSs)XwB9o,R|AyXz9B8c2L|n');
define('LOGGED_IN_KEY',    'j?>sCa|~jIFK<ACJ!CARD$YO(W|4=1+t0?5bf;-B-HFz,W6biqn1ft7|8J9Atb7+');
define('NONCE_KEY',        'AL2<c,cEGO:~ENk{/oOkfOp$|Q+9A5p`~T[*X@o{9k%,*l1YkzpZi9O2I~s9YyO/');
define('AUTH_SALT',        ':4w_@)3!z!xpBVVw.&O!)S0#bFH(AYS2ieG=aObfgXJw />)ZG:0B{E8.Jrq2L^+');
define('SECURE_AUTH_SALT', '+`Y$B<@xFC5MEK$EUyV{}ps_5+k]i0&@J^oi07Fe-`801U5xWr<J=Z^%&B.$lrN0');
define('LOGGED_IN_SALT',   '6g2J,y/CZ{w-PI{9`<nt2T5AOoFwGr^zplO~lmC*CZ9 1#4GV85rIXjr~vO0,m7f');
define('NONCE_SALT',       'FKA6m|fX$ ug>#f)a7!0i*)A=9WvqHsr5&33Tpv/@x`(u%w%y6>M`BtNu39c G`=');

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
