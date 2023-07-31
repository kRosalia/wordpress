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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'd{^pK(Jr~qf({ FR;]<wJLi`(X*JlHLM}V#Dw**wI%Z/cj[gTU)dMs0B`r*&^]x,' );
define( 'SECURE_AUTH_KEY',  'yzS14ozFx_%Yzq_5xk$-`+0Nvl{gMa{>Y3`uGtNS-{>9%UMeDu-@<LV}8;z4G?Te' );
define( 'LOGGED_IN_KEY',    '{iCEzNrU5UPP3e7_(-8oAkR~y4:OaCI{(m*C7!i-Pid7#=-:Q<gPF;aU7(P6 /5~' );
define( 'NONCE_KEY',        'yjhg@=Ob|NSa+</.r~Po=G.Uw%46.OkeCrQYsO(U}2U0@.z}1[Ep}?!eFpm#l, e' );
define( 'AUTH_SALT',        '=;?(gjl1c>1vnJLiZy0@y$|7S$#5kiynG~.Kn[]uke),n)+p%EC+~G<r QNW1:DT' );
define( 'SECURE_AUTH_SALT', '@U!`h|L}RxNz4(5C0W$3a)k5e)k (c$cO{udkY)YdWE/fm<;rLV,>)(W82h.B8Sg' );
define( 'LOGGED_IN_SALT',   '7boltDWHHF1E*.?wHP 2RuM= e<M-&8 cXRE{G^8#?sqWTlSs2@*3TZa!PkpW:E!' );
define( 'NONCE_SALT',       '$8//?NS24R]Gx3.2V-aSYItn!qT<u;@-iSC,pmDc^`b$QoaRM;Tylg)8=U`Wdl}]' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
