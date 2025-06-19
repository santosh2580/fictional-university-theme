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
define( 'AUTH_KEY',          'T)A-&9,;zwM|K8N*qU6=iAWT6wO709RIR-,JT`KyXy_{6!{i-[b}[<@msr}Oq7$g' );
define( 'SECURE_AUTH_KEY',   'yU[]cdbb0/BX(}<*,Lr{y/V61qM7P;e<~yErz,9}zx]GSqw8/?rE^fTK= J40Nz{' );
define( 'LOGGED_IN_KEY',     ' +bu}2P j:^]${a[OGK2]K8syN;jG>>(vBzP5m.eDh)xO,7ms4UU.g1cD7hRVdLa' );
define( 'NONCE_KEY',         'IL9/ FsE39[5yDGJL96R#u}RvH,.NnH,ZV&KbNq@jfFILaE.l>F+q Yq-;ACBU:/' );
define( 'AUTH_SALT',         'v8/uR_1}7Ygb0QT-v1!hcj&S{.gS{t,#-0RPDD%nm.62>ud,P$LbNpX`j3G#j%7L' );
define( 'SECURE_AUTH_SALT',  '7yn@y@Hnp_IFg;~eD/#(zk3/`~xQD]WTvT;av=YHM.E/q1i$tXvt#E-AE75!fH0T' );
define( 'LOGGED_IN_SALT',    'OPV`%Dgv&^zl~`/N1[?@wA{?&yQM-;)7K5q$9L?6Se;H+f[=u5E?tUN]jK/QUplE' );
define( 'NONCE_SALT',        '-5#Xrt-PI:m!6Al9de~f*DY&3;IQym%_6acmYglC]b?-l1q+YDrZ=Qf<~205[^:L' );
define( 'WP_CACHE_KEY_SALT', 'lxdUL+2A!b_A#U-waIBB/C<Ez;Wx$M:zFz>(QfbzVBqM~rfOkQq9FgITGRZB;)6%' );


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
