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
define( 'DB_NAME', 'jonogonerbangladesh' );

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
define( 'AUTH_KEY',         'pOmoQ!txdf<#m5&D4dnhkqojN#IYyi(/&J^>1soiE4}g;kT{f&4&X;d^P:F+>d-(' );
define( 'SECURE_AUTH_KEY',  'qVoBc[fznt:O4GUMthm>vT-6!a{%cC:_9#4yL/u?G}3g 7cao8t+FESMY,)|!bj^' );
define( 'LOGGED_IN_KEY',    'kSRqZF-[.`#&0&T}BOLR^`l:]/<|9n^EIQ}v Xo>}sX1:QEW(nmO{hOBJ0+?cGea' );
define( 'NONCE_KEY',        'A [m5@_$[$c!;]Dg_5Z[2dD0YJfP1)*(elQ*A)^Fw3wi.K|-N8:#c>S%lLD%cDJ|' );
define( 'AUTH_SALT',        '<=/G~Sn@i(qY/2pz}v8QFQ$HQ*Z}a3+&_Vhu/n1[hHy-C3ZTqBPn`y7CFnFl:?%v' );
define( 'SECURE_AUTH_SALT', ']T-U-5h$qF@ gVlh4],GL~N:)!3n:.rB^ W}~>`<Fx`Ynqo-xYps9@lqWCV{~Z}c' );
define( 'LOGGED_IN_SALT',   'NP}v]I&f<tKL_D[7}}wQPV([Awt^ZUrZ-8oG@]:Cbm? }}0&yJEb?}TrxMVW71!T' );
define( 'NONCE_SALT',       'f21Y#ZjQ!t;kdlq%e)wRS?PAbelnK!XM>6;J]sVUyUAShqDfGx5H,oloZIuj1TJ5' );

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
