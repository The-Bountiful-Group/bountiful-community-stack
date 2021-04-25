<?php

/** MySQL */
define('DB_HOST', 'db');
define('DB_NAME', $_SERVER['DB_NAME']);
define('DB_USER', 'root');
define('DB_PASSWORD', $_SERVER['DB_PASS']);
define('DB_COLLATE', '');
define('DB_CHARSET', 'utf8');

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5aYd+p/ @ZdjIJA=8Y1ubtqE)4g+?p vgZ/i(FQ|]Xul,Ix#/N!+zc/Oci02@qCZ');
define('SECURE_AUTH_KEY',  'F~#ZHB,Cy9rA.[HPL@W&qeGEgLR^M$=B$KCrKOsQQrsI~P9-ud!|^-NI0+SaDS:n');
define('LOGGED_IN_KEY',    'xO+5BS^Pfym~@_*q.Tu.U_d(n9w<qPm7N:%`Ncs N!ga,55|MbEZo[t5}0Y8#jE`');
define('NONCE_KEY',        's~x_Bt(@C?h4=/k4_E|q)+*&h+:We@=79S6]I`L4q>d|9TjE$VMbY_A1 +)?|O}3');
define('AUTH_SALT',        '(y*!KGOfg[,-z^9TjU5IHml19@nfMPNIJ Uy]O.}+bOMd}W%WJqR(f={hSIUI+Dk');
define('SECURE_AUTH_SALT', 'b-5/D9~(WB8Tb4vf?uO0.n1AWHZYc>(y/WV#>^AN%$6hG@kqyavSjzsxn s{5Ti*');
define('LOGGED_IN_SALT',   '|mCh7g5%?QXNO@W7+}8;qX,$gHC-wXHM{o0K}|Y4WEo$h7,42-#@v!mD!yMe$uwv');
define('NONCE_SALT',       'RL?`G2w)(:w^VXc>gA^v7 W@P@J%_o>.DV5>S>+mcxlyXxoW-f+qaK9OIG]6z>_y');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
$wp_debug = isset($_SERVER['DEBUG']) && $_SERVER['DEBUG'] == '1';
define('WP_DEBUG', $wp_debug);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
