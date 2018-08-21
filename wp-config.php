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
define('DB_NAME', 'woo_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v-%[3_Sh<0Xc;}U%n3[R[C}`3ST7MZs!BNmh$2:PzQOE+9Ao{=]UdCcd1msX{E(-');
define('SECURE_AUTH_KEY',  'F|4v3<gpX83]yMkXKh[Y_:e~==YaX,iKW.Og!#3N:<tc-B[y#Y-{/9TB^MKQ}s_O');
define('LOGGED_IN_KEY',    'f[U~(GpT2t_X4L,&,Vnl:urB)4Z;,E=8i]mi7r)`q5qXL!UbuItJ#{1W)J%TFo_B');
define('NONCE_KEY',        '(Fq_-z?!}fAF~W[G),d@7#e>HYfB0=<`L4_n?6bUV%7F8}HTdKct1czVe%ym9laW');
define('AUTH_SALT',        'j`m$H&k/TBGcZ]W.:(HX/$.1Z:<ar^TNRQ%dYuo=4SZX<N8) C%?jS4xFu@ECp~C');
define('SECURE_AUTH_SALT', ';aLQqk7I~C;#+ThI;fi>IZ. {qJd1~9}jE{9+osFR;I#TZ<@6FEDkJE]GkS|[n~8');
define('LOGGED_IN_SALT',   'BA?YX&*EX4bguJ18$lYnbY~LeFz{ ny<xYW6JDDW<D8#*-F,p4c08{LubzH_>A( ');
define('NONCE_SALT',       'm.7vEAx|mfnWZ[4|7e./P?@Tf ^e85yauSPYGRpR[Va^Y.kWmcH,B *XZjfee`k/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
