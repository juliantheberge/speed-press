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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Zq~.E- )VNsj;dx4:,p1P7a>:s)sDw*)@/]vm8abW=mwDJ#gY@ fw.A!,i=k6+RI');
define('SECURE_AUTH_KEY',  'J{DcN.MRr`;%G>7[s?56s;1m38_B*Q(kj<E ,=s]+ACd9!LDEBX|kF.2+rc|&-U~');
define('LOGGED_IN_KEY',    '98_`|Kp=Y3DtnZ`]|we:D8CtfA:<R4(7p#OOu/KK:{1Ckw]jsW*Po-CY|$oLuu@e');
define('NONCE_KEY',        'K4gHsV7Ko@PbHHB]q!,qbT hvvUUe6 RHlMiH3FNcbm]5VfD2._9PR/:AGS0_Yi2');
define('AUTH_SALT',        'm{kQHTrj]jB|pP!l/tDZ4SPU+i9K|::mJq}6_1oAFvq hKZoJ;{Urj{u+1P`?L+<');
define('SECURE_AUTH_SALT', '/&0X+x}|4SK-K=:D^Ljq&?dnkO8e<fLYTFK*RE?lGM%KEBANY-#OPF5qKnKk$|SV');
define('LOGGED_IN_SALT',   '6^vwcb0f]6KG?#y,u&nkL,K!:z?OXO$^W!~yxy|[E Tl8n4l+zW~#2sfFf+El]xp');
define('NONCE_SALT',       'W~heMLHCkM-YFjBL5js]`}+.zts*0n|^_+e5rW+g[=aHH3+(0jHy~<Gb+t*:WX!F');

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
