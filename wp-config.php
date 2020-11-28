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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'usitecperu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>iZs$s>RP^]%d9:_kymb8Uq,Uj*{7wQ e|>n0u_lANE5VS!<>n_M$>qS4a3Qhd2e' );
define( 'SECURE_AUTH_KEY',  'W7JOu~T.pP g_]#gp:oH28_<t@>&ZL=)._HJ3HvoKQrq!OqG5U+/F!_3.,Ef]h~:' );
define( 'LOGGED_IN_KEY',    's^s^kRttuR_9RmK8/M:$]EEFmtOXT[?kv5&T2KV>E$j+T&z9m_*X_K^^a]?D>KJG' );
define( 'NONCE_KEY',        'h[qgyr>Y~[qXf#{|TGe<#6:}EbM5_R~w`l&))lMWAEl8G&7aAS@&E%atyZR>Upgd' );
define( 'AUTH_SALT',        'oy)^dv-jG:5r9|,47dj;9lW!=x+m5{6  Ru_HUtvKK$|CHI`+y.&XZVX)okaG?k9' );
define( 'SECURE_AUTH_SALT', ' qd{Jt]~yD~mA *.8_6^#e9?_jMAv;r!Zx#ttZ,ZRwWJr `p6+]G9uVnwJC~n).!' );
define( 'LOGGED_IN_SALT',   'XBlzJ(}QyEdp@%iARH+%?U;ST&}ZUb7`?!U3^.=1-hFUlX^40sb?B([VsP>XU!&8' );
define( 'NONCE_SALT',       'iM}mfy,U!)iMNpY=mLvwC!sG@R@I {pF)kVddy(J^&p{#[[4$h-zrD!6]Ek`O>Xi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
