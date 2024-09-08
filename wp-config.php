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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'databackuptesting' );

/** Database username */
define( 'DB_USER', 'databackuptesting' );

/** Database password */
define( 'DB_PASSWORD', 'databackuptesting' );

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
define( 'AUTH_KEY',         'd%h4#;bgWPP[iX_5c]6:`O=0UIGr5eXGz5aKC>amr8.roVMe/+p73U0RENHP:lub' );
define( 'SECURE_AUTH_KEY',  'NHi:]%VmWb201]s%3%2av*p[*Ef#U9Bzz Av;9kDBW~aJ|}+NLr @KZ%<0Fq%1D7' );
define( 'LOGGED_IN_KEY',    'Us/7~{H%R_9aibFV_DsCt2p+T7| 0K9X.8|JIu^oBO3zx%S<r$R2a[:VOAyh->zf' );
define( 'NONCE_KEY',        'y[UZ}Zy08X r}$]h1p~m:;6( W%~l&hxG{oo&cPVB:+<wU8IX^pu*K5a%n9x308*' );
define( 'AUTH_SALT',        'j&MW|I9 45NF?rm$]!XAB`[l*GnrhSb$T[yc1&fDj(]~!L[tW|$>cVP k>GDP|&m' );
define( 'SECURE_AUTH_SALT', '-gHhW%USs@udnTzta__nl?`Eft_G|f4aLd{Rxe  Qb^ZUp{r?x~`Twi*Bi7H9A.s' );
define( 'LOGGED_IN_SALT',   '^jRe)kUaeBusPWgLE>D4uJ(BmZr$U@SF:Yauf-}J<4|QXxPc^{1DPe^^fT84mw4K' );
define( 'NONCE_SALT',       'T0ftm,1xTLMP?3u_wKb{ >|F*%iz?pUbcswlb2c7yoP:;9vY;h4Mw~(@]4jmwX1e' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
