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
define( 'DB_NAME', 'pizzeriaHome' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Carlos10221996' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ']2x>W.4VG-DpHX@89o{]C&UFF7L$D5%s4s]E=^5B`;BzYe|7[4@:dw[Mry+Uw$zs');
define('SECURE_AUTH_KEY',  'n4F*oUfyr2pnVN>P.W]8Er,G ;YlL-2kb AJXS1;8|c)G^m)#:6TjuF{LqG(CjK,');
define('LOGGED_IN_KEY',    'CVEkVEch;]d,}<P4:!=(sME_X|Xs0L0CEq_0|L7zZuyp!1FzerVYV-JlCNo3Ka%B');
define('NONCE_KEY',        '6xO)nzj:4_JZ^+loTx2G^?vn^xbQ|/@+/ PF?=894Z|#bvGV^)r3M`zb1]-v7-Gd');
define('AUTH_SALT',        'w~39|!0fj/Z{_GV#6~>h)]&w0e7T7. %) ygm||dE8Oy9!8{xF@PV9$Ff>4?:)|@');
define('SECURE_AUTH_SALT', 'f4@q|isKKrrryk|LkAFz[l@N1uU#AO8t3-x.~uWK~rI>;!;kCw>|/M&X`1f|8^M6');
define('LOGGED_IN_SALT',   'R,cXcNouso5=qmCaB89IcG~ymBC&#/):|A}#={uVeu`Yvuv,&p.cIms>_l=-=sO|');
define('NONCE_SALT',       'gVZgGhC{uT=tzx|^X!2-fa^a2F2|O7gO}]uN[1PD?+}lP88[-ZZQsQyla28.cfHu');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
