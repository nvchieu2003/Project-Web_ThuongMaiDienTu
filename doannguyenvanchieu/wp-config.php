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
define( 'DB_NAME', 'doannguyenvanchieu' );

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
define( 'AUTH_KEY',         'O}yMu8Ga$6T&-eq0kcds#Mg1uP<UrAQk0{XI^|lC~d6pl~OY$P*h,]_%v($%zQ0b' );
define( 'SECURE_AUTH_KEY',  '>mM@.vwI]GC3Bga]*/>-dRQM-2t!nF~k_fG8q%49tFuL[gl(`gSQ0Y)QB$da^[g(' );
define( 'LOGGED_IN_KEY',    'B,u*F5i[tL?[HMO%W~K%YUi,JsO(8B+f[&5ld:*(m>acPMe7~R_&Vp!ue3a`O?VP' );
define( 'NONCE_KEY',        '9Q}v?g4(:?~DW/e4D)%YxgHx?1b]1/tUO9}#<IcnM@^PNk_dfv)DC()]QMd8Zrk]' );
define( 'AUTH_SALT',        'm~u^y>N3_,w<D<sNSf*nP)[]hbNuG]o^P25Y+Q`y?:Gn7<D8%3e89I:nKV.9*i7S' );
define( 'SECURE_AUTH_SALT', 'b<r&>5<ObI6~c_?&-~+uGu>p>P)TL~e+.cIw]*cD W=Qu}L91:<y%l:blVcjN]++' );
define( 'LOGGED_IN_SALT',   'O[RWA8S{@jphy#O&hGd7hs6ds#bQhiH_;;~P?E<O6Fe {nFbB6qg7Y%dPE68KrF0' );
define( 'NONCE_SALT',       'o~lgJfU]Z9v6{dNe]z&my`-A3d3QA^PHth:`IriRrJ&F?qG.4)LjA}OOOADzUe@D' );

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
