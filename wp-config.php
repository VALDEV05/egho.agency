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
define( 'DB_NAME', 'egho.agency' );

/** Database username */
define( 'DB_USER', 'mamp' );

/** Database password */
define( 'DB_PASSWORD', '2diligence$' );

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
define( 'AUTH_KEY',         '{`Lb0b0#tQ$`=TE/|41.E)~[B(K:yp5WdhL(t,:0b)VQayQ!8R]QKdBZiwa+@Nfv' );
define( 'SECURE_AUTH_KEY',  'ji9jbCl`XYn1nH.NfbW~ LUw)[,>B|Az7oEsG[$#@U1&y^=%icMKu2!yV1xBRG/H' );
define( 'LOGGED_IN_KEY',    '!&;Gb?` 46a{@)xWfQ0C+b=(cpW)g,sYN<@eaLC[?j#P *SR9KB1Yx*>sXNT5YlY' );
define( 'NONCE_KEY',        '}Nv0,q~KW/{_o155TVth&1.NL4XZ+.k{b$X0WFC|YJZ^~>.+yF,Z`]:lvgodB%j3' );
define( 'AUTH_SALT',        '>k)90WDj0$9TCA35ZE&gLLJ01Q5i06U;*b%`xjfOa/)a8[FdCHFSJOgnfJ0Og|r=' );
define( 'SECURE_AUTH_SALT', '(V<Jdn$e7vKz}y<Zp~nW.sF~ qD>=C v]e.@]Vzm3O0NNqrfYFr@x%Vk3*5~VKv]' );
define( 'LOGGED_IN_SALT',   'oVk%]a!sT,#d&W;+i!Lsn`uhZGs%v ?nwXud$ho{HRt=z`8rDhgIWqq^KT3O]l28' );
define( 'NONCE_SALT',       'n!gN>N2KsE!95n^PQd&9P<?Y#{?6%*c?Zj>qJm:M8~(9ztJs51z2YNnd UMi3:*Y' );

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
