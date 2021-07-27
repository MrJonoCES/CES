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
define( 'DB_NAME', 'CES' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'F9[X,=ZxG` k;*)Gu98m.[l!je075_2Tp{}JVlH*Ft.?oqy1@Y|w5ndr2,+w|[}c' );
define( 'SECURE_AUTH_KEY',  'yN~$.0$~8,wgwu+tp^K|dJhXMGvJE%dz4(KoiRmWw5|*?#*qZquKqjk;S>z+g~Ec' );
define( 'LOGGED_IN_KEY',    'v+XS6@d/9fPp- IG8(M?P2P]m7k_Nl0$JHXeq>2Q.-g9Xt*)kzOn|/Cv;13OW$s8' );
define( 'NONCE_KEY',        'H6@`Pc{oc)+$N;]x}}!D0V<l|gy^r!4<nwr}:g(srZTks_BGtMi_mfDeP?NN;H0;' );
define( 'AUTH_SALT',        'UIganR)!M@6+qflFn<-B2q3G!ETB@k~Y]pE=Twan@,(8R~fV0qXt$ehH(gZ[8+q,' );
define( 'SECURE_AUTH_SALT', 'sFb!fd*o;~,!gJ6D I,&}V|)kx#IPCNjeH,4nO|]_rF2Kv)?WJZ!EJCHz-gLy wi' );
define( 'LOGGED_IN_SALT',   'sh:4%NKzmr6a-6!9vKJHQ$f*dw>2r%]W8^-vWa4;ef TDi3BnYX?>~F[vwnzY_`M' );
define( 'NONCE_SALT',       'yPq=K27 M&?w|)zFNdQv++#3E?K889bW(_DhZ~O4g@d?J6mr,y{^oxh]+(2T$.+`' );

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
