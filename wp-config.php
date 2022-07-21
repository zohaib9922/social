<?php
define( 'WP_CACHE', true );


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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'social' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'gmQ:<9kX@t]I(osbJ_*#4Rrf;YCP;iB][Y8&w.]D/`rCheKJy)L)Q$QJr|~:#LhY' );
define( 'SECURE_AUTH_KEY',   '>rVM|I_hG~H`x;^W8$IyOwz  KNKs2]gR=yy[vNYvG>o{V59O0xI){yL]/LDpo=W' );
define( 'LOGGED_IN_KEY',     '{l#Sb{}E_p3QfIU 5<>Ifq`uIZ)M{yR,@Ze_t0qrA9Eznlj5]If[_0V%uniWf!k)' );
define( 'NONCE_KEY',         ']+ /gxJRm>/T Nv<%K<ynpI`Iz<Uk,yLjauWJ,_iQe/~u4,oq9YC<Hvq{w|aI1hZ' );
define( 'AUTH_SALT',         'E8IDoe9s?+/B.d%h!gSW:lhzmcWjeJ1v./dc+F{E7RIy%<nq;kF~=5$E(LlLU4~_' );
define( 'SECURE_AUTH_SALT',  'a:CPdfany|Q,>uUlZ5$M@[,?h!OKh&[:5r$b5:UPFkG ^ gI#4X^_(>chUbK-^25' );
define( 'LOGGED_IN_SALT',    'Vt]v%TOf+]kH_@)U$7Cl =<Q-AcO&|G5c2A8U*<k<l7d*Zq:=!6>s|/G!.QJ2FL ' );
define( 'NONCE_SALT',        'L>.Bllz9@DC[^&0@K5ZEDVV(:qQ<<L1}nT*k=`R.*ME`G,xXl(*fAT}hEoF!>Q<s' );
define( 'WP_CACHE_KEY_SALT', ')KdjZyYp|WB.+CZ*/z4NXS)x.DRDA,y#&K2hd<YzpEi@}jHQ4v)3ac9nj.(>[C.U' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';