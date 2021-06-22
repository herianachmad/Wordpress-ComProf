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
define( 'DB_NAME', 'ssj_database' );

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
define( 'AUTH_KEY',         '0>5EUxSgX[fa1ll^usZP%tc9:+BF}Ex/vVn07@G+l7b!9=v_?Uv!x_vd.h+Ho8AS' );
define( 'SECURE_AUTH_KEY',  'RtEY-UcE`Y9+-OXS8UwVRw`#GKdVTB)P&r}WSSvPYnGT4-q86PW5^c-zM=yRE|l!' );
define( 'LOGGED_IN_KEY',    '1r(S:G@}OJ^[+ixFIHKHzgZn!0?ZOKGf602^2c(&pJueF){s:wb/aq;H3n>9,?$a' );
define( 'NONCE_KEY',        '{jwGMatysT[Uf$nnR::?yV+]~2HKZ+[1wr9=^zdGrCa~<CeEpB@,S~QrobVustJ#' );
define( 'AUTH_SALT',        '<q;b|U>umXZmp6zkVQ~w`/Vq@eljR( C76|K}~K1R(ctOs.X%U0 Mny,/?vMF$(1' );
define( 'SECURE_AUTH_SALT', '/Y3J/@z6yj]N~$`b2Fh;ndK6$SZmqCJp#U1Ie-~e$W}7&gbqw_TeFQ(m}H4iq4l$' );
define( 'LOGGED_IN_SALT',   '?7:h:QY!zbh_%/Q &oA6[~/W0TawPP4fb|^XL0,[m:J_SG?.YM?L .O2nQO2A8-[' );
define( 'NONCE_SALT',       '7P^1o@1W.O(pNnxS$cXZ=a2Wa}otgEp%vP&dR(cLem}OY_3bVk=fCGyTpjj{i<x5' );

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
define( 'UPLOADS', 'wp-content/uploads');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
