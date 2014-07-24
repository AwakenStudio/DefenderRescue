<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'A935421_Defender_WP');

/** MySQL database username */
define('DB_USER', 'A935421_wp421');

/** MySQL database password */
define('DB_PASSWORD', '9Qw0sLInqxds');

/** MySQL hostname */
define('DB_HOST', 'mysql1403.ixwebhosting.com');

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
define('AUTH_KEY',         '3L*s0dTG%-2l!@[cWgt-(E{1N``3-or`Dvc_G+1=E`s#G+| `~qK_]Vm3^NU3UU6');
define('SECURE_AUTH_KEY',  'hY4SK`%4z2c0,V-rUr}tG.^/@aO.KEAnBj~qSA+4)fqa$*g-j_~|hHTztq!T8+<O');
define('LOGGED_IN_KEY',    'ytYS$4`edj7eGCy_e4%El>|T$6%wm+5)p(#>hW+#&d<$YlciAFGl}7+-Xv2sFi6-');
define('NONCE_KEY',        ';Gxe3~CPH7^q(5~rbnJ,oER-d22$qrn%b>%&wp.cw+7)c&D-rZY>d>ws)r/<s6#p');
define('AUTH_SALT',        'ul`,6+22,d]hAVjA7!!]eNkSA[0`X|K L9ggTDLJr]JU1*?wJf]+b6L)es%tG!*V');
define('SECURE_AUTH_SALT', 'B|Hcp  j@[Ry*y&W~oCXD5F_k{5r?bwV/`7~@NQCvuZ.7!D};5Hc1$SEW,Qt|*,u');
define('LOGGED_IN_SALT',   'uK`+:%{sAksh5W!;b[-`JRuB8r!*vemn+r`4{:td99hi|$Hg!|$Nv=:|L-eEm3B ');
define('NONCE_SALT',       '^x:m*XA#zrYkZ~mn#|*C)8GA6JhcD+tnh|D lq0NguNIe 9h>{lo[cJ-r0bOo$kV');

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
