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
define('DB_NAME', 'omaha-film-festival');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
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
define('AUTH_KEY',         'S-uLYGwkU^$6~}6?5O2I2)ycEm+bgO--u@6=NlUO4/njFe,+K&y>>m=][PY`<-Ws');
define('SECURE_AUTH_KEY',  '>aTVLW?)Cy=&@lL<c[l.#[Kem5jA$lpM{YI6>G5x-O7<W>#n:=nK@LSp~%qzO<X]');
define('LOGGED_IN_KEY',    '|mv+vMg}5qS.TwbwM&$E2;%1^%oGN;x`E2O(U;~g8;]OyNSK^(W.}CXEcbV4[1K+');
define('NONCE_KEY',        '1(l;dh|]DQ.S~<}sf21FF2<C6L-N4Bp:n&N_u:`XEs*q)btu&,0AI)V4.{>(h&Q9');
define('AUTH_SALT',        '+[VR),%AaXybN5F`r<$&ICgBQ7@Tz*I[UuO{D$zEC$|KoD+08[;t^2z<kb?E0b(r');
define('SECURE_AUTH_SALT', '<w2;gc:Xf#flr^r3em-+OS/4v]?qo19[DE9^b37+q?/uDyUCtro;_{J/1166C<`c');
define('LOGGED_IN_SALT',   'c[9+n}4f[/:SfnyO,8|QuWxHxr}DM>{mHyf.|)6[Zc<4K=lu|6GMDG8caw-~+QgJ');
define('NONCE_SALT',       'zJ:7~x=6CaWli{Gx^AJ*Ujh9)2;a!2Hy%T&&hR~yPtfI#(l`rc8fbs+>a|;rT(_d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_nry4k7fbwk_';

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
