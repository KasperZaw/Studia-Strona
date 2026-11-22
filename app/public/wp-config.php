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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'QfYlX44cdEZBV6a~]>;<F0*Y?d)J)<NH6c``%C$t$4)eU12MCC$a5/6SXc1Mz*.A' );
define( 'SECURE_AUTH_KEY',   '`g?MDftDh_pC:}/YX!/7R%9rGhv]hq8t^3;u[ecW?z#^d*+BzZhQh`KoNRb@po~+' );
define( 'LOGGED_IN_KEY',     '7ztABzl!7]1<B4KDD90]jl!mQA:ZuQ%a;z=IE?lOLmU&|RT#|unr}>(dR/Q7zN3d' );
define( 'NONCE_KEY',         ';;*WenO0}fNi|BH(2+[,U,CNFmx8&MCQ:UyFHr%f,:3$>lPOitp$&9F2SRp2A!gq' );
define( 'AUTH_SALT',         '=&/Di|@#5GG[DsAgmK--B)r[Kg>e:hQPCQw:Z&, ^<6Fl2{C?-|$-O]v$!*,.Zrn' );
define( 'SECURE_AUTH_SALT',  'I:9[ w8jI#jFc;ejSh-n2-I[nQ|y|O1]=*QNW]D1H@ (IH``C[5n4vvn3B3^X=xj' );
define( 'LOGGED_IN_SALT',    'V!3si#!$4Kybd@F3l[e*zY1POx@o?O!>LB!aj| HS^k}lVMYx_{/7:5LBp:3g|R<' );
define( 'NONCE_SALT',        '9HhcY%+Qn84h&BWMQ~nU=Kww)abjsq%P%2uH?L(8R}5P(~^65,@3yd_ly(cl2a(9' );
define( 'WP_CACHE_KEY_SALT', '`!9{]0_ 8T@FB#@z`hB#trqhehLcruTDph?et!uG7Vt.BxK:~xIz]/X4wy%Hxq0M' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
