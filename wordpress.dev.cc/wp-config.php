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
define('DB_NAME', 'wordpresDByheqs');

/** MySQL database username */
define('DB_USER', 'wordpresDByheqs');

/** MySQL database password */
define('DB_PASSWORD', '0shbysnhbV');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '.<ITM6;LEbTumXPme+<*qm.+2]HA].A2PHeXH9WiaxqaStm.+2]p#*5;LDrj^z03}');
define('SECURE_AUTH_KEY',  'wCVK4OGZRoVNhZw[~o!-0JCZR8VNkZwoVsk@v>6;HAXPiTLiWtm*pi*t]_6#~2]H9');
define('LOGGED_IN_KEY',    '_|-1[GC:|C40NhZJC8Rog@wgZwo|@4:zs[!80JXPme+q]*qi+2]H6#_6;LDaWH9WP');
define('NONCE_KEY',        '}8RB70NJgYvrkUQngczr>^vn,^z0>JBpld-t;#D51_-5:KH9WSD51OGdZwplWOph~');
define('AUTH_SALT',        'qp.x;HA]_6;HeWD5PlexpWtl_x;7MFYQnUMfYvn^rj^y},B3,7MBYQ7UMjbynXQ');
define('SECURE_AUTH_SALT', 'v}!HP2DqxaemPW#;x+_pxD]219_]aiLSS9Ht~hppWa]1-__]t~K199G:5hpSZA.{X');
define('LOGGED_IN_SALT',   'mE66E<;fIPPTbEHu+*iqquXei;6+.gkrRY|}0z!@,nrzFJ}487F,}YgkNUQnrzcj');
define('NONCE_SALT',       '1LW9HHO:5hpSWedlKS~#pt--_hp5DG[1quXf{36*<<u+IPT6EEI{2emPTbaiHP+.');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
