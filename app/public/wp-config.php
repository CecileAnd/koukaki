<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          '(wg|cOfWG46O[/7d?)As iO{|.FfJ}iq19T+xFR9GSD1A~:-ae}facMnMOJ0zrcM' );
define( 'SECURE_AUTH_KEY',   '[E/&{A,;mhjdj5j1uA-YyMUm(>>LiyzD~>x?~0N{{5A>NzhH~<Z^3gm_?3g:$i_x' );
define( 'LOGGED_IN_KEY',     'Sr;k8tGwJS3<PIb77ZjvrH.g41Mt+rgj9<c^IR5JFo{bosJ3F6QyS+EKr.=z^~{w' );
define( 'NONCE_KEY',         '}&=[^*`58y%P!D#2*S@9tkEWTd53NpYw%Rhu+Ha3rFrHd0vQ/m[8w,ujMWrWb]sD' );
define( 'AUTH_SALT',         '{lW&g)Z2K1zb sl.+9nD/CA<F8;!oOn=r,Q?Ex+AlrZXtxIL(OR)qU^4B]@3j.U#' );
define( 'SECURE_AUTH_SALT',  '.?@NLvfbvS*OrQm2@^<{I!oL/`<|SVQ~W6k`HnjerwB:QEs/Nhh %w6Li@K*GE0I' );
define( 'LOGGED_IN_SALT',    'w#OoJCwy?bCTO[FhQZ523FqNPx`BEA&;@HORV$3v/LYXW+#egV`GGnMXHkl]CjEB' );
define( 'NONCE_SALT',        'nmS-tD3v`DTB:UCC`LCePeL,`mPbZNbs206%!^I.8e$]Tyk/=BqbQZ<n-Gv#6(.L' );
define( 'WP_CACHE_KEY_SALT', 'Bbk#PMMko9[lHOh}teDV[f&i_HU7dQwS?l&3M$GZr1m:QOd7#WvhT!8ssKpF^0]`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
