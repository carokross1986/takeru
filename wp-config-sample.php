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
define('DB_HOST', 'localhost:80');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '@d({xWK@{0y]eV$-$3,QTRe6G45>oZMww]0w>sNkuf@4kp52S:{[Eb6$*IjaY8k@');
define('SECURE_AUTH_KEY',  ':2O]O~7+&@DoV(6S*|db!=^<ZT6][<C!ojFW?_TVc@#ne`-Kf,kbx>n5+z&pw`s_');
define('LOGGED_IN_KEY',    ')@i_AS{2H.x%<g`tC7B|-`UsYU7[ou1nCTvzF3dA0M+3#JY!Wq87&%K:x_;FNP+F');
define('NONCE_KEY',        'TwEM!S.;FgO:9sJ=5_7NzHOP<,^e|VJ=0?,6Wj%h)uc4r5JPL_oS{ dD@42Sj+_N');
define('AUTH_SALT',        ')8:I3o~NG]z>Iu#^l&hNEVtxF7T9vmBN+1N zC~jK|eyy+!(CGwr^:{,-H!P(Qu1');
define('SECURE_AUTH_SALT', 'mj}HHPtHcV}-_arG.W+I7eK2b!pcM[ya*1DdPD]EBgo@PU&]IH_$iMQzk]|xu<N?');
define('LOGGED_IN_SALT',   '(,?Iag#BOabp^->E#<39kno78rI?/JldJVJswt<KY7a4_mp|h[@Mbz1_E-,un`}l');
define('NONCE_SALT',       '^-8:1Ww>hMKCrpj,[-zY#(Qe+_j$jKW#M|PnhmCsC[s|UxNu.5=FH+Ohqf6`8gw?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_16473‘;

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
