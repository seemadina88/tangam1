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
define( 'DB_NAME', 'tangam1' );

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
define( 'AUTH_KEY',         'oeCL7_w$sj_1,D?r%-G-Bt|=}CP7M&G#E=5i_C0)fe-3X>Ct*~AtBaq0JQX/MmY-' );
define( 'SECURE_AUTH_KEY',  'ML9qleLiewz>p2Opa>5$|PW>9CHZ/&|X<Rd_[Q+=Bk0 t0#TK]vFNUo1=Qt~os4q' );
define( 'LOGGED_IN_KEY',    'rmHS|ZwT`voi?MsGS?kGLd{[zmJN9s Kqk3d9@:;yx.{2F, OTR_]/[DaREuTov&' );
define( 'NONCE_KEY',        'Y(iPT?}JgQvBS+l3*DF=1w;i{#0$~q10,%lF:~!h=]F>QkzduEx51i:Ml]hq#}nN' );
define( 'AUTH_SALT',        'Y[]`j|_L:thOk,^?Fw2T19|`!EpxF;!5gOsB AjbnR}R.XAle cq#=e@i3uW_Q#h' );
define( 'SECURE_AUTH_SALT', 'RrZ=oH&3uQ`Kn<@+s|!5KF<M?4>(I{fAS{ZW0f@Q)tled]%HI^-}FUU%jN>A(1bT' );
define( 'LOGGED_IN_SALT',   '(]ffZTTz%9v*[L:S;tQO$R80-2Bh#vs{UetxTwW!A:|?U*{#L;<|uF)%sqx8I;s~' );
define( 'NONCE_SALT',       'aiCtq`IzAhqjBO|GG|:Dqt]LJuVK]M~%UzUgjK}u?3&q$K=$fuiA=#L4N7e<z+]@' );

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
