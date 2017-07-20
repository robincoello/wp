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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'q0XzJ@~Np0<OV:={,+;`.+{%1hQ_9ZcCgo=xz};u#,i|b#-3NKQLhZk(ryQj$ivY');
define('SECURE_AUTH_KEY',  '{c-S([b;xZTQ.ZypfF;T0T8A{D*y V7BE.-SJc 49ohwC.O<4VB+1*&O&:zSQKC9');
define('LOGGED_IN_KEY',    'O)Hs{9d!/`/NB,wtTEhf%gABhhV|Hm6$v#uQy[0Y||~-TJ.$s;{Ku?C#:k:Jdw?x');
define('NONCE_KEY',        'mH%$ 2H:!u-hSBE2J%rA-@+1~Fc+KJz*(m.>AYvX<TOT[]Db/+{`kB?n-9z9$*|k');
define('AUTH_SALT',        'r77{{Jk_JZ^S9n7V!@^Vx4*^3oO_];T :cDks-bL=`yrKM9>?:(4lyoQsThA>*m]');
define('SECURE_AUTH_SALT', 'P^q37`G,}X*{),5J+4[fBvLS]Io+Wx-SbZZ4Y0)}cxnO8W({i74cCE/7u/?~S7tL');
define('LOGGED_IN_SALT',   '6v,8ZoN_%NJ4{HYy4h #F:^0g0BU~ppqdYe<L}KMycz.6]p~o-x}`:~DT/L+t(3[');
define('NONCE_SALT',       'WD@&oxuzPKEGoWLEA[6^c]&WNY( S=:!pC=^m<bZ=<in3W~VsN`6 8.GD32J_Xp3');

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
