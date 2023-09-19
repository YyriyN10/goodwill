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
define( 'DB_NAME', 'goodwill' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'myDBpass100!' );

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
define( 'AUTH_KEY',         'zMt&.jE_qk5rUL)@XlUP$~ZTj_[^NeREdot##*,c4@5yA3w#+2E.|W0&1164GV(Z' );
define( 'SECURE_AUTH_KEY',  '(Ye|OcDCON8N2+CB0k/6l($Qy]UFx-ups<^Z>^IOz^<6D{SgMW19Xd%l)S1mbN=>' );
define( 'LOGGED_IN_KEY',    '?[Bjs2FQkf}t &^o]{;qtRf]mdxQ6h4o{y!!.#-hPJF#Y]%2E~ mxT|WJ= Q kN ' );
define( 'NONCE_KEY',        'b#Uy>R,VxAG{mondo!nFT_U-LfI^JeP0YXK*J#2$ +RLQXTYSb~hz#=!3v=K0Y1U' );
define( 'AUTH_SALT',        '1Ih+O8rtDd&7?ab_IrV^xrj#H.}h0aAV~<8DCMoV}5OS*X0/6S8kut9{#<@z_}+j' );
define( 'SECURE_AUTH_SALT', 'jou(zG@Nl`NlHkQ{Z<!OtiZ>xZ^iS7M(qr7=%Gnz]^PPJZb$5q1``k(Sul#Kc(F1' );
define( 'LOGGED_IN_SALT',   'pk>&)8h96@a|V1d<;*isfXW(<yLI{Y<A44$u,;IM>.6p>U4B*R41@4l&x^9nHaSg' );
define( 'NONCE_SALT',       'q;5;n3GU,}A)f^S-RBWA~4U] Ns[CM_1)^~b5Np9EO>rwa)(e3)U.xw5To;SH1uB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yusmgw_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

/* Загрузка плагинов и обновлений без FTP. */
define('FS_METHOD', 'direct');

/* Отключение редактирования файлов в админке WP */
define('DISALLOW_FILE_EDIT', true);