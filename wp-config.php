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
define( 'AUTH_KEY',          'NCPr@y#VfYwc0UNpTt.vXCn[F=j53I.QFc`{fF.,~ VUZ=zN7T$m4)YpR^g1W+( ' );
define( 'SECURE_AUTH_KEY',   'dPnLeGuz5bn*CjnzGBH:?9H&GX04T:ECW!HShtPk;;J3ioh%;5|jZCe7(sYpt7X;' );
define( 'LOGGED_IN_KEY',     'dC,NzK9-{M:^k0;PR_|ze`Mk~L%6@,xS<dU%1)>|Ne(TynBgDS@tZ]:FN7=%kLD;' );
define( 'NONCE_KEY',         'a=P[3J:jH!1g.EW3vM!!@HSwZDv)ed^f&A8MR++ht(C?QXq3;1o&Eejwa<-Yd&aq' );
define( 'AUTH_SALT',         'Rpo4ecdm)txIGS34?,Ja`ySvz@}Bw=yh5o6x7u]Axq{lWKZQ`1hmTkeI5IPysz[h' );
define( 'SECURE_AUTH_SALT',  '+IF`OaQQI36tAHTJ CX&1./onwSTJ?.8Ot+BA2/_?m_hiBp58K/%bOcg3uJ9#lO1' );
define( 'LOGGED_IN_SALT',    'vK6jcRFj#R0=1NWVZ<Sn-YO6v}?C>[u-c,+RD2xVOX;kO0CFVvK0ajh DA& }l @' );
define( 'NONCE_SALT',        's5vDTVxNxw9bwW`0O36#g_qq[wfMr-NDo}o2.yN+pC5{m+@P(;*L{/Vs3|n6-`:D' );
define( 'WP_CACHE_KEY_SALT', 'X7DD}u6t!}w,neVB4c!9lS#I,gC@9]oH+4<T?gKlbGdG*JGkX9@?`-!)~4q/Du@a' );


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
