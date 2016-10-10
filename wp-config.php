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
define('DB_NAME', 'wp_meraki');

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
define('AUTH_KEY',         '_?>kWn8_3, 86].6^J.iln8dYFv=ZVDWBG0C`@=B+m~6`W=FhuOSt98)8&GS1X|J');
define('SECURE_AUTH_KEY',  'S4KWP~5w (t,h/YF34D+C!W@+eBOt=(.N#0.SzRUYQ$Aow|v$lF%erT,C7;eu{Ba');
define('LOGGED_IN_KEY',    'e~8+;@k$.qiaMT]If{DAfwil!yk:@OP4,I~CF#JwB=q=$b(*f:E!zP*wzJTH<WM^');
define('NONCE_KEY',        '140Q0(mDt]mU-gs38/`&uOM|{,m!&yL?zC7R`K2B`g&l)LPfr<@5N}9h7e=j__ib');
define('AUTH_SALT',        '{UuAO)[Ye:v(>_1+|Ch`AK%SV;b9GS(>MCYSU.z[#p~nH02Jb_RQtbO,0[Dgq}?%');
define('SECURE_AUTH_SALT', 'Yge[RmY8(zjlmAQ)6-sI?!_r!m3tgJ8606[KNm_$tOnA!&YMmVHECNF=Mv  U[FS');
define('LOGGED_IN_SALT',   '-g8s:^w!<rC&Rq?NjUp=$D{PX2~YN|nBIAt+c/5zsd@pXkWBG7Aa].jW}E*RiirU');
define('NONCE_SALT',       'dr*w ; @2z.0ReB<8|s,bw9ML/JWa))h_Zv{#xc$QQ:Bi,kH#RPBRl.2Mu,to 9Z');

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
