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
define('DB_NAME', 'alcove-wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
// Can't hack here.

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
define('AUTH_KEY',         '>XP8/9v^F)Xt03<N;?!Ue|7-BIhUCDn2{*E:f90^{H$CK~++-+7Ph#)gUL F%ct&');
define('SECURE_AUTH_KEY',  '6QvR#d+Gftffn {CqKD5J>$pI^7h++hZEy&Hv{k9[+k=[Rh_nAKpH{Pni4V(0@|,');
define('LOGGED_IN_KEY',    '~gnR<%oY%iY=r6.@fmn3N%@/vITu ?xK&X7=*%ZUL;j3,@l+%}IAeHFJkl-Q| L9');
define('NONCE_KEY',        '6t8ML@l?@!>;Z1_>5>jegMsp&bx~Li+.x Ors_i@^TYH!*3^v IIUC<ammI-(p]4');
define('AUTH_SALT',        'PTG ebcT#c-FY7o<`;m)+ar[y3`Xf^c7s>Cs;hq>.qD}|M@`;jZ#uqZN9Lqn; +s');
define('SECURE_AUTH_SALT', 'jExY$c8ki~[IC@aJ{WHR`Ib@NY/HO_5~rFr5G|#;/H{Ut+aR0MFcSnzg5@bw:|d+');
define('LOGGED_IN_SALT',   '3<r-Md[WnIN(}o GKv{([`:z5;..8lw>9G9w))aL{x@U }Qu%=(l2L?-d=SJ.,cx');
define('NONCE_SALT',       'qJ~Z[)|fGEG4}~sC/U`)C#~=(BJBH.ZL;cd+$OSRK*7 s 32NW?|eW|wk{t+r-VD');

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
