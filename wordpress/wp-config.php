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
define( 'DB_NAME', 'brightr_brigh' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!EkDo+_2un%tPsEc}VmTRS7`1`32=tv^)q~Ifx:wry,Q>~!3UrXds MA&t[@kiE)' );
define( 'SECURE_AUTH_KEY',  'R/1dsp0D~!$FC*CgNNDm^@0`92.TgNchuz iSi=y[GuWg^YK10 IEd;_#abC7&hW' );
define( 'LOGGED_IN_KEY',    'e_E<16$A}QMnvWd.E2aoJ!>G-Lh<DZ:CiZ1^L8%_NS(:[N`x,9c2sVabPlc9394F' );
define( 'NONCE_KEY',        'PGF5-i7GFn0xIq2T;z&Iq@x iC5>w`Y{o#W4&_A/w%,he!:Q^7%U#>PUYQR0eiT1' );
define( 'AUTH_SALT',        'b|!#-VVZxP*6<1V]6d;w=Y9#4HQ=y6kR!~nc (pwPt0S=^2@XsI}0UGc8e6W{DR3' );
define( 'SECURE_AUTH_SALT', '>;uEh;MnYKI--r#qXz:[6,$N1sVDR+)gUBy> cDX#i!hZT6aOmZtt@y]~YtnbE9v' );
define( 'LOGGED_IN_SALT',   '}E[%?-=N{r{uqsA{@w ];}@^k*P?b3Yk$PVp-1oE2Is7r)fzEJ!O+0Xj5*$b4No(' );
define( 'NONCE_SALT',       '<U{ubJnUd5V}2=qVT9-Zue2yL6< 4@rm<>a|AWi4<s;taDX{WC((Od4{ oG.1~&O' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bg_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

