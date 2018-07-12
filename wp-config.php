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
define('DB_NAME', 'eengroup_ushub');

/** MySQL database username */
define('DB_USER', 'eengroup_ushub');

/** MySQL database password */
define('DB_PASSWORD', 'o=L23Z=(*)!f');

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
define('AUTH_KEY',         't[SI= k|I#NoKiy:>_9]S}VL&i5_@.9OjaC2%DB 2%/m,NcIU{fF$b~:dw?Ur<Eh');
define('SECURE_AUTH_KEY',  'H9(8CP;ApyR2@hv34&(0}amAJ~:Y)/PMXuEYGM#R9fl=0UQeTRAxJvy)[TT]]28=');
define('LOGGED_IN_KEY',    '|:9If+bwWFp0QLMF=8fzly7>O4,7/pp*JA1=_MX*Op+[@`ljzGQL9z2TTX#D]U,i');
define('NONCE_KEY',        'smDch }c2rk)zX/c{BaB<RxEyLn|A9h$1C{[_`r-`pQX<UNetagCS1(VZ7~I N3:');
define('AUTH_SALT',        '-$!z]vc2XL7pe2uU`Ku6.f;<M#+I7Dj4)c!UHu>]Y~1 e,QtW1ModT7CgN3.y8mn');
define('SECURE_AUTH_SALT', '>,tU0e6 >m^4d+9b:w@F%mzZR:Z[Gx{jYGunGo!~L-x>$AUi,r&k]sB7{;9%10k;');
define('LOGGED_IN_SALT',   '2X)7%M(]LlQYfdc!12pX@{|R)(|*goEgy~eC{)+UD$`n8+-3GxG!&UrD-:[:%D)w');
define('NONCE_SALT',       'O2Xs)A>zB|)@B@Mai<|n<Zzhsr&8U ~T%-)@zXw&&%=LQ ({wuvn]<EJpx`p6q?L');

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
