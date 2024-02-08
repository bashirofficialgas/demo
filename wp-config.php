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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         '0st(}Z8{_OJb%B0R5oS^ v5s 7K;,pGqRiZ.Ife_uDM,:?!u^mo*O1b@V7dH,d&0' );
define( 'SECURE_AUTH_KEY',  'd-t1E|1eUd8~BOral#m,,=WW`-huIVGff8: #,{J-^VEo&G`OHQ|!~/w*5dWKO>=' );
define( 'LOGGED_IN_KEY',    'I7SE{|6bnWa#)gV=4pZZO`=~TtJfH?&_w<PpQR_YcrwruerFGj=0oT.*;Y=_7lcq' );
define( 'NONCE_KEY',        '>x:%<s0`,MuMM}ZJNMQ:gG=81`/O>rGn~(2djVP|# 7vJ>;4pC)^ mJsT!CT14C*' );
define( 'AUTH_SALT',        'iCynD{)-l2@2O~cu{loSB$`+dNph7:}WO.7 e;d~>_DNsjG0_D;_be~>w[@VNzkv' );
define( 'SECURE_AUTH_SALT', 'kz}P7JVq)yf]U84q-8dR$:pm(X> }`!NFjn4T`nbaPHRiz-;nRDs[|@-b{{7P2%o' );
define( 'LOGGED_IN_SALT',   '=V0  X3Er %fVX&M@LbWz~i0IdABfk!?y:QB}%|IoTlt+9o_@bj1E!{;B TGL|@1' );
define( 'NONCE_SALT',       'Z;0A(l-fH@@lw>fxfnQ?rHqD-4S]:mKau%Cc1Mc{ TCGQ/vZTun/WN|4}MxjD-dH' );

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
