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
define('DB_NAME', 'alsiddes_idm250');

/** MySQL database username */
define('DB_USER', 'alsiddes_alex');

/** MySQL database password */
define('DB_PASSWORD', 'Carleton418');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '@9^G+gJ2ksozrXi5#S)]O{A}FykW<2NZ0i$kjR.p!0Fy(1Z=+[cs5;G[WNfCC+C:');
define('SECURE_AUTH_KEY',  'r1-R:n-/;LUrY;_.@m`&w&W:jQ6h|^dcVJCdz$Z*pdl%!v)tz+}6X|S6`nhrb>9h');
define('LOGGED_IN_KEY',    'R>fdE]_Gi});q1mG?mO h6~MgD#B7w)Y8R 60-[E-7Q9`W%xJ{a8gC{;3w]eU%,+');
define('NONCE_KEY',        'CeEk9E,vDu4T#C|I{gOB$BwzQpp#rZ%d1P/h;7Bsq<`x_P^Dd}`73.*7-/)4|6H9');
define('AUTH_SALT',        'bOm>%fA^m3,86+8a[g-X^8+Wso&%pBH@@{w+EWSf2cdJWIh[{nZN:hV^7ho$IJJZ');
define('SECURE_AUTH_SALT', '*S`r|;Wo^G(h0fWo_6Rj.g!s;csD1L~gG)G5,:DinncYNu}=G(m*{|plL:<hOD;#');
define('LOGGED_IN_SALT',   '?Dw#5eOR.P*X]<>_2aQEeKBGh#!x0&mPFTmh3Pm[:E:#/Q0cEy,&#nN1}ee?C&u0');
define('NONCE_SALT',       'iBpMl,dpF|O`H_|xQi%-If!Ug}QSZxo/Y;~F0z=b<o-UolmzwJ<}(-<)!2.U;z:%');

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
