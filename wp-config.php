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
define( 'DB_NAME', 'handel_db' );

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
define( 'AUTH_KEY',         '~)]}@|? &jq}Cy aoAdfe)W8@s7$z%P;])N6.=R0~P?ZIXOI8o3O{(,}:3k;f8,*' );
define( 'SECURE_AUTH_KEY',  'ttpy}(keA;mVsb{No6Uo/8[.RSQ^MR#QO<hL%`veJyjr+%8<3/p#j]OIgiNLvCEP' );
define( 'LOGGED_IN_KEY',    'mOeDh}e6fw%&vLI~JW;#OtzY~q)H2LmG*.;j{8jwqs s L-drj5+g$S@QKsO`OY=' );
define( 'NONCE_KEY',        '3*W:ptV7XH{WEapKna14&N9AoCr~i!b^mVuFA~SK$ qa2LCa;aL&2O^9rbHXMeg ' );
define( 'AUTH_SALT',        'LQ)@8Fc#wV02OQ}x)c%H7NXaP-|h^vGS*s_}KxSL(B>QYLtb;+4GT9v` zBx{*!N' );
define( 'SECURE_AUTH_SALT', '~u)5HYy,&XX *mECisLaR0W`C,p=e{/]qSWSPwyF5*Xz^GMw0#tt@xz+=BL%zFRh' );
define( 'LOGGED_IN_SALT',   '#yLimX^X5RAWg||k+#*Eb*=.)n^*_bNj;`Rvt#B|d*RWi7LC AbbtZgnn/l/EG? ' );
define( 'NONCE_SALT',       '=swpP!]XDy$fj3%{+.o6}n&I( /v,hX^:p:s}4F[L$3p*J7sVW.kk;|J`VjZMrKy' );

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
