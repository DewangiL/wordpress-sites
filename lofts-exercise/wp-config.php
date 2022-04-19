<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lofts' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n~se09;!Jo):Y!$}Kn4,L$P{xTp[5b]J:-g%_8,-DCl:u3`mz=#u6v*G^VA*yr72' );
define( 'SECURE_AUTH_KEY',  'A%[cXd! ;x~?;Pk`RSNQ37%,&fF>mm31:e]U@I:NmquZ:r:`{<wOQ>e[$u{L}{y}' );
define( 'LOGGED_IN_KEY',    'D#xB!^$Tqcj@D1!`JGj8didTAVL<.[9Dit8]|!)bATCy;,K$N k&Eq}u~:8_]14E' );
define( 'NONCE_KEY',        '0h_ mH`-Overe:em{CF-QycR4RTDd2st`wCLPhEZE%8-q< PpLVTxkM*C5y{nv68' );
define( 'AUTH_SALT',        ';GY4^HU60m,9Kw$r H[CEfJN!R*x<fUTEQAP@I|WCmT7,b*QDbHN$k_Zg-`hDx`T' );
define( 'SECURE_AUTH_SALT', 'no8xq*9MkX][t+>e(kMVm=U]d?G/?8x(LkUI>&N2kw:Cav|C)(Cr+,?*ci%o?g8b' );
define( 'LOGGED_IN_SALT',   'D9}71ka=)23Ey!{@{Q_|K0*f? =%=c;ed#}*]jNt}J7&6/7>.w&~0>z]d7wlo]Kj' );
define( 'NONCE_SALT',       '7ft]|MU.aDIG;?+~&Zz5~S`7C]{w:[ADk^SX|#3/sA(yHi{SGKj_=og6)*W[IS>A' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
