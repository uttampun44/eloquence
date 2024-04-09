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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eloquence' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'VO6)(qh !3xN]7|sToqzN{ar&{/ L}cG~[$AgB/>(G*,(96Xe]zxf;17sm7I3WLD' );
define( 'SECURE_AUTH_KEY',  'A$kdj%p/:JnBtK6F`Dql?feOiBcI!uc|8b5-NT[F[CRG;hWzf+@VE}P3tC39?/qB' );
define( 'LOGGED_IN_KEY',    'W,VN)P+F>G]t2}RK(M%GD>TK|UD>p^Ehe1tgOcm9F/qC;?op*N^p%V}#*|O~q7`}' );
define( 'NONCE_KEY',        'E1$R%g[zM:bcB40Zv:ST_q{w>8uuziEnPh.FU;^019WTI@!/=XC+Jv(ve(P-tNz^' );
define( 'AUTH_SALT',        'iN[2I`t+p*H+(Q{rkg%o,*!kq1uFT+Ve2OWx2k(>XFdUb7A>Mi<-faIPZ$4Ph1(*' );
define( 'SECURE_AUTH_SALT', 'aSE#HdGQ/,&y9Q%>1(:CR_Y]S)9<?Vu{T6K-k=@B5CPK4n }w&$Z}G@D?AWK))@/' );
define( 'LOGGED_IN_SALT',   '7d-3Y1H XN_RorW!0hT(Xu{6z/kcAgY}b*E_.Ng|eG<569N8DNyb[q..k=~zk XX' );
define( 'NONCE_SALT',       '^[Q]:N63i!D]|i#}CjFfm.hxj}S@kwe>g|f4$.J?%WfXW{)AyJq*Q.k#>F^#Lx_N' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
