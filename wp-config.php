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
define( 'DB_NAME', 'digital' );

/** Database username */
define( 'DB_USER', 'admin1' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '_}C99UEIJMqdXV[s.{U^NZ%Av9yYJG3&|OF-q[RxAn,kjt=,M:0~8Ma|(HQ5AO)8' );
define( 'SECURE_AUTH_KEY',  'Ie,XrG-w}]xxUmM(p`c)S9l]lw2GRCkS^QP07;!kl#_#B7UB1vEmI])P]Ki#r$bs' );
define( 'LOGGED_IN_KEY',    'q`]O}9};5c&2bwP}9%5%iv%L|)?$Fk>t?(4iku%G@{C?.,UjP8N[oOeU=jjQ`Tr)' );
define( 'NONCE_KEY',        '}w[PYfH[i9oIAwC&|nxj;x!?`MED0=~zpw:%2YML}o!`8cl`PoICTbB6h0({/=K1' );
define( 'AUTH_SALT',        '#[A2Ob0Ov7-fh+}/|*E80G0rM[[=5>lQMEC%,480KG@MCdHn(wS;u WR]U}F a7J' );
define( 'SECURE_AUTH_SALT', ',MG?ON.Uq%012Ot|A0jyU`E1iNtm]Kxr+_MGVALC08y},.+`9(g>{^J9+5U(K[gg' );
define( 'LOGGED_IN_SALT',   'w;hga0O<w7;^PpZcnRQfIV?]mW*Vkn;-RTV&SC6-ELGk@?E}O 4jcFq2)aoQD%D<' );
define( 'NONCE_SALT',       '3kkxXiS/?MW0@QR$Z2cK/p%6=M}Xvf|-:U1z}HNfu7Jh^S$wx0^B@f~qxn2fu3=;' );

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
