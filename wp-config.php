<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kircheimkino.com');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3307');

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
define('AUTH_KEY',         'y n^Yd>m:0oxo+IF;n*7:a:/aU=,NVs5:W[@,y$UNh.9LW.0.cmm5%(b1i)r<+8,');
define('SECURE_AUTH_KEY',  ']IG1/Gd8HcN7V|h<oJ9#.TMH.f]/peeW^Lh =)`52*P9~cvCl1z/w~*wY6PsX- n');
define('LOGGED_IN_KEY',    '=%1v5P+6y&}+N|&yb<O-Dz+iX[<XG=`/V>N&dn1v!7{R,Lh4Y?R}Abx$~]C9A,/H');
define('NONCE_KEY',        ':zKym#}$![Kd^+wM2W@dWE4z+E[.!qZjqZuus>~Q8JiJ&F%PA @1qaWgH5z3<KU?');
define('AUTH_SALT',        'i1;A2z~3$LiB~&-bV ;G%Z2,LFKJz&-`OYC)Q}vy1Ux!2Q;Iobov]#_k@JiulW-O');
define('SECURE_AUTH_SALT', '9@65F46gKXBYYB6-6h6Q.x%R|bA<%2NUZs|i(J4>.fn-~}.6nxoba3& 4I.] 0.t');
define('LOGGED_IN_SALT',   'a9a3d-i7kFgvF<yY}UD[&TY-{Ef~s3D2QTXY#r^4u%zPe5pd|Vi;/h;*CdpNlI)n');
define('NONCE_SALT',       'XSYwWa6n3B<[1Veb8BmA/&@g3[,xvP}_:5cJ+BnxdFkY=Kd.NV+P:)y!xwAv`bSl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
