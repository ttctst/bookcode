<?php
define( 'WP_CACHE', false ); // 以下為一個檔案的實際例子，主要留意那段編碼加入的確實位置，你會留意到編碼會貼近於底部的

//這個為php檔案中加入單行註解的方法


/*
這個為
php加入多行註解
的方法
*/


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
define( 'DB_NAME', 'dbadxewgtrtobg' );

/** MySQL database username */
define( 'DB_USER', 'ufc8wteevfoua' );

/** MySQL database password */
define( 'DB_PASSWORD', '1l0frabspcr9' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'xONk?5VH*dJSf(A&HtVGP/k>(hul)G0Gta{3hF#.LwN)KirWvk~sFZ-ona5=R/N3' );
define( 'SECURE_AUTH_KEY',   '3bIjqi?Xq^U*q9Dd&h$#od4CUvO8Hdnh)i^4TD5ac(Vj/D^S/HJa<)HV.UG-Om@E' );
define( 'LOGGED_IN_KEY',     'ji*0v}ZBynGeK1?)?7D?)RRBWq6fLrR?o 2|z11t:pb&2jJyS&ddV{yP(@zTj><z' );
define( 'NONCE_KEY',         ' IS#H<MH$Odret>F1?WS`y9XB8PpGi~f@!?]yRL`tPVz%C^Y5rL.aN/9%J{r(bX!' );
define( 'AUTH_SALT',         '4^>]^eK{T&yp#k;H[J(q#K?<5<~XMC,{;g`1BSnj^<i89EjnL]%`?2YUNl:oh:S{' );
define( 'SECURE_AUTH_SALT',  'oJk`G9v2~GRK2kLhH5LQ66REi8Q{x6$e[|bUjr7Q96iEKC?Ga?5nsAD[zA+u!a+m' );
define( 'LOGGED_IN_SALT',    'zMu%PV2dS~)-Nih4),$Y>46B)Vg[a1RO@=~SBgB$7+S i90s^cTlzRoRbU`><6El' );
define( 'NONCE_SALT',        '[GOnM|}~|]kHtyPZ^vNq4?vlTn&5]G|szyimBtt#6fl)v=?232A~i_/d&]l5F&4R' );
define( 'WP_CACHE_KEY_SALT', '5J?Y08@=fy|kl~:j1sU9|=QJ<z,l3rzX>S#o>YMP9=/r_6z!GaQmE3{U72RuC#H}' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gue_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );      //編碼加入的位置

/* That's all, stop editing! Happy publishing. 無論多複雜的檔案，這個多數會出現於底部附近*/

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
