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
define( 'DB_NAME', 'db_vince' );

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
define( 'AUTH_KEY',         'bJi(4Wf[I%ann|vC*cpcFXV7@s!*,:]E~kN8B2B({Z;n`;%V{bSWFwRr)@CN`N|2' );
define( 'SECURE_AUTH_KEY',  '#Hl}Fr)+rWB2>7Tcoe,fm3xpMrMJf~cx@7;.MvyZ;`^cwH@Khq:J~~z_#$qzLB!0' );
define( 'LOGGED_IN_KEY',    'v[MI !$^POp!)B1nF-*DbXeatF=rX~UX_1*tJ(4!Q&|jS7dgE;{3(I#LNf4=@k*v' );
define( 'NONCE_KEY',        'QSQ$?DVwl6xlla*n%jukK&!iP<:W`8R/kIBvsnE?}C]|u`N-S+g4Aaa,uV9N)`bi' );
define( 'AUTH_SALT',        '7g2fIbX}tBF S?vCy:!Q5/p[<Mbf|Ep^>[Za_a]3(U]izn-VtiXsqT1P`OhVnTvr' );
define( 'SECURE_AUTH_SALT', '2tGX8G2%7Jn4?q.>C@FfO{Cb0xEK1}1>55Ijcg_S{psOzdc/YM$t!l-pY^{vt:`i' );
define( 'LOGGED_IN_SALT',   'G6V/~CNB+2>EA5i7*&tcW/ bD48]P=8f|~pL]+OEbZMs.EfF1![wt#Uy?HbsrFC^' );
define( 'NONCE_SALT',       '9bm:|Qwa_x0tVIUtGU_$v)>KTRJL.aLG;cY0=4XR#c5mWi%9YqU)&r}PuXu-~0Yk' );

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
