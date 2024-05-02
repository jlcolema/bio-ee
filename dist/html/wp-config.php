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
//define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/academic/www/bioee/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'bioee');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'm+n,I-i.cZPqyl|j~dN1c;p9stdFwBMX3)N4[#&M0;dzAB;vEN,tCS![nf=eiV=u');
define('SECURE_AUTH_KEY',  '@cmc38@tP*:y9!X[ZAb-W#bwx6=?v9riTD;LH 6n30>F}XAA5~=_bIZ>MMMR,LT@');
define('LOGGED_IN_KEY',    'Y^_?hdPb0ujW>v9vji`L#ldxi{]mURTlX3M~naM] B[~.Yt4stKwqO<kBERSv!)|');
define('NONCE_KEY',        'W_tGU6.nvZ>(q9OpN5Cfca:6%:!(tGV`n14^FRupp1_kwka~$_m1UR!0}_yj1x}k');
define('AUTH_SALT',        'J#|R6&e E`3Q^%HRh~wsJae&$l.gqjBL~F]>nnF3Gbe$DbB:ByUIZO1t{]Z k.;4');
define('SECURE_AUTH_SALT', 'h@C!oMrf02L&tTu`g1V/}yA$I@_6&Ee%um8Uf,pqCHggZn;RqzZ[N1dtTlRr)wHY');
define('LOGGED_IN_SALT',   '_T8.n1sU6h!1g|Cji;%0L>U^;umjohp7_PybU3c|,c# gR]|z+o$lRB1(_d5:pvu');
define('NONCE_SALT',       'KLAvxq,Bjc:&Y/3{Jze^0{ygm TtFW?ppv,P/O=}AP]S*J*E:^ivR4|`8]*Rs <?');

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
