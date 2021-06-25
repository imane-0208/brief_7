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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'jCX]yvaaAUq@:zmfD6I53dbiBC!m50JtQOp[O|`p$Bo40CS3ue0,Z0$}E1az[AUW' );
define( 'SECURE_AUTH_KEY',  't,atcmN,u|LhuED/C$7wp7s7*BT2<ZAtqQF1x|O}3U3i5d&#NNK&.6X2pN c-^Fe' );
define( 'LOGGED_IN_KEY',    'DxNE?nD?45sP9Bhi$HKTw8$to@CJsl8Qd._P}0:},ye4;p{O5wglbZp@IW:)h%5M' );
define( 'NONCE_KEY',        'B |_0+,:-m|UWwCsqixFmu<tkZ|%LEt[f:okq5&NawplePa|=iGWgF,,NzZ0Z4l%' );
define( 'AUTH_SALT',        't2C+fNv#hn42lToKG,O0tbpIAIbnvWp][908mtUL[GP8Xkt8?vrd0u~C?[[}g;u&' );
define( 'SECURE_AUTH_SALT', 'LIjnh?)^Ys>@A/mu_gQ-v@ClDRs(&3vV=tJpG_1jqVr07qDsd$<A3nnGb!KZ*T$N' );
define( 'LOGGED_IN_SALT',   '872nv[N6(h{8`C<]rGtSVYa{8+4G%6O_rty*r[~PXd!BoyLOuPp(#@*!>Tdg$d~:' );
define( 'NONCE_SALT',       '}[Iz7i!Ijv@*dQ JS,@>A,?Q(BXsSYkpko6dC.9J^U9/b|~:R4H|NG}p&5f9E~zS' );

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
