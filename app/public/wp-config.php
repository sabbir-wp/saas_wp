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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'q+eZ1MhVEV^@}w>nV/ze#C0, Z.<#8mZ~KTds+Bi*=t7f=9UM410jDEhwf8a}c4}' );
define( 'SECURE_AUTH_KEY',   'QlO?~#BkVdBkaq_v5~gVOWNy>Q(c(TmGK_gl%/[).<*h|(MwJBTJ,~<Q??I2Ki_!' );
define( 'LOGGED_IN_KEY',     '8}s6[pD-z1^Uvls5mFCpoK/832d^S n26%Sv S->PrV;D<fb2O>OoEIm{ZW5=1.N' );
define( 'NONCE_KEY',         '!Vi*Cht:Ej9X7M<3kG>mKW/-q3?VmVBN?ius=mSnEiOb/%?tN`/#8xk9&5a13mBk' );
define( 'AUTH_SALT',         'C2o%x%L+QrX1eYKr[JC50 Xm7SLHv^CX~>IU4%un8/>FsA[I$mceEdBB_:crQ{ys' );
define( 'SECURE_AUTH_SALT',  '=a.kAz`N%WD@J)duEZ4~@B+{iHTweWT}iA8$rDwhaG/]upOwg_%j52cc;|4{-9:z' );
define( 'LOGGED_IN_SALT',    '-5ZE/faACquZPJO:(4Hh.%[LBK, /][%SYKC#g(cDb<Q.LEg&^( n=^|sS5Umt*Z' );
define( 'NONCE_SALT',        'j`VL1b?tRKK%bBU0MEX3RS+xY>bVlr)L_7)Z#J;j.FOQovLI0}(Idi??ER8[_iiP' );
define( 'WP_CACHE_KEY_SALT', '3@qv)hFh&gQYd3iF+!b-ML1m<lv)6hu0,AW];mFC?YE:EjVwpB#u^e9|q<BBc<d~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
