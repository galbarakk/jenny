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
define( 'DB_NAME', 'jenny' );

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
define( 'AUTH_KEY',         ',Z]V>$.MuRJ8(=@zki3[rp)bY.y-udP*D-s%m0~-U*{Em=p4:2Rl&I@{e<uJe5LB' );
define( 'SECURE_AUTH_KEY',  '29b[[59%UNcn^z^RP_;h3uPr7K#3h&X|+:=zE[B 2T@VLQn9.;qgzb+LHrL?D!}k' );
define( 'LOGGED_IN_KEY',    '457(9*/tEsyyh6>8Wq++VZ~?s(Pb`%w4p,{9V8%cPV;u,HgBd>Br_w799._VXa5)' );
define( 'NONCE_KEY',        '3/nL0VQ1t%Ro&1rw$W7-1%EN/0,y+d7<,oaVL3huY[yUTrEGI>#D2<b1=gsD,F#r' );
define( 'AUTH_SALT',        '0&}0n9lN-:X8k3_wP:L[*oZo=Xcgtks*u9*tVgA6@.PuPoVvb(W/>!9|x<SGPoWZ' );
define( 'SECURE_AUTH_SALT', 'xUZtHN;0GWT~1-RQ <I[HPJQH yE:dX~!u9cE[)4_]nU}7vp6Kt0aEGC919[bW!^' );
define( 'LOGGED_IN_SALT',   'l3rzc-%XILK6|(]6:$k+9^|Y1LJ5Mv21~{~]<Q_S+v)Y|$?!%0.XD4PVAWT@jL_<' );
define( 'NONCE_SALT',       '({ f$#2ZzZ}x<1h;H`DmEr+su-1_ ]YwO^M`{[K{*J0;]VL9<0UBt%)`-km>iz<c' );

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
