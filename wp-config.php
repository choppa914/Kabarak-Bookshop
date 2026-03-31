<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bookshop_db' );

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
define( 'AUTH_KEY',         '_^a_Jj~^//etT`YK #R?lAzS6qva~zj1s|y-RVIk(]Hl3hZqIH<+H^O;zQcg(]BT' );
define( 'SECURE_AUTH_KEY',  '-*)W?+x!ydddY4[87$nw*Pm8:n9JkVXzf{A_D5Xu|NRQTu7=kdTl[uyP7/E{P=Et' );
define( 'LOGGED_IN_KEY',    'MZU9a:c [`+:bllR#D[%1VQR fFhGX8xx1%he+{cr2|[e!doMEL}k07WclrN@QQ]' );
define( 'NONCE_KEY',        'Ul6T&r6U^z4f_Bo/I{I/lEuS5{0hJDS}lE53:*`nalLlOXlXoM&qDSsol^C7bT>z' );
define( 'AUTH_SALT',        'wIa<q[@oY|YZ$/tOf wU:8ppP5$>U`#bGQ+Ku*}@NHgfiaK6E=V*Mzg 9|e=0Hz=' );
define( 'SECURE_AUTH_SALT', 'xJJ932d,iM0GgHkzsf|J!J98B@4`{J`i=LYz!z;#`s4ceJ=5#d+nmM~mR;2tu~@Y' );
define( 'LOGGED_IN_SALT',   'w&#+={ @iSG0B/n5pICO3((OLyDEkPl;5P?~FfY]N1xHrt-?6s^6xz34G$DncWZA' );
define( 'NONCE_SALT',       '/6=&o%rH_{pN.Q]c]O8hBY;1ou{Avf} >dKJ1>O!qRCp]Q9VdJ%u=3n:dp4`Rb A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
