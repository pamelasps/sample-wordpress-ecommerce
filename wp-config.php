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
define( 'DB_NAME', 'ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3308' );

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
define( 'AUTH_KEY',         '}cbT*u(&1Y.i#akFRX7Jb7BkfC,kkK@CqluW@6r -qqwIjI{OlKm($(M7dYu|Qw:' );
define( 'SECURE_AUTH_KEY',  'NfR]{;Yu9,U.mbk*BvzU</{H;&~<,_?iq8Q_CA}<{3MLBxj&)3b^WAoL}w&D9AK{' );
define( 'LOGGED_IN_KEY',    'lV_a{cTr9hc}sfSv`1]^A;uMO_fbR|HQT?[c8DUqt%fs>b[DB[2JG+t&mr@M*3k{' );
define( 'NONCE_KEY',        'A1*;<=lUs6x?oep|=UvQq1^_3>u/6MmZ0+|*Qe_:a8j52MX!cA-g]VyV&#lGVCK1' );
define( 'AUTH_SALT',        '?`cAEyC4Yrrfx$HWa5AU_m(Zu}FlL`(+MtkOHPWD+$~Dy(?9F?xf%+!n=?^Flern' );
define( 'SECURE_AUTH_SALT', '%/&@(4?,UICC.ABlh:<{P*b-l8$WOaRW0vg_eN#cQu$RY `#lrU,>ID=pM*eYy<L' );
define( 'LOGGED_IN_SALT',   'zJY5q1MNMveGNH0JMh93iWq Ap0i,(|IN`fFSyWHgcPCsq@Sf#%Aw6I)N]1R$@SA' );
define( 'NONCE_SALT',       ']r;@%+DMV&{Qe}U8:9}nh6ysd`~O$w07e^x7bM[zfK@pjC;iPt!!tbZ;13D3m<U8' );

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
