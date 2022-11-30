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
define( 'DB_NAME', 'Joy' );

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
define( 'AUTH_KEY',         '>,zR9@8DfEp*2+$M;7lPNM98=f5myL9.gTg%]Qsdh^BfSM@BdT=`EGP.yL[@H!Fp' );
define( 'SECURE_AUTH_KEY',  'f/Lfc&y <ZejztZ!puO O,W(R wogwFQF8<eUK8{6cSkH4K7$lDUGC~P!&kD;KG>' );
define( 'LOGGED_IN_KEY',    'Jm!aKxc !/? |Auh0o6RS|ofwj.Cc7?+HB_KT?0b0cD@-U]F,;yCe%tb!34bKF(b' );
define( 'NONCE_KEY',        'ekD:f@%~)a[&DS#-j>-XDDf_gp#[!rpU`}n<G{<@js0}FZA> ]=q<65:f%(U4xTK' );
define( 'AUTH_SALT',        'm<)[7nUeA0q$[5yV-VZ;~[(txO&=8)99sj&/TOHig9}UX;&}f1Dz[TX]p.Evghwz' );
define( 'SECURE_AUTH_SALT', 'f-@{v1apKMIH8$x?>9}mEyg9F*&A~-6I>lB}%}*X4*A?I}R=_cCK&DD [PUCnlBA' );
define( 'LOGGED_IN_SALT',   'uA^OTKR}!ZgyQ=#cgGa](H =K)/9^ M~vN6zM9txKq:&U1o, m2r6WY_-O&>yvg:' );
define( 'NONCE_SALT',       '*6:K|Ckgf;gJ@d}-hLG#(0PLonm{ZnQDDl~P.V6vE,@Z&d?98Zp;g*pyqY:KFOMb' );

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
