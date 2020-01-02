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
define( 'DB_NAME', 'bgmea' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ' OV~)T~RIb;}Ukjt&Cka/I`K2p[RQQF>[C}6kx[BTyH<Q*]$6k,M&*e(wSPfDu-n' );
define( 'SECURE_AUTH_KEY',  'X JnLB,NZ5!znLap^k;AK)t! ;UjbF#CC/MR>rTi|Vu>wH:B(84Hw.h2WUrbsB+b' );
define( 'LOGGED_IN_KEY',    ')irHyjU|gJUUs.-XJxtQi_U#Q#**];DldTHMT^>yo(#Le >/8$UfYNz#(#$4uiJ?' );
define( 'NONCE_KEY',        'iKxI^,c{3)[FrKeN)^C5stHlV~8AZ,4F]1$z`GZ`9~P!J 2W+Twiyb v,MUHO4rR' );
define( 'AUTH_SALT',        'FP$IC|Czmfd}PxUJ3xcDX&qhIj::XioTbm]<6/}q-[oynw4)vdG/(G/[A=WcuTFR' );
define( 'SECURE_AUTH_SALT', 'bZY>J}N-<gw=j`?;g27GI-1@KyP?-nBd|UgSE_c>4wT6<:O D7hpSZC|gB70[=`/' );
define( 'LOGGED_IN_SALT',   '3Nrrg]8H4A1Fw9@pFrN-l`h{l0ncXZ*,,7]p3#4`zqcLPpRH*d/7F3%&)?3-P*13' );
define( 'NONCE_SALT',       'tc6^@bs~/3}egffinjcRgC#g W^0e:gpww~msEn+^Rsi!hcO+SiFJIlq4bZFf$UR' );

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
