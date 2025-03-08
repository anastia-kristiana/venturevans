<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u643118030_0uwpv' );

/** Database username */
define( 'DB_USER', 'u643118030_40DMR' );

/** Database password */
define( 'DB_PASSWORD', 'W4lMmeyf6A' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'yGm#3}F&=j!odqiN&X[RE)[Lk7FNboqyZJ;}`og)Zm3LH$ute_xT!SPwV57,ZI|]' );
define( 'SECURE_AUTH_KEY',   ';q_Ff=$He$P W$xzd8E*x/DJmLtG2/h`G6zfn5La[`[ AbbzgN0zLf4!-|96ff>S' );
define( 'LOGGED_IN_KEY',     '[P$Y&5fa>HA9kjXCKodu6}>H#YRU5*@((L|?a6c-_Cu=qo}UleyJ=s./&bEjKT_I' );
define( 'NONCE_KEY',         'l&Lw28vFd%$09l(|J{JyZ0d^`W]nHj1H`<EAC(5Re&*=<NxB+6]CVdY1J}xa3{C3' );
define( 'AUTH_SALT',         '&%LrL&k?~Ku/u`KkL)@!%W0DLcW!?3z6 mb @>>[1ejl6ZZEmg[~O`ob+x[53LP{' );
define( 'SECURE_AUTH_SALT',  '13D*{b<3n=)1X!#ir<66ut_%-a4TdlD.L?Z2926Xt@KH}P8.[TkbnDI{|UC_9Agb' );
define( 'LOGGED_IN_SALT',    ' S<6X3F[&~G_/|DqWyhq2)6AE1.]QT)0!W4dF**4.VWtJa_mek=Xpwk5Gl72q:cI' );
define( 'NONCE_SALT',        '9eisw)umvbmZ>~}4wn$HP$er4iVBsbQu0=6w,XW}E.:kH>0w81Dws]2^&0Dk*4mV' );
define( 'WP_CACHE_KEY_SALT', 'w(5Y56}h)|@+?R9r$goC9E=:{^n64)#j>L}w$yLP$1^kcWUYjSwrvim]nOH4q*=[' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '51425c3ebfda7decc2f63de0a4d41b20' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
