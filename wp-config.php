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
define( 'DB_NAME', 'wp_examen' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'hf%i2kq/P|;[^scGSVu84&e]l=H2# u-E$jZj63)CmHg2<GoS8sNktOui!:0&rPI' );
define( 'SECURE_AUTH_KEY',  'M:6f E*qiT@:?hi)(c]-[oH%Dt>i]Lthg_?55>>l9_:_xXE/>j!+&ZrN~1]^NxBq' );
define( 'LOGGED_IN_KEY',    'q#.>l D[!PLPN2#^;y&RTMzdnq#!bcz:=GX?FY0@:SO+?G5KtL$-!Gr+.>~LqN.d' );
define( 'NONCE_KEY',        '`Y $Xl/k!KSCJLuN]Us[o8$I+M6Xak,L1gx@y,+l:n.+hnN,t0aLQ#g-k{IV?..%' );
define( 'AUTH_SALT',        '9x/8{P#GG}nlg[k zg%%mV[IYxaN<JSsA^x30vo+X$t{0xCWr:~=o4.BgJ9SY6a{' );
define( 'SECURE_AUTH_SALT', 'a1 x*%]l`^7!CB;WB08(j1|>b~n@d^AU]hWF(XNOLxGk2>I=3i-^`dQ@YIOY!xOk' );
define( 'LOGGED_IN_SALT',   'kL/*zy$&=:|iypdgD2(A 6w9.{fmYE6`FKkBZc}>a[hO.R=o-QtYcTyG_.(U>pR}' );
define( 'NONCE_SALT',       'jn<O K]qwyQ=4ljl.NQmf!yc|b)wS^,H.LO,3NL?~YM`25u&]5UTvD[MDP^b^Q/N' );

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
