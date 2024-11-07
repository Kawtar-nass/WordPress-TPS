<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'Testpassword@123' );

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
define( 'AUTH_KEY',         'm/zZWYL7qkep{C!83V0LRpCV%*FTyTdFC0@|`iq4Mv [98Ws[)<OAIJ>CB^<VYaE' );
define( 'SECURE_AUTH_KEY',  ';sogvV=QVZZME(i~G?/RSRQ![a&VWN:*/vz ;.Nb&W*L4Rv o:$w:4=}/>yFNXco' );
define( 'LOGGED_IN_KEY',    'eoIVuyKIYMSWcDX,+ALs&b7.BrbW:{CD+T>r=S04t]/ vF%#4GEC>4Fo]v}lw_6q' );
define( 'NONCE_KEY',        ']heNkU.^~rDhaoej+3n*@[}/-<#}odfkUT<XBed/dk^nj1QdmO>2!I8:ZZ-s`V--' );
define( 'AUTH_SALT',        'b:@~^2-(mSjE:?o=q>e;A:~&ps>:f{x%jzN`UXKRW%HY$4SS=Um?St:%/D#X-gLZ' );
define( 'SECURE_AUTH_SALT', 'tRSK^.3+OAu$ayv?3L8>F,0!QrN8f9-ix_u;V:V6`M_ULU@dmnJq=A,_D5`+Klg$' );
define( 'LOGGED_IN_SALT',   'dMC9S5JuM)8Aoc8bHpXfPb}N:q2vm&LqhCX4`8n5~NL9M2#&W40T9vx_e42+AFA`' );
define( 'NONCE_SALT',       '=2wdECxmopB%#EeN#nJo.y5_1in0 iEon31[5oBa?YMYge30(N1UmE=X;@%8Kzi%' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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




