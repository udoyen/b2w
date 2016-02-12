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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'george');

/** MySQL database password */
define('DB_PASSWORD', 'george');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
 define('AUTH_KEY',         'Bz>V<SESVWk^uPje-tOLqs1y-,6_9o|/*Cfa=y8sIAE3(d7V>rH2lP4}6ar;B$K$');
 define('SECURE_AUTH_KEY',  'V:C&cof~XId*,ltas=58~>w+*=K1t,zgi[|}(z!# ;6|sH%6s-APNLTY*8U~7eM^');
 define('LOGGED_IN_KEY',    '?G;.F+|2Dva5 ]A:|,wu&a3.x;tEv<JOVMd-J12G&,l|v~@$fv,urd1f7hQ8ZM-Y');
 define('NONCE_KEY',        'm|t|;L!~!2ej2)H.(.DGFl{.Y,hXZ:9{Pp8E:8pnwl9T0ig-|aA?vTbuBXG:.ww0');
 define('AUTH_SALT',        'Q30/7,^}]X)e~{(Kr`X&~ G|#xc|I{[[d*C+tuDNgzrpsbYL|@aaVIsr?$i?+(IL');
 define('SECURE_AUTH_SALT', 'Dfkl3[mokAQV|B_F0y1VkO=3>[:*,gU0B8UWEWb|0i!)<O[;+2h9xY,4d|tDh^(1');
 define('LOGGED_IN_SALT',   'tNDiHM`DN1s@2zi{P!SY+YHv-]n+)Ak.uWM0ONE?0Wcv9FuUwI}l=&%usf &m4|}');
 define('NONCE_SALT',       '{&Pgd+(_-&7~pPlOZvdv=jWnYis%2pW2` mUYFqsSaS!B_ts[Ast&~&PS%t(snr7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gbs_';

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
