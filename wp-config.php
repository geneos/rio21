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
define('DB_NAME', 'rio21');

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
define('AUTH_KEY',         '^/m<;qz(jDp*Fi$`BV7!^Aav3T^Mx$b!TslfcKxbkh+_8:2kox<EbzI7t]/=xRES');
define('SECURE_AUTH_KEY',  ')@K_dE}<7ohxErSyhZE^Ev#7+Nx2fJ_=FjKG`QGa6Dtg,^[OmC%SQqz2-E7LLC7V');
define('LOGGED_IN_KEY',    'yp~AMsa1O8eU^vvs:u`iGyt?`z.trF@ YCM^g:OEY]G6]Dx]Gg 15}/-g;W2>t/R');
define('NONCE_KEY',        '+$$S4jc0nG9.yvqE{ozFf)L.b/:(0=YB1J)[]P$kGJp*TJa2+`6V9QnLM*zqHpE>');
define('AUTH_SALT',        'oxS!]iDl%4=HWwQ%q;>JUyAW&IMe,4, JLt*{LB{t^Sz>)c?*G_EPErs`mtyo<-K');
define('SECURE_AUTH_SALT', ':D ,im=wVZ%6lt@(Q7@Q!x _Akp2gEKqMDIT^vD3|x{UBZlo=WkRlY)xB1&9x]9_');
define('LOGGED_IN_SALT',   'wdAn`R!a1y^$-wzAL*6u^s|X?Nst^J]a|%aN8)B-$,r,@u)8I]S_cRDl]ZC{gMCM');
define('NONCE_SALT',       'Jw} i%%=42c8_bf2m4bh*PG}C:BB~ze-@y`]<qj!2u1YhVky<+wOc>|Aj:BKPyt&');

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
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'rio21.net.coop');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Multisitio */
define( 'WP_ALLOW_MULTISITE', true );
