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
define( 'DB_NAME', 'magpro_db' );

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
define( 'AUTH_KEY',         '$Z>FPf)lnk ?#llE5p~+,HoHqCHGo6oZ1Hjq%LKy9lxbmk,A[j+)DNy#oim 9oMN' );
define( 'SECURE_AUTH_KEY',  'BAowEJi. |lhGcf!wgA9h>|lklCT~-5.`^{DZS#X(4C]#`4ji|ZB8[jCDt}skh,s' );
define( 'LOGGED_IN_KEY',    ')h><:$fe )Nns2Hq!yOUSg{9&Q%SxhPY3S?!t+OX?f%a-8;to/e&uc+][Ym3*OFI' );
define( 'NONCE_KEY',        'c)K4o1D^r1^m=^O{78!6HbX0saCSuR2.fn*^IUiQ@@0_ZIh!~8|tI~2.Pd(b$a.<' );
define( 'AUTH_SALT',        '{,A({>lv$K~LZ+Q)(d37@bKLDiW/m4~njgM?Fj N8Me2{aRkfvmUT7Sh;fA{8HyW' );
define( 'SECURE_AUTH_SALT', 'Jnmf(YDh+H=R<Hu3m>=xFwKBxvm_M^GTg3So`viav<+Oef0;ELDXt(f*T$olC$>V' );
define( 'LOGGED_IN_SALT',   'HEw$TfK:%#Ucpt@sxKAg}J}z[jL90}~i[hv]]mtn_wzJC&F[TY5m1$IE4{s7|4EQ' );
define( 'NONCE_SALT',       '=y[]@;=q6ha<o[{q^YSbR%pKW<}d6?r[LD5ExIlC&=/wwfYnVRmz*e[jei!S]$<=' );

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
