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
define('DB_NAME', 'learningwp');

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
define('AUTH_KEY',         'Nx/5lNu,&3=m}Egx=GXfOslxb?3K(t98(`1I{K!IQ}y+[R~DYLr.i~rJ+1K5gf:%');
define('SECURE_AUTH_KEY',  '1!xnhZs[|Y.#^#V @Cv$jh+Lbvd*F `s+{d7F@q_y]{>xGTV*h y YGZH=)/Y~ (');
define('LOGGED_IN_KEY',    ' v_tD@9K5jt0=<=pV`4/J>|v[u$96UO `hd=]K#)?=%A=(*(rc Mb.56>:u=U[vA');
define('NONCE_KEY',        ')Pb]-J+jA~i+`zsL3TkM},:lHs)s*Q$j6E3qOHxEq]W_4QzpsqP3-+5Go ;OPOgZ');
define('AUTH_SALT',        '?A5dv/1AXjseZRHwtP!yD|=w3rvti:G@<$qiS6rz8nw.4~QmB@BXK~W#:kQW+qrT');
define('SECURE_AUTH_SALT', '7>KJA_OSQ`+ckA6t~`qZ0JtQ{SOWw9<[rxu3NG7@?}ANgOR0ISbW8T7qVi,PHRnr');
define('LOGGED_IN_SALT',   'I_K,ivb@|hAO%plZp`De?},vu}$4DfaC,TwqR:1kwRKhlGroL8w(M2P{ktSFf~;*');
define('NONCE_SALT',       '+9Z3/B96cL?UI~>;d|WrRE:OJ>R6rseKh^aaAow.uW6@+w~]?WFIXwYg7fNXeZ1,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_25w';

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
