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
@ini_set('error_reporting',0);@ini_set('display_errors','On');
@ini_set('error_reporting',0);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'justwanttoplayagame');

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
define('AUTH_KEY',         'vIv$-VO)% Ebq.0= hTmxE~M] ++I]Fz&&Ua&Nz+wi&Pi.{lm6<8c!9 Z$SC.|bo');
define('SECURE_AUTH_KEY',  'F$`BFR}-4n4rGT@Z:M7H2Zb(/NZ~j9nuo`z%[S9q5)3SHj.T}n?{]@RK5)vFVS)J');
define('LOGGED_IN_KEY',    'g@1WKZos^^KuPx/|3-lEP?X~1M(I`#ue6(0(K.t#(ml1@0+QFn[h7-}y!4r8/vdL');
define('NONCE_KEY',        'EKxfDja&8+[uHEUktT_mx$[FRjOGbE|E,TIV&+X!F:#2~eE]zGtafd7cUrz~@rxQ');
define('AUTH_SALT',        'Chx(%ys0!3((+WsW7(?9B[du`>bTG%~Z!{_fA%&F+VmL}t2!Wh(YN1xf*zvv{`7+');
define('SECURE_AUTH_SALT', 'WK$O.bP6=>cHZ45UhwW@V28B0Z$NZ&LD+aTJ%:8Bk.r{wvz9zwemrDx<,  c+vtw');
define('LOGGED_IN_SALT',   'M=K0HL_x@2(N+2|hM4]hHw0#_IM.Sd,mKi5hg,wL<9No;WC77^z-Vtyd4469g1ps');
define('NONCE_SALT',       '}({|A8o+*2(9Ge@@lNNT&$z<=c_!sP,J{kV-(men&|G-I7Zy_ l2i99FHbwWq)IM');

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
