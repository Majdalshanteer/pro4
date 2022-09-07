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
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '2391996' );

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
define( 'AUTH_KEY',         '&(Qw=.XHAe_C0KZEZ1;]NmDE4qlIj6^~:Tk6)|$.~7@$3w^t3}t5ER[@;(8E(^9I' );
define( 'SECURE_AUTH_KEY',  '$GMxPa_I;]~Z<#/5s~AD2v=enh74oW.Y=#(jr>um{)ny*l0T&3,_a:S?zz^Cdzy-' );
define( 'LOGGED_IN_KEY',    'wz}|t6PPQmduih.N_hV~|82&>E&6?{67M4i%ae#:BiGroUomz2GR/X,9jtQ.Vt%<' );
define( 'NONCE_KEY',        'cy6QTXz4d~eY*y5c&J!o-(frEbCF$)z8o|%7[&o_5} ENQv#7uWoIl10bx9Jj>m$' );
define( 'AUTH_SALT',        '=}AL&o{%47#U3@`U]1v`W8`%>t$yj 7hlJO&M,gr1}pfkQz-HGO{xx|RTgt{wuF6' );
define( 'SECURE_AUTH_SALT', ';_Hg_gA5z`u8e7~*Q_gy)F|76A`,x(5:lzcV!3iQr6ojXNS}| ;0{>*}-spDq037' );
define( 'LOGGED_IN_SALT',   '= mj4e#5.U}iFVK|YOtTDFo<~RsS3Y0 b8otw^LX9csD9Cp(U-a9}t?-%7Bey/,6' );
define( 'NONCE_SALT',       '+,oF;[?P=MI97~.8DNJncrGovwqK>AG*hC^i(2kzUE-#k,?(a7%#Fo%$$ebA%-pB' );

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
