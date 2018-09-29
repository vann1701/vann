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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'usbw');

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
define('AUTH_KEY',         'LE?+?km34jDMi)>iW%4HajTN3~d`y?tUIO`;?$G=4).vcGpV3SM;M94y/n6[BZb3');
define('SECURE_AUTH_KEY',  'y_Usa0+YlY~ds~:q0v<0YnI},aA/ WD44H9;#:<x1xmbs$ 8&B^EoA;8f>9NOEq8');
define('LOGGED_IN_KEY',    '~R<w9 OD}_*M{d(wb^?]K*E=;C:E5)pvd:W7/Looi_k|fJMw8D>2LNK5#^LW`v*F');
define('NONCE_KEY',        '`[WfxO|[B>G,*=~K&2hepIt,EjjSg_J{wbT@%l[g%L $b:Z-[;gkI6&Dm:3S,~/m');
define('AUTH_SALT',        '9tcw;P`wXjz#&7(lwq#Qa%[vPwRAXpfP!%4DVda}2~|z2W4EwRmg*&j+-O #(3{s');
define('SECURE_AUTH_SALT', '_t.1v{U-[(At|,lEgo=A$R51^}*B+B8[UtriM30h7GS!-TRm:K^SdP_jqvHtE*&#');
define('LOGGED_IN_SALT',   'GmzF)eC[`b+oL, Sv=NJ/]s4e9gNf?25]mt^hVG!AKwXj[x7B*C=)])g_1NSC0wX');
define('NONCE_SALT',       'oJl0n`?SOMgae[F-[49o0m{-C 3LQqi9B8P7g}1H1eVeOs%?:6Nw8H(n6@1>qGve');

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
