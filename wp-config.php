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
define('DB_NAME', 'omaha_film_festival');

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
define('AUTH_KEY',         '/NS,/2F_o T,3wK%qDp#K5%-5&c]b~65D+HkUUK/2,_@Dk@4Aw[1yV7JCoAkAeZ_');
define('SECURE_AUTH_KEY',  'Ma#[I[l--L~6g+dh@&~cxK|+jSf}_AOh6+K:wc G!mWH_[apd@v}!|9an0xC|#Ms');
define('LOGGED_IN_KEY',    '-sV_ZwsBSgv)1~[!y_`|{xc2C!^btY,}akZ;Wjo8rf0$ax*BJ}[KKBS]KSPv9+,Z');
define('NONCE_KEY',        '##;)-d?=ed0I)g+fuZ`0)Ev.c#VZWfr;sunVbGKrJ*Ne_;(U-pX%+~y*5`5G2Y9>');
define('AUTH_SALT',        '-kj1*pK$`OSZFXGVWNG{9 1`+tk?Re8~$Q)Rq9R|1?^`]BYDv+xvWTHU*&-Sq1r2');
define('SECURE_AUTH_SALT', 'xmJ&JG!9IHvV,XH=nL7gF!E_kWYF<qj*D1(3}P9ui3KbN>+O-T$qL$%/rg9|[UEg');
define('LOGGED_IN_SALT',   'fmBe%&[e`&*__jLF`>gZi3z==9vXDuHREA)NVn<k^-0nl*uVi-9q|pZml])Q;R|Y');
define('NONCE_SALT',       '0Pz?|VOzZWpFcj_$3YIc(U%LgN4_uz^s3_Dlh}3x/~;PK7;I]oM&SQu:lco1eiJM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
