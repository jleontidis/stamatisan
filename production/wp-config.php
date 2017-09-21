<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'stamatisan');

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
define('AUTH_KEY',         'ziz1TK(?+^08H3d|ge4~+)7@ehdvxm@P;}_|[d0ar%+b(~^LQ%C/VyaM-?fxvndq');
define('SECURE_AUTH_KEY',  'wc;Pp-.B -b`wcW9c+nTq[-64={EQ,aS&uIAtmEO U?q0^{ZxtYmEv;$H8m+OA;I');
define('LOGGED_IN_KEY',    'Unt]),dq{#/7kW%c)93V)&+8Q;|o?f3aIz#}<s;AJW~H:*- 79I})B(fzxM0d1wu');
define('NONCE_KEY',        '>+aa/*rnMu/m?lENC-gF.hm7L%y;/fiI?x!9g?,&+|OX}#d{L0dJ|w{[g+09xxyI');
define('AUTH_SALT',        'iq$,|:%UjZg7hyEh:;i1+(*41SG<*(*)x,(FfQfN85rmoiTExv-URIIiUgOCF<89');
define('SECURE_AUTH_SALT', 'm%ujnc6# PE RVAA:|FM{d&{f{)nCwu7i#zQG,6rF&um/Q%0&/+Ds.|U(zC-;;-<');
define('LOGGED_IN_SALT',   'o+?m Z;vO_Gf~{;&rHM6.>|+$?qJr5,4RO20g-_&L:]!YX2jC?J,lrdH)j~P&m|V');
define('NONCE_SALT',       '=-%+U?i9|FB-q_l7 5:nX5F,4yjSvA|qWsIU$vAk;6UW5DPqq/&F, 3<V-L-kJEC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'st_';

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
