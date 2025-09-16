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
define( 'DB_NAME', 'auditors_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'U55gQr5oM=Heb9PQv=G?b#HG1SwXBb2@+6TtQ@v*$e*2HAJJD29Xk]&tXQ9[j]*1' );
define( 'SECURE_AUTH_KEY',  'ox,7WD2{RNS%BSrdaV_=s._-Z-r!N276fMvZcH@9<9#)~Ta*}Lbbs<{D=@s--a#_' );
define( 'LOGGED_IN_KEY',    '4:lG9*;iTtg(Y6E:dr1`2F.h~#ZbI?HCHkE}ha/kVs{J skqnI~E/=)F#ECN;Ut.' );
define( 'NONCE_KEY',        'Pr8/yw[5?+LsAvw2duO,8A%Z8l-6o4k c6xzrbbMoC.IRnt^,o1/m`$u`&TgD|,^' );
define( 'AUTH_SALT',        'Xc,?#+{tvV0pw#)~@/S?a[jg3+d1/_O_j}OY@xLMZ1Y2~8>(ep3Z}[f8HX(a+)?<' );
define( 'SECURE_AUTH_SALT', 'xPJ!m6m5U[Kp}dr]8&tIm#8tL~Q0OK+XF%x[}`|W/ZoFmsF}V74A&~Km~oo;s(6#' );
define( 'LOGGED_IN_SALT',   '-5&Xwc[1[#f~{dE8evWOP95^X?eA@/v%Zv ][+V|`aHy!|AO%;DGJ,p*Q>/eVt<e' );
define( 'NONCE_SALT',       '=gjuEFLO #46Io@]Wu7%JdMENL$poG-[+Zlce/+JX=r|I{K(l l~._Zqda?:,G,[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
