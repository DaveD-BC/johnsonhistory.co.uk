<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'johnspz2_WPAH9');

/** Database username */
define('DB_USER', 'johnspz2_WPAH9');

/** Database password */
define('DB_PASSWORD', 'Ffk!f{W0)sn33t#Ea');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '400c3d45c584f9153d241d4775c2582cb653f70348086b1b0cb63fe8985d6afc');
define('SECURE_AUTH_KEY', 'b143318ececdae9961864e9633b05d039688ba7e5ac6c8324b343d128eb2d20f');
define('LOGGED_IN_KEY', 'a92c05eff1a4d6e1b0d10c368fce7d91d290c9ee2cc1a71853d95c9b61c1464c');
define('NONCE_KEY', '0efd03bdec020817b62cdf9229287d5a6d976609f206e735c3d34a831b69761f');
define('AUTH_SALT', '53f8a78e5f9603964985f079d38cfbc989731e17920c9187df7e49a66ebc8837');
define('SECURE_AUTH_SALT', '8219e164aca8584dad27ef3b5cf53815f3654c276deee66f772f5b74ad03c498');
define('LOGGED_IN_SALT', '260356caa5778607a3b8a9b05129838c38179df8352e99b579fc55ccf7a537a7');
define('NONCE_SALT', '8224c8b2416e7d3401ca26577cfa8baffd515fb27494c5d6b9b2a2283f3618ba');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'CQG_';
define('WP_CRON_LOCK_TIMEOUT', 120);
define('AUTOSAVE_INTERVAL', 300);
define('WP_POST_REVISIONS', 5);
define('EMPTY_TRASH_DAYS', 7);
define('WP_AUTO_UPDATE_CORE', true);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
