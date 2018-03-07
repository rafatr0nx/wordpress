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
define('DB_NAME', 'wordpress_bd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'u%^)#1}giu#Gjzj}+LU&/iughD^Jmr{y+-(/ J%SCH/6_H%Fn5Ro^5aMj.4PN/eZ');
define('SECURE_AUTH_KEY',  'B`nn@(D=H#*U+K=D-j<.>`H<o]C2;TQ%]mR4.ieSG|L4r[4EUJq?:vF>u}(1rr@V');
define('LOGGED_IN_KEY',    'A%/&$bd`?Vk{.>u<@p9_(MIF(4>KE9gOs@*o2U9^7;:]~FY?)mv~muLXw,XR_*9e');
define('NONCE_KEY',        '3HB4]|F^MB}2%vd%SoX0Rp7JMQb|2$9Bm7ipG!$GK_+L`vDnU0{<op:u#t$d/pe)');
define('AUTH_SALT',        'ey*Xoi$&Tb+-xlS:}Qmv.-;9[4bnI<WS2> 8nY+f&wHRF.}^_CBC]<$j[qx<|7D~');
define('SECURE_AUTH_SALT', '-Ih,1&|RTU9a?*@vIwHoY`.aW<+ZRw1LMU[8OzNZ>weI<1nj]_Jl|:U={^A>GVP5');
define('LOGGED_IN_SALT',   '&=5DjhI_q[u@9:KBgR-@Wq9B:z%|2`S}Kkbm-W0o*xFa}Nu?w-7JDsX6wbfRb,}i');
define('NONCE_SALT',       'c_8X8y#|4gINu4+*b=rHyq)59!nT}S$c%$MP4 Ls-RTz<V:%Ph+K,`MrI-ezb-?1');

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
