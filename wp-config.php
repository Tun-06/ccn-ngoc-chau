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
define( 'DB_NAME', 'ccn-ngoc-chau' );

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
define( 'AUTH_KEY',         'C%;J3$v)tNyzKtmsUgfWS@rhI[ fcS$J[qHGT#B=}pjZTFo?-v#3[5nM*MA:8X0g' );
define( 'SECURE_AUTH_KEY',  'M$W6X~T+.yhQ%e(,UlFEU;;;/rK-=^Jp?CmD3^tvgiT[J8Yllk.cc*#R3CjL<)mo' );
define( 'LOGGED_IN_KEY',    'f=DyoLe$W,nc8}yMObs|GbrkskmH?`V FaZ31f:&&Yn< hqp6f|LV!>FiV+]6:TO' );
define( 'NONCE_KEY',        'E Qh;pNlz9SDI)1NVM3zINz4Dh^LjXMGJ.@qV$FL LF+|c2f2hsJl!G-XlC-X&JH' );
define( 'AUTH_SALT',        '7c-_h3j<mvfeioHGvGl:-;8A,F~FfItplK8N0^S>#Bj_*SQ!,5*XTxfk2!mW$Y1-' );
define( 'SECURE_AUTH_SALT', '&w0Z.Uk)s*.T# o<z`aY3(|9|)NA[`?[MY  .@%tSw:h%^5D.Rx6:6M|q OqAGtt' );
define( 'LOGGED_IN_SALT',   'cuFVvwY.yga,p?FY`a+(3cm*2}#tx1^_o/R2aJ8sJds[}Ev3cH^[[>jI27!BzT>M' );
define( 'NONCE_SALT',       'CCMsxAU,Zot}29!`N?J=8![BK]HAU*zp5{=M KwUvO`9j,J[-Aei?ejf+Be=1d=^' );

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
