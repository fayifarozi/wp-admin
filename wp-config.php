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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_blog' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '+*=dsIi(IH9xm5 pp68^.r!>+dHJo_3lbxc]quy&4 =U<2L=ZP1uqI$dS>J$@]?Y' );
define( 'SECURE_AUTH_KEY',  'NhUXop(FehZ}a?[yj@H=aG6c2YS/{oow48|<,b^.eO?WotP)2L@] n:VHjL:eT%J' );
define( 'LOGGED_IN_KEY',    'bMv$k!bORDjXE+U= 58$nue}%sBT9(%Bj7 i~|2^VxF<O /2bu0&1DL5$m/UxP,p' );
define( 'NONCE_KEY',        'aI?=-Ieel}whvo$~}W7zvZ]&nfw#crPRY7:I`{~U]muvce!)IWWL&md3f9ymwQ-o' );
define( 'AUTH_SALT',        '_jJ;#mY;:CzA6A/f>7oE[khT$)1}yaq.MX7>p,K{oVS`K*4o#X:N@=,bcX[/CEQ|' );
define( 'SECURE_AUTH_SALT', '[+Bv0NYfPH>[$5`-yAJpmiu>3GP4<#d?3}&<|2+TuvT2Nc xsh##x})yDbnf@{}-' );
define( 'LOGGED_IN_SALT',   'D{BI<Rr:]`9`Fo ^$Ry*7(rEgF}*8G.Hwc5;95w}X6_m{kas t[`bs&3LCN=k0c/' );
define( 'NONCE_SALT',       'd58.7#IDO A{mOAIxe6,+$51C~#+:hZHw$=DO[jiP#mayP.dbDH>fO(l~=?s:[[`' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
