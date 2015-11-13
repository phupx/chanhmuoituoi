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
define('DB_NAME', 'chanhmuoituoiDb');

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
define('AUTH_KEY',         '`cr|&Sn<JlPZ@o7q[;^=O #z,8=;NARl.[@+zkXzZI+AT?M)|*IRe{A|nJxJwT?0');
define('SECURE_AUTH_KEY',  'Qxy8oHv(p,Pqk&RRb(T5vsKS?1+Ud;f9:SKJxBZ.M)7B nA9X+[:KUi^MzH>U+A8');
define('LOGGED_IN_KEY',    'OC(T$<[Ucp YK4)@T-Nb^|||*;wT[-$IQbPpW-DPkc-/N#*$>CM0oxT_D!&}UEr=');
define('NONCE_KEY',        '|/Z8Xw=h6xh<A|6]@g|d!Ul^O$jdr_1$FeVrH#al_<[*_bM81?q=A@2Q]n;}Fip1');
define('AUTH_SALT',        'BK!7-G~FR^W*9}3+l46r>etAVCkMWNxAuW{(iy+4slKyd7|)B@]@yq[Mqe(hW331');
define('SECURE_AUTH_SALT', '6@16)B@BE)DMf+  eJM}`1xUb;`ar|}Vb%+#O+v+|Ny[-B%G?-ryb*DRZ~X=|}aq');
define('LOGGED_IN_SALT',   'g>QP#GE#%=_Wkcem#OAU.fQ/9Kc]B{VX?-E-?=ovLw[@ M*~ M&qS10Un:rWe/|,');
define('NONCE_SALT',       'F2$m&}v9d9DPIp.!#5q2OZdb-44L^da+@So,848K^4.U#?v0z,O1#zr!g}k5-,sp');

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
