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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mahesh123');

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
define('AUTH_KEY',         '{*h[o1nVA+fjLvt;>V}JUo+9t.arcQzr{(Gzi->_67qKl{/l6UA&wG=Do:9|Tx0E');
define('SECURE_AUTH_KEY',  ':+>|ca0Xz.I^i)-AZDZT`S7#rm:}sP~~Sj_/gcqqxdI7H=`hWSn-cl:g8HnLL$-r');
define('LOGGED_IN_KEY',    'M9URNsZ2W)EWPB)CV&;DSAMmaC~9{tu23]p1QmD|q28NtT$8UCzO+8T8^lq|:{L[');
define('NONCE_KEY',        'Iv1Jo5k=}QOTr^J$-O|YQoVgAW|J.ErI[ z1u!=zV2+*$i9sn+$+lX[$IhQ|iPFj');
define('AUTH_SALT',        '%/;^8W8^pbs]=-kT|o9BSy8>4%yAWkST2n,C}(`FP$:SQuC4a[0ppR|Hmu`rPR]r');
define('SECURE_AUTH_SALT', 'k)(1>`]!Evc~ss<03yR>1 ,hq-]mCV{3--[KK>iz+{w(J%[1HhTzdGk-(XAAQLt2');
define('LOGGED_IN_SALT',   'K|@0#V=]xhU%]qdH=A]GvTQ(4T?rFG4pTn7:8?4x_|1.)Nz.OQbC[s``H|6%2}+2');
define('NONCE_SALT',       'Qv7A63r_}XH9]]N/0zG(|$zGU3YPEnhp_t lr`~/dW({Fn@YX&`feCF_IUS+?ux/');

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
