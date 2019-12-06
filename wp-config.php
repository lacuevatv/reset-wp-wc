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
// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('DB_NAME') );
/** MySQL database username */
define('DB_USER', getenv('DB_USER') );
/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD') );
/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST') );
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|0K?vlqnc|=H6ZcxG]-B;nMOEQo~}0}:ifhu7)l@=ETR*v>Xx*F{sVs7Ke_>b--4');
	define('SECURE_AUTH_KEY',  'wQ-HAw0CT |*=lEXz_HM`TNG|cY(c8[A&:[[eXg.s:sb#_0W3J-n-ajf~iB$PFl?');
	define('LOGGED_IN_KEY',    'xC e*12a>>vJKb%C-Dahdwq-+P1 02xhV$+pmp{v6kJ~aw+ZBX,U64OZMy$[AD4C');
	define('NONCE_KEY',        'y6E/kQU&605Md+o4N}u5[6.Wf>lbu+i/3%~4j84$I!JP&zWSK?AY-}iVv:zPBQ1T');
	define('AUTH_SALT',        'WJW--6P|6c+f`/#+<.g|DOqJ=Iij#z77(`<)g~B.<;pR|p1*wOgp93@pLK8w-N|z');
	define('SECURE_AUTH_SALT', 'hQ<MD1yXh9JE8+G&{&/UAjl6 +,W^td(9;x|KYV@p9e=sg&~4s]=L!HBMZ4.k9X+');
	define('LOGGED_IN_SALT',   'O,/Z5|(KT`US,|FW<5*]ZK6W3FaH)Smno,%{m|%[a}h,%9~&s#-;Jqtz}uiD+J<$');
	define('NONCE_SALT',       'R[^3Lv[&@|aDPA)!v.8mR|HmreCUk|Yf>hyKYeu27NYDHAT7n)6a]5Yq+wQAW~SP');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = getenv('TABLE_PREFIX');
/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);
define('WP_HOME', getenv('WP_HOME') );
define('WP_SITEURL', getenv('WP_SITEURL') );

/**
 * Custom content directory.
 * 
 * Use a content directory different from the usual wp-content, so it becomes
 * easier to update WordPress versions.
 */
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/core' );
define( 'WP_CONTENT_URL', getenv('WP_HOME') . '/core' );


//desactiva el editor por defecto
define( 'DISALLOW_FILE_EDIT', true);
//quita o enumera la cantidad de revisiones guardadas, en vez de false se puede poner un número
define( 'WP_POST_REVISIONS', false );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');