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
define( 'DB_NAME', 'partyproject' );

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
define( 'AUTH_KEY',         'vFH||MZA5A[;>95|eqJ 92|4rPzk%#ht6P>ny7H^3=HOZMzp)eJ4rB6i^PJF`0h9' );
define( 'SECURE_AUTH_KEY',  'V`c/ForX0i}dzco=^eC%oFLBg`Q.fhuDa_e#Vp%-D<D}#42u&}X~0<L;d1bv+wo_' );
define( 'LOGGED_IN_KEY',    'QY$%4s2ep zkf[]4]z<0n_Y,w3$8,@y>`=/C4lBYUH49%%hiz~^=}FSObkD;Jb_|' );
define( 'NONCE_KEY',        'NV*>=cdPsvWX<V]38zU#4F9;0B*.b r3V{o`7pS_Z>Sp.JJSHY%ERV|<<<]F-{$,' );
define( 'AUTH_SALT',        '?`^p8A*J>YK{[|TILB8,-m1{n5A}CQ%vt>Db2jnWmcPFv`<QiKSq+Jb.T0.5ROU/' );
define( 'SECURE_AUTH_SALT', 'F&YHKS7_e(NQTiJW5`0B5D%/glBQ):IXs4Cb%R#6-ix=Sh1=e|9oOAMRE9:)z+Rv' );
define( 'LOGGED_IN_SALT',   'f._T[{8!A7?tA.s_b+z_~VzF@9%al8Ex!nY?Q#Rd+2wQ1]`EJ_z83%mCN%ay(}.)' );
define( 'NONCE_SALT',       ',CB#?=0Sf1^fB<Ln>r8[POOx;SXZ(4a<jSd%C (w/b7`hktxGR;+xq%Jr3{4o=!q' );

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
