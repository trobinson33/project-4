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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY', 't0nty^N*J~j9GJNq9P!sluU@[1aNf[%),n!$1JQnyYt$$~5IN|qImB2]yGx.n!*T');
define('SECURE_AUTH_KEY', 'D^}HN{,73yodA~6+@!To^gNnZc%,_F#(7K{bTCv~`skK+u(^J3ZRhyyHR8U+Rj0z');
define('LOGGED_IN_KEY', 'oet!N&[7eN^kjODd.1y|7v_w4gKrX#]zgf]%cFU&EqGU6WiD6Re3V]%Hvpt@_yhJ');
define('NONCE_KEY', 'ZIvV[1!`nfW31DDSQsWC`U0eL~SC+$%p])bWZ9saqWnCr9y@hf=#xiA0kr9M#vxD');
define('AUTH_SALT', '|^{t3kaJ@Nm9vF(G3}5n0wk[qjsai9l$|u)F_g9rY*@r-NabW2(k]0j)2HB3OvIR');
define('SECURE_AUTH_SALT', 'J{{zxKr,CFvc=kn8pk0,p!byaPSm+%qyC9RRk1c2GbknZL^aI1L]3I(.t|C&c8sw');
define('LOGGED_IN_SALT', 'CFo`KOxkg{9S}qo^d1OOsbSQ3udl42vz1ie2nIdeDv51e~n9qc8q*}BPaeV!lV|}');
define('NONCE_SALT', '|55~s..fA1KEp}ZYb&5p6$$(IT^(#aJX6#v4)Jk#H~4JJUs4s&Pp!zkYCIA`rwT!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'djn_';

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

