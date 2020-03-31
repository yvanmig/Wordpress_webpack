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
define( 'DB_NAME', 'webpack_wordpress' );

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
define( 'AUTH_KEY',         '`LPJII%rz#%1n2(vW/XwG/;BTNGK_f[0*&24E,fVuEtRX~pQ|9n8`&SDmF`2Ld/&' );
define( 'SECURE_AUTH_KEY',  'TDXorD?U<d}oC.(=0Jn*(6={[&u0p`OJ$O5v8qglM;Q3H{ddp NEO_g!0h:,=?.>' );
define( 'LOGGED_IN_KEY',    'T(g_{4#<q?l!wMOs_PDYY #H_I!6Pqwmw9a[5w$xKc sEu%#ub.hRj8 3xJu*H&|' );
define( 'NONCE_KEY',        'l7vV{E|gUy%N=-xvo-A:VG|vW?eV?p_`=rM^q,9j/kM4Xxf;#Z0NuI_]/k^S1A&@' );
define( 'AUTH_SALT',        'J_34i1&iDq7(d@q5I+Npi&%3>tZOydj+:Hiow.sN9(^C^Di;K#~L`}&nQu?v=^d5' );
define( 'SECURE_AUTH_SALT', 'k&u`#x[dg|])1d{c{<a_/!qdm.8$bB!EITLBu*i-KM3{o]Sjqk5;YlfqOtBA5Od0' );
define( 'LOGGED_IN_SALT',   'Vk,FWsPml<Rh]3;B$w~Y;+XZ%Z,dW%wt)KV$JsOvUWT*|xCsW=b:{& kQ`/a[jVO' );
define( 'NONCE_SALT',       '4+szdiKh!B+J[n^cTwYiIcmrw~,Jl5C_h6jEVp9o!;IU-:ICYo=n.A!DPwD%!axT' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
