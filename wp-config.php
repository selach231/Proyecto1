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
define( 'DB_NAME', 'fundacion_angel_peludos' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
	define('AUTH_KEY',         ']nKPU-v/n0{FIIFG16E)xwBDG3|C6R[6> l!.*;OZ-ABV_l?/|hp_keC|3Dl$ljd');
	define('SECURE_AUTH_KEY',  'Z8cKDe;] 4.otRzIkgawCvKP1=JKq9A*_F&{vxp5-O8W:ZUKP5 DYE.v`Z]d$|7?');
	define('LOGGED_IN_KEY',    'Bk/ 3/^!!iK48[AP,dAdva([XnaN$|-`0g%W^N`nl) hL(Q?avyRq]5d?vlX9=|J');
	define('NONCE_KEY',        'Tl:fWxkpnM;--AeS30(-U9s#n++a/nVO9inqb$[/Wb?Vmukit@#U~eP{EVmNa<dr');
	define('AUTH_SALT',        '|t:%@@&V/^J0pI!o<>j[ v5HG2x7%V@T;a,pnW JpU1CezA>D5zw~f?g8;NSwXhD');
	define('SECURE_AUTH_SALT', '8iEx/wc},^; (B+JDRTj-&hc*~&/1Illnm-X=<PITubxebf}<VNE)R3@[[]{5kW5');
	define('LOGGED_IN_SALT',   'T0Mnn<v%>wAlZQqWtB#f;z|ROCJ=~K(BC Y5 ]:<r~nNX5n 1JogJ ss9-zkVq:%');
	define('NONCE_SALT',       'A@.WLx=J<t3HA!li1/3:,z6P~>hQ3@q)4ZE0DO|+-~  b^6q^q(o)<6rpkXcX4D9');

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
