<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rafael-wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '*oL5bE|>WOu#+hQtGknZI3E:ro*ss7~Tap[0~jiZY5`gk)h{9Hxs`tn1UTJQx*L>');
define('SECURE_AUTH_KEY',  'YxbTfZUix`Q4+]7(b^^2:k4ej [2xCa$;!(3f?if608z4lU1rqAVgTsFcx$:D}@&');
define('LOGGED_IN_KEY',    'n$.jJ%6Ww1l<RG;kM(8- g%{dcjy*^>t`6KV&bRH_y1e^Zp[=zurM%ch Tib>2HS');
define('NONCE_KEY',        '8M4EI(nkvo|Mr$WjJIi5hg~[Y([Iq$Z8zor*N{TYEWgoI 5?;KF`a`CRfvvnV~Bt');
define('AUTH_SALT',        'DxTULt9|j.fTe4^cKRvwA.Vd~^{C=#HY9W#COkd:j?.a[Yv7^@1FEOp-s8)*84+}');
define('SECURE_AUTH_SALT', '-}g^hYGf*JyZBd_o_H}w}Z6Ix.7KAI}iaRSa0Cl)(]Qfh1b0wW_?0=,z62jzBZ]1');
define('LOGGED_IN_SALT',   '6r}OpZ5{z[.2O)c:-!s|L06VYqLs$ ZMa;MwnI4<Gt/l4XL?TY>YIjzM w>}|aP?');
define('NONCE_SALT',       'b%{Pf{m&w|D//f@PC[sH&Q39~ZE:.=]Yh4JL<L$L5_bannBwAxh/?JG^8npi3BP=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
