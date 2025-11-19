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
define( 'AUTH_KEY',          'o_heT&Pn4CObpz38Y!nF)qN:YI)U#B~jy&aCC~9.>>YNr]oid>sE3-{wa88r$ hm' );
define( 'SECURE_AUTH_KEY',   'gp1xJ3-)1[NzF`y/,6TXlZJwZ;3}Q@hR]Mfntw{q=[q@Y3O`3GFmH4nV*o5wGF&g' );
define( 'LOGGED_IN_KEY',     'LG D8E;_^9H~oH>+E9oRC=2:=X%Ud(,uvL%$aAZPc,+]vhNdcAIfRmDtxUhBDga`' );
define( 'NONCE_KEY',         'H~!Z]0`$*ZaKq:{K5O/aBD~B`53n[INxRtdW1rR|#e?s;dS4,uqu//n-q529,[@E' );
define( 'AUTH_SALT',         '#U~&~(uBWf<bM/qX3[L,#-pJsuM/PBI1a_W_~Im}zEY9DAK2rr,Mrw_o)XH|_7L*' );
define( 'SECURE_AUTH_SALT',  '=t::.p(5UtmX[[x0Xj.7-yyn{:iK +@X3B&phftqXY#kb@8}M J-Cnes_(EKA1DU' );
define( 'LOGGED_IN_SALT',    'MBVVz~;D8(ZDN`s,^2?|@mUn3lKTp)JylJy[ qR<H*P:U)tk[_4/sQ5#2B4~>^d^' );
define( 'NONCE_SALT',        '=lb<8N>oG8CVJr@x4jgn;[y4kO04@o?_#i+t.!XBKD@zmTj;}B6~5sF-:Oe#`.L@' );
define( 'WP_CACHE_KEY_SALT', '0.sT#~?Y~!@]McB43MQJwJtXS~^Pk7G$^b`|*mB=Qb!/akL{9V!TJB,`;G|sqAgo' );


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
