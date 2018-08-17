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
define('DB_NAME', 'mywedding');

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
define('AUTH_KEY',         'BY;T8,`v8~z,MXjPgNZC>C+wQC^>$;>)@4A|b}1Am:skB5R+v<9!h`c:{XjGRh2,');
define('SECURE_AUTH_KEY',  '>5[nk$mt~BzG[WdCL$Is(XxD3S,vv1gzzBZM%Z;!6Rv 7|7vIbPiKyV h%b(%1as');
define('LOGGED_IN_KEY',    'w=m4{>Kq1POMtx8a;[Q_]$@bmPh<:hKGZh}dx~F3,:xVXWa}!l-/EPa%_oz5vyd5');
define('NONCE_KEY',        'jbHpvnbZ8 X vH*WKs@S!KLHC:6Ou`N n]DhWsJ6QERw{cDKi{GglVsW)2$~y*%/');
define('AUTH_SALT',        'S%YDI9^%{?(aKf3uk_A!>fPBsTwWg{K(CpaDjE~~b3`c=)N]%B8_w]M*v$zzGvo7');
define('SECURE_AUTH_SALT', '$r<:hX<Lu M|U5wB#1=pFkPFwHw_~waG}@&54]u @30d` ;+`tEm7&(0na 7!_D4');
define('LOGGED_IN_SALT',   '*4Y,vR+)3}^a/be4^t0kSh.7PbhK@{9{siBKfdID %?grxA? Y*^+G5bn{Orc9/B');
define('NONCE_SALT',       '&07k[=.v25`63?,]4iLIJ,+_ya]2)0d6(!c}l-T.$h)y+vdM<nZKqbpY9c(Y<Cpj');

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
