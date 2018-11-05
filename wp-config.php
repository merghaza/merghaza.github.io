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
define('DB_NAME', 'githubwp_db');

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
define('AUTH_KEY',         '+:bO77Rss6)gEBBu-AH$]ezOnU(J&h)=]~6m0iBRy qXq*<w][jwX4_{b(sDh)Oa');
define('SECURE_AUTH_KEY',  'Y:hJ7<@I]D@CUXW-bp*.&:[T~8~%`b>=4rHiEYE<10B9nExDD1MnvEj(xz7hT5Jq');
define('LOGGED_IN_KEY',    '6_.%qT{ iS_[QzW[_s}Lh1Y}: FVW5#1hZVJiFTV;x&#{#ngf2H,$b|=sfb9/7;l');
define('NONCE_KEY',        'QEYE_`>BsdzaIldSUV&rCP8C/bv29AP]Q&,6ZqW!2iub6%@?^I$b8y_H?=;BP)kl');
define('AUTH_SALT',        '2S}]<QsDNv]!t6w(jF|GUdTS?7QHDFJi>hCIlWef6.7P?6+Zllq/vC9!jEP@!)pw');
define('SECURE_AUTH_SALT', '9h[XAD>Q9.GZ?+EO=xPLcujo-+7kd+msH3N~MI*&[O~EKAdoSI35=-10.{HKKFo`');
define('LOGGED_IN_SALT',   'KbmGX&.Kg%.9ULDb|?8(RI?~{XA)Vp{{Tj1;q~l`u<J$rW%yfM]$%_tRIZ9_$T}%');
define('NONCE_SALT',       'YWto4o-pmWkb/<Azwkle7P!L*vXnjp7QqF|qu&q6v609xC+Qe2cVZ``-k|LN%qBD');

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
