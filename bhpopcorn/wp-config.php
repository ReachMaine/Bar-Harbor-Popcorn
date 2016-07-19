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
define('DB_NAME', 'woopop');

/** MySQL database username */
define('DB_USER', 'woopop');

/** MySQL database password */
define('DB_PASSWORD', 'e9F79uzb!');

/** MySQL hostname */
define('DB_HOST', 'woopop.db.10997196.hostedresource.com');

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
define('AUTH_KEY',         '9oigrvv30c9nplxynbjr4dbbiswuxoguyblp778kgz3nfba7wwapjtai54dmndjs');
define('SECURE_AUTH_KEY',  's5mem3tzkpgaptfmq1dixtnxm2uxkvecrkjdxsi6zfysdn4zh2cluhuaxlwgskmv');
define('LOGGED_IN_KEY',    '5puugiv2vci3iko2g2jjbbdhnknpbgzri4yhzxwhmfzpnx64yfhnzbvprz6xhe3g');
define('NONCE_KEY',        'roseonin0wrwhwd5hk0imzapens9q5lit21kvyxoucmykgq98tomwunnpjs0rd9w');
define('AUTH_SALT',        'fulnbcoj1vqaf9vu8jbehoxjzb6pqqbno7smqxbm8prl9ma3n7g3syqsyv3lqqko');
define('SECURE_AUTH_SALT', 'jybhus4210qrev9bsrizcf62gespo7mjjmbxrbpzzkz5dxbcuvcat8xubk2hmjlx');
define('LOGGED_IN_SALT',   'illz9y8oayhuvj19rmc6h4l9cykjhavhjijkjty4perxckmioynbqoadffuvdjwp');
define('NONCE_SALT',       'uh3ofg2rwjsnzeqt7vrhj6trfve6k1qvrfjv3gkp9qfoi3rn9omzzflisthdwkor');

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
