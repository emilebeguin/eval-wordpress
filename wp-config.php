<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eval' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'BJo!)vQY5 f1|7wXK]{m2N=YK4^`hb3hAI^D>d8W2s|sRqrNcVo21Oc#kM9 -_Fg' );
define( 'SECURE_AUTH_KEY',  'u49+I1R(-fhoF02]Bjd%aR<S&Z~::dL.P|U5W/u9=*F<&`*Ff,(ggSu%_WH{40>$' );
define( 'LOGGED_IN_KEY',    'B5~ko,h`y@ &7!x 3w>!l,G8G{p4T^M5MFV[=kVZv<nlsL+7_*)A@$ZnoM#`#{nC' );
define( 'NONCE_KEY',        'X%Sb!z]s-/IT&y=1$C* /A]g:Xw=T}:gA> |z3#[KnWu|l5HY}9B8L0x]lHyQ*IJ' );
define( 'AUTH_SALT',        'I]Elxux4SV5ks~*b1h<YOETQg#?lXDoL(}Q@uc!|:I{Ut t&m]e2 :7K+`1=Jb1f' );
define( 'SECURE_AUTH_SALT', '%p|5+](t+RM/*s=Bi,8Nl|1&PV=O=B-LX78b,<y[*M4?X=U+vC%w,?eu@`2Ms{s*' );
define( 'LOGGED_IN_SALT',   'hQvEw;`x.>$(#O7Yc0-PlZZJYYsmxADwtab~>f`)q4Od9^T<wZCyx-@pvPxyPdQ*' );
define( 'NONCE_SALT',       'tz~;H0X(Q9Ryl+6Yff,d_{ agS6YfJZ-XH%c!qAyyIu1|Ohu(|XctO<C:]I<@Nq$' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eval_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
