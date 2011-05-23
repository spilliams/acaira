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
define('DB_NAME', 'acaira');

/** MySQL database username */
define('DB_USER', 'wp_acaira');

/** MySQL database password */
define('DB_PASSWORD', 'bUelq39bJ2kL');

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
define('AUTH_KEY',         'tJwdO1+;,46k3z]u]lE.U=t&GH-gJ51|hjKXiE-i+]>;Sd|8cSSkD;Lkh(50O4-g');
define('SECURE_AUTH_KEY',  'C47eQfnHLO&+_m&++wM]L-yaUN%l:@h y#vqJ1}u)jqw EV&$x+f{qCw&#kQkf$X');
define('LOGGED_IN_KEY',    '~g20.q&W: &MY<6@|YuA9![%L&;+T4IgP-&;P/c;xPRH*8NbHS|~-PX ZioE}PW0');
define('NONCE_KEY',        '>5chY<-!%C;:}>lcc )V@T8 7|^(|Svxw3@k)<5{V|h#kS^pP/?c#A]L2~OF(3F]');
define('AUTH_SALT',        'f:)~@00#M8ok^7#NKn2+u$?zcn}<zmkKFM0r![EUY+ l~&9IiDMv~TS;^@i+O{h|');
define('SECURE_AUTH_SALT', 'A~]EOrs]W)^]yyI[r /fq+>MLn(|2+;g3qta~wA#ND|&t-#r{Na2Omm6-+)v8fXG');
define('LOGGED_IN_SALT',   '%G0M}%nyvvvexOr-A{@9LKz7}olPIT>SH~S/tCFQ*-rx~VFTXJt3viB _Gky,1`u');
define('NONCE_SALT',       '_&6G@C9e?SaQiidhE<fY-tU`:dRWA_vr?<xY1^{4U*1{cTMLu}_Aj%-5T@C]y-y+');

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
