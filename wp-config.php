<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'serena' );

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
define( 'AUTH_KEY',         'xJ]j%/9rV5Z2Rk`z+m!KGOG}=A --yV=z.j&TVyGn#1qkruNC1Dds<#7C=dt0/LD' );
define( 'SECURE_AUTH_KEY',  '%b1&?Y#Pz}JE!(Glc3E2ngYuiy;dxa w|1#7(i-bn?(OgR9/-gNF5bpZqFKskd:}' );
define( 'LOGGED_IN_KEY',    'nu%`T;l>Hr(JUbFEAH41Sd#I!iK:KJl:JYp3<K-)A<s-F5wb~YslD~d@UIFG4zDO' );
define( 'NONCE_KEY',        'E/+>0Sr[zpx=do:9lMXL_VKIc[;j[w2Z++)=p%;l[ )(X(rNWVL&!9iVJ+obpF?!' );
define( 'AUTH_SALT',        'j#ab>H5J58,/$Zm<Yq7`K9v%7*r!-7VCGXM[`SBW9=D.SgIM787(u19haSk0u>o*' );
define( 'SECURE_AUTH_SALT', 'e,jS!G0)]ud)Wd+YLBLGG*_<]J|?HghOM-fZv<p]S=Z)CMig81|J0GP~rO#SxGsK' );
define( 'LOGGED_IN_SALT',   't0`)hK2 E%&hGA{/Iq+MC ~@nv!ItIYs>zz(<^ejOe{.u2|s760Y~MzX<::GL=3{' );
define( 'NONCE_SALT',       'tE[ $Lw{Y|]*dvf5nC|n<.<Y@S$i[fR$N-gNWk5vpOf9vnTCY-|@*6_vwn,n743f' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
