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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Gn;%`v0Y2n3QaA3KawbO_0%A/8sUg8P16(_TI&C%08:K{-tabrXH7|ma]>ZNb*kh' );
define( 'SECURE_AUTH_KEY',   '2$JkVJXhEQ;+tg ;b@H`>&8HT%(*)I5T_,,)%|31DV=w5a?*Wx}1CvyEKhElUnb/' );
define( 'LOGGED_IN_KEY',     '{-Oa-gG~KQVajfAQPu?*w~H,_B$~twUgOXXo->RA&pUZq(%tB(pS*mA`]r5;;;m,' );
define( 'NONCE_KEY',         ':-(Vd=F9f;aiq]P!c0wT=3](|/v:x!,Df he.RMr5dbU|I_I1,V8b|Qe%mfnuLA=' );
define( 'AUTH_SALT',         'oG21,7ni6nJI+s<dg.RcX++)E`,2hDm;#>TL|dxJO~`9cPd/jHzf(0qw[b]42g|&' );
define( 'SECURE_AUTH_SALT',  'OuC nnsG*`ndbwiZO/{{k~eX (Rbkd_nlwO:My R2N VPzbID:;xHh$tR3CnkrEC' );
define( 'LOGGED_IN_SALT',    '5xqp)1B-Oe|_qw @ZQ~$Z*N3]t@oA}/[m7W7hA/EPDK7%0wt]:rNE%.CLQA?!tFC' );
define( 'NONCE_SALT',        '5bsp)&Wg$/rYDv4o{KIC1Xe.z>DJm0w$9m#HEdQC {)UcXs6J_&> j{BuJ]edB,U' );
define( 'WP_CACHE_KEY_SALT', '2@0:S9S`m8UPG|bwFE@cvwpfWq*LE.OL}$MQ]b+ZPj`f.2+=.+_#*A@lo9$hz6?r' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
