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
define( 'DB_NAME', 'blue' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ')K%YF$$BNqV#j6nt2] 2C![{I<WJHWeEa:yBJ:k*e?+C~z ;hxV taok^l(~6Mrv' );
define( 'SECURE_AUTH_KEY',  ' 9dtKY *LQc?i][Fs+dp)Zt!)Z_}{ >G*L}lp4RM<5!c/b0mAz/ir_%oQ*Qd5;Wx' );
define( 'LOGGED_IN_KEY',    ')/>&U!oFk5EkNoWV.idHpINp}k~(`q[@PK[#1.wJ}P%OCsomwn0hE;M|JH/=4VBR' );
define( 'NONCE_KEY',        '&e{A.h!xz;bj |L=!JMW<6KrI>uszcQkP!~RRah3&4Kq-K:<H+Tvmu@x$I5F=e84' );
define( 'AUTH_SALT',        '+igcqCJCJ`b?[E|EF Gk3h}Dbb%&y/8+9j-vb,<W`XeHFaD*mLid?KfHJ$0n<Fj|' );
define( 'SECURE_AUTH_SALT', '^aEL*0]zI8q5^?hA19f|1Z@~~%z/fz4!a@Io{n_{(q<tRd||g=&8`y<9Aq7o[K8Y' );
define( 'LOGGED_IN_SALT',   '#~ qT7R=qSHXw/i9U:{ZcZrKpmH~m%}y*:e:hF1&s)2eW*lA>C$NX19b40Xq:i_=' );
define( 'NONCE_SALT',       '~8P:)!M(Ve3m*c+<U}h/A}.2;Uk.,FYI/!YHR^UY$6?Hj@K4sWfbdao9[4=o#Qdv' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
