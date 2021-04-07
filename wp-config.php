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
define( 'DB_NAME', 'tqnyah' );

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
define( 'AUTH_KEY',         '~J9.(.7ZuadxogK?QreCp]m[F#:P|A[v?2tK}j4aKp6 .4SOIE?EIwf=GYQx]+Rx' );
define( 'SECURE_AUTH_KEY',  'ROh^/147f~=l1J;WP.qS)]L5l5&DIvU=#`Tf.DxtAYt=mZZAgx_ObEot.Lt)ajMu' );
define( 'LOGGED_IN_KEY',    '5sVs3)N2Ah+E)rt88;OV`il2{g@2.@r7#9Zr}Lw,pb#Y@n*h=!uqGD)dZvbW }$i' );
define( 'NONCE_KEY',        'f*^YU(Xpn?;#R}mR<*3t+$IP>E;piUSLc=Q/=YWeZYJuq+]kN3S$e(dCAhAB(@U0' );
define( 'AUTH_SALT',        'H_yc#f{u{g?Wh{(Z>hVo8mROH}it7(9tzU6w+tDCC9TNTnMef2S^*,!0h!F</HLh' );
define( 'SECURE_AUTH_SALT', '/Qz?ppr:nMe*.h#8~pCE-AMqJ|R;f34;9nCus~,H,l; >z.3J8jYvb8a lj4HG|:' );
define( 'LOGGED_IN_SALT',   '_I~=Ii8!$=D=bZ/zw#fs2T.@8lfMFK_mYw4Apz2*,B%RNT9vf,.DYqCSx<n 5On7' );
define( 'NONCE_SALT',       'U/W=MgpZ{#fSoV;.Du(+*xuQ5w/$]cVT+6%;LO]$!/zUb]qXO<PZ-&Xz={!5U-9]' );

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
