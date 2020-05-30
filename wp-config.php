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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'WW9gLo0ixEY9gHOe#[-6.(&|{S>$0zfbyr!TwCVM*$nMYBlXjn.Zlc2fn8VpyTFO' );
define( 'SECURE_AUTH_KEY',  '0&*Rzd0z``rt3QcIqe(|GUO.&k_ow[e0kia+b~4gMnWOSNaI4u6z/T-T#|^k+hfy' );
define( 'LOGGED_IN_KEY',    '[^7J3%Te{!?wC4e!td[;&C14:}*!O0,5=eyJbVTcnP2xW(6G}L{gLp~7[+R$]/c%' );
define( 'NONCE_KEY',        'B0h:Spndfb2h^hsAkYwfgXrh:C1=T |C%]@8*oeO_.VS+62amO>?l 2heWRwh,cE' );
define( 'AUTH_SALT',        'd}0E3u?P=90)v2o$mea[i@=CxgxcH!gt;U]~fch3ST]m4+ShuSqs,l_U/&zyyQ>b' );
define( 'SECURE_AUTH_SALT', '-K+h>ly$0<D|1dBsEUA:}hbW^jBKKE6knVNOy&&Q0)Rotl,f9n}j#2w+Q4L2udT~' );
define( 'LOGGED_IN_SALT',   'mxW5?NN{3p<C5v{&bi{-~5_XM1x1+b|N:@,g9$X6g3ZFAp_EvBb)7}~c[B.V9EPD' );
define( 'NONCE_SALT',       '1L<a#g};2GYNNS<m00[fLUKjc_5s77Y^{uvZ.N1Xuo4#=Xh9=mz)6|h&V){y2] r' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
