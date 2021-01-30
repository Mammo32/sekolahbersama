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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'u0_a361' );

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
define( 'AUTH_KEY',         'i){QWs xPkLE{azVm(w)ZzkP,zSEV=MuBTmA|IlWMezarP;=SZa-xWt5$G@kX@S0' );
define( 'SECURE_AUTH_KEY',  'i?-K6:%ibGdM~L#U1mEnPV!eo13.9jglf{`mjBkMyTIJu@xn#1E#0K}_*XPE0w~f' );
define( 'LOGGED_IN_KEY',    'o2wcl]KW!7%v^GIJ:zj/nn}OYKhqTUGs=M[xT6p+v%*RyJ.?2e8j7Bmu*:Pw<9jd' );
define( 'NONCE_KEY',        '3dB}&RMk(Ro4|{ocV*PAWU|@+r#d %F@8]o~p)k]gc4s9D?`B_5rDSb2?k7E|$Og' );
define( 'AUTH_SALT',        '&GAFVGZ@r|sdu2!2iSR`?>yGJ1D8q{*MUwSRUQfmZoB!53Wd6&|(9Vt+g4oWQ/4 ' );
define( 'SECURE_AUTH_SALT', '%V^g)Mt6s#I|KyDR~{fZ*q)}[MGirMm$72?!c|9MnQ$6Vby~Eq7Y73Y8=EN0{d52' );
define( 'LOGGED_IN_SALT',   '8`&K^o;lAB=MA3|LC*n.h&D}0Hso(O9W0ag ~,.jYM.I v{7d2&gx@.bXkUc>H24' );
define( 'NONCE_SALT',       '$[WWdg;*G3v%IHV81rf!iIVZmMizppz6lg*dT{K-Tlm<e~3LE~-mOhZGcnixjQqi' );

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
