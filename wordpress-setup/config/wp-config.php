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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'raj86_db' );

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
define( 'AUTH_KEY',         'b924|)]gV|9EmW[S{~%@,Z7Y4mm1y{`E4KAL]^#C2nz]3Z`Hkz*|V_4^k/6U0,Q%' );
define( 'SECURE_AUTH_KEY',  ')E#XOO1_Q$WEA}|h70#]&0([.Y<eK-%/O~ ,LeA[d#@6McB,uY0ly!GqUF5Y{|XP' );
define( 'LOGGED_IN_KEY',    '{ngQyW~DW0OJV(k2dFdk&tlddgwE:`Y:k?tJu|b0UY]$B_(z@9Kc0RS=,:$/b>w#' );
define( 'NONCE_KEY',        '9{NYzOp&qJ^$y|PeQ[ly^zP~zG1mh:u:4+xz(C#gFJ4 J%QUd-)%8C1dN)n%+#qs' );
define( 'AUTH_SALT',        '[%*XwN!TQ:V7&$J^*+AXnqNg~aLB2rsXeDI6vP0Qy{xUnL3<S-^}.W^+JCUsfj4]' );
define( 'SECURE_AUTH_SALT', 'ZOCFN{[Z#Gion5D]+_^lK!ql.E]ylcglf/:]>|oAfYR`6c;n89)LNE&_8X+gCD:T' );
define( 'LOGGED_IN_SALT',   'kBss.kXGUI5!}0KQ8]r,PCpdqV1!qt4vcZ$4X<7zH!j^e%:Sk7R>trsxJ=ET7wLe' );
define( 'NONCE_SALT',       'UKNDd@%.1+kZFo@JAJl9=|w;cF,IY;UdzI|5IYWZ,3*ck$DWc$1L;`Mq<v8q,dcQ' );

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
