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
define('DB_NAME', 'kalories');

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
define('FS_METHOD', 'direct');



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Qi3_i@IauqnP, NU>Y9#%St/5bz6t{-U=h_cqw9TT>MPYus/9ENZl}6hM#__yMWn');
define('SECURE_AUTH_KEY',  'k;T7X=4Oic}[dK^Hj=doV~~Q= IqaMHGAFE F>{F9<jt@EJ:(EOv466bcuA%Sw?U');
define('LOGGED_IN_KEY',    'O`EU7R/L|>jcB2sEA@rKN>7xjogd>$E34qV}-fLOrHJHw?IKJ+-DQbV+bkH/1x#L');
define('NONCE_KEY',        '{[`J:Zyf/c,/mY99WGLVc+XwjK/0u^4vyASQW7x;~F}s:di._OY6:=qXYW?Cn6?0');
define('AUTH_SALT',        '%<dqey+eD[Q?P{qO@TU>~4A?_B~B B]F*L/#<=c(8_QjfHwi3ovxgP!?aDz%4eCo');
define('SECURE_AUTH_SALT', 'eX=WB)n*n[4SAb7W-&[Hb?^#NoS{+#a~R;,!&;q6{#~/BtM|QZ^$6.RVYC=f$#AJ');
define('LOGGED_IN_SALT',   ',IpFLI3g_j!Q[f:`,h$ik;]U%?? tD4u8U4VfX]W^9Pf(lyY#H>>>EN0lpSS$s2X');
define('NONCE_SALT',       'Mbm!KBt,sqK]Z~ugS(Ri/[;$zZ~5n^3;2flhv}B;BBxJx$6}BMmA Yl4&.E|zB0i');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
