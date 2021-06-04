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
define( 'DB_NAME', 'YTL3gDW9Ow' );

/** MySQL database username */
define( 'DB_USER', 'YTL3gDW9Ow' );

/** MySQL database password */
define( 'DB_PASSWORD', 'OlnobbJSkC' );

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
define( 'AUTH_KEY',         'xt` $#gRC_Eew:,M5^{[!Fu;iPoi/8onv`-j[ADdaQS+AppVY|JOML#ja|5:{}Z5' );
define( 'SECURE_AUTH_KEY',  'j7 P]w%msL=;!az&t#bFiP*cw.NiQo4tP]A}.r4y=>].|(F@lL[q;d![x8r$A.;f' );
define( 'LOGGED_IN_KEY',    'ChkJ?5pbtlx]B]*TEsm{:[&542tNoA@Ce@327fY4fql@Fg;>>k&nJ&`oxc|HOfWe' );
define( 'NONCE_KEY',        'C>J,^UXzz[//g(|ZMS=yxIiB>-!xGTZAP;L@U]GL-EE%ekJt VW|bg8zcWI|/>{k' );
define( 'AUTH_SALT',        '0D:I}a1BiAuOpmR@c3s3K:,? cGh+~X9DXkVxdgGXNU?+AMH<nO&*e&R%[@*r FA' );
define( 'SECURE_AUTH_SALT', 'W2%xS}!vvp:bL JgavE~9uBG):Bo-4[td&@W[^{c;OF]~4j2DLlh$gz/c3<R5@pV' );
define( 'LOGGED_IN_SALT',   '03$<sOaV|}`q,./bEJn/icLb$,H0>n|m-,B.6d)|P9r/L!sS}JV7C%.8&{]IPKH%' );
define( 'NONCE_SALT',       'Hk:l(ceo%w|QfV*~nfTM#Z(?Gq/N-viUz-Y/[8h,H8<[s!_.D$_8t]Zq?+:7KN*z' );

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
