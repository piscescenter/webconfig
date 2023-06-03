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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webconfig' );

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
define( 'AUTH_KEY',         '$jcCmFo(bme;LR5z7mrw_*4tFzDoF)>d5KcIf$XB8M^&lSfj{+aKuO[bL&DN;98T' );
define( 'SECURE_AUTH_KEY',  '3A2srikHJBLu/ofIGT+b,?UjoIHdo51`tK`iR-n<|`Yn*!+X{[BjGr.~.,LqoKZc' );
define( 'LOGGED_IN_KEY',    '`%qHxuxwD4`gKN]+L[$NRaRxOs-ns?QVL`s_B]u+gR#AV8C{:^`L,4ViuR5bTLo7' );
define( 'NONCE_KEY',        'E<>9w/G~.|23]{B9@=dZ6?.-*.t&y~kIV!]%60eUq^82+EsfOeW{HkRz] ~l3[N-' );
define( 'AUTH_SALT',        '[~rgC`,@XV<DeNJ~j8J$OP4ab^a1w0=o*]=*oVJI@w0XO%pE2+/&09UQPPR~jy-k' );
define( 'SECURE_AUTH_SALT', '=>c8tJ5&J5fyg@dj>yqf/sy.Uh03 =(|Pe*Sa8yz:f a<KX8GS}#+Ql53GO-f{#:' );
define( 'LOGGED_IN_SALT',   'DAwe7;i`%jj`~bJ~!gHLdlNmRAj>Myy gHwAMICfUa;SjLC3hecf1WsWw9v?[iV7' );
define( 'NONCE_SALT',       'RPB@7Csb Y0[HNPmtti-E3fpB)5|yo0PNabFU4xoUDT&Bcj[)`EuRo$hZJ0lf6rl' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
