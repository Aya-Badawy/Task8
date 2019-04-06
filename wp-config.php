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
define( 'DB_NAME', 'hiker_on_traildb' );

/** MySQL database username */
define( 'DB_USER', 'hiker' );

/** MySQL database password */
define( 'DB_PASSWORD', 'v1S4QRsBb0eoTmzC' );

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
define( 'AUTH_KEY',         'LaXE@J6F8mJUtFK@2L%BSwTZ MI6y54xI$.tlP6Ypu`SU1S66B6j7uw@&PI,fG?g' );
define( 'SECURE_AUTH_KEY',  'sQ1x|0x21el ~A0J*R%5GG;ee,NW<5DiF!z5kap~QBWp_| 7G2={_!fOECA[WLEY' );
define( 'LOGGED_IN_KEY',    '2mklzR88qzL=hZOizf<m~k#F06V{BS:dqGZ/$FPXZ)iB+hQYLr/.}~)EVDU+BER^' );
define( 'NONCE_KEY',        '`<`p9IP:7jVCFFFZ8Lgdu_6Ui+7<Ko2[YfX}>t-sIpdWG5adunIG[56AQ>=!2)<g' );
define( 'AUTH_SALT',        '(Pr $N#(xQ/6LdEU=8n/{uhj}<^B/wt-L%9HU)yssC-<}HzmH~7!.UKu_w}(H..2' );
define( 'SECURE_AUTH_SALT', 'GhJW0 bOdh},m/68TTd|B:L&N]*WR9B[Ip3@CluLhvM1KnF~& T$XzDg$$G7mj>5' );
define( 'LOGGED_IN_SALT',   'b:8~ru-tl+y+$);sDd:r[j]yaEl}$li4EVhMxzH Jb((1+Y l9S!>|L6l_IbV*St' );
define( 'NONCE_SALT',       'H/]fO7{o,O6:GSozygN5NAN*@m$#M8P3%M c{PJN6brx2$l$&a+5V12|*I1BB-fH' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
