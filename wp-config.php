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
define('DB_NAME', 'itcubix');

/** MySQL database username */
define('DB_USER', 'itcubix');

/** MySQL database password */
define('DB_PASSWORD', 'itcubix123');

/** MySQL hostname */
define('DB_HOST', 'danimsoftcom.ipagemysql.com');

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
define('AUTH_KEY',         'aBr7=UhGThNR,Oo:8xkXZVG}zxHN?]%gV0X_/u7v(&<u.`W,3LCh0k KzO]H^WE8');
define('SECURE_AUTH_KEY',  '*51K1wC?3uw[vIyI(812`0U-$G_9D!I!J/}44ty%swJ&ibPRJGI4Y,o+YI|hT#7$');
define('LOGGED_IN_KEY',    '{tGcWo7%1}j3&If!,D:.@Pm[>Hh4T2.as*ZN$4N[~jB-2 uony4quTWB]5;&Ebn1');
define('NONCE_KEY',        'z)g8)k.kM`U:Xf#jhsKI-uyXX[3W+#9@k@Z{{qMr9P9;8rGe7y}7IJJA;l1XFFpk');
define('AUTH_SALT',        'B:`6s1 0JZ)?@_Wb_[]F24LfCF;ud1Uc(?)q9b=pDyZZv4?S$qvDchp6`+@05.lz');
define('SECURE_AUTH_SALT', '*LFo|8hm=>.O$p:y3O(/JXb0b`w[BRJHGX!Y8L_,?O &{.y3J!P9wrhN7)oo-Rv;');
define('LOGGED_IN_SALT',   '^qtt;mMc srM?_m#zpP$8*gxC.KWrNeW rwb#_}R9wt^1FdAVyn-kV}xgEB8`!&R');
define('NONCE_SALT',       'sf_tl3p0pCC{x$Ih-,K=Z:y,Cb4NFcF|%xo#af/8/CFD3b`:Ws-}+BS2b YQ1=Ji');

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
