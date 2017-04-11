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
define('DB_NAME', 'learningmandarin');

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
define('AUTH_KEY',         '#CDQp#* Wj/%1}:{+c;e<ks|8saWIL9JL`Kz`.R1`t++sj^%eae0=ZBn({[,.nwQ');
define('SECURE_AUTH_KEY',  'e#]zB[)D?J84g5iTP4|v~HY*3(cBU&I,kOV_m[!7!hcXw3x!B<y29$_w @+Vu$=j');
define('LOGGED_IN_KEY',    'q{O|y_::%7)x[{kv9PH}v]&oSP%Fq/D FQXd%9f_&AN5U:u,9?5x?!8]oFGsfA5g');
define('NONCE_KEY',        '!_9Y):-sPc/}^mT`y])Dh,LS=e@w@CpC<)jCfNNMKl =4&D qyzUT+ZJ`Rp(@.=S');
define('AUTH_SALT',        's >BND?;d{<bBgS)@7OZ`gvqO#yebdmdQzXb-D`k1bvnlLGDL$nlrs me52Te!@k');
define('SECURE_AUTH_SALT', '~Cfa+x&cJYr *W!ur|kET;MS>^s9Lw%;OFods5>Fa_TIz[:sm}]U*lf*x7u<Lh?J');
define('LOGGED_IN_SALT',   '3l*KtXp@Mh[cJeSk(8HfI4<aS;oNB84%#bhqgkMkqR[7a+Y?SHiH=g#>sfcf0p:p');
define('NONCE_SALT',       '5X7W_yeHk?p {]KFXYNkGivXCsYzztio?X|!}he*V762BM]I3)yv~ wuW<[v|D*C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_16473';

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
