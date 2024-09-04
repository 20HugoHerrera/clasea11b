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
define( 'DB_NAME', 'githubwp' );

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
define( 'AUTH_KEY',         '_r*AYn{RP:J+yC SpW2~TXMC~HuUaYch,z&K|(6T-(@[1/W#r<cOrh<LZ;AcR*%2' );
define( 'SECURE_AUTH_KEY',  'mkO{t}[ze%-5eVt$F*}^JoDVs^mCKR_>?1sv&M)M|SKSRX.cv:e@=<^$f9uM -;c' );
define( 'LOGGED_IN_KEY',    't4;!t8tDx&zWCVy#SL)jp#7xJmIqMV0/C>ML%3urRRbhC{a2w4=,;#*fJhIov~3Q' );
define( 'NONCE_KEY',        'zWHtUD<lqy/?*qJ&LX+`!v-iE8T7?>^Aul2ZsY4)M_KPlSUKmItWm{<A`KDK`k_7' );
define( 'AUTH_SALT',        'SLe<CTa|aZge.n1|jh5%ODt6{M:?}m_u^T 2D]3e}(4.-<bmK[yFuRO3{/<JX!f<' );
define( 'SECURE_AUTH_SALT', 'psxFHTa{#_;4-GIp%|=T{: y=Zr^e2RZ/CO_S.dQ<C~U#-j7)8h%cOA%9MEKc=>L' );
define( 'LOGGED_IN_SALT',   'ow*hf!0mMv|r/.(S)h%DrGTw=EEGGTh1-*lOn&}b.j b`C&d O>_nDbCU&wS:8T5' );
define( 'NONCE_SALT',       'g,4$gr<xF2L7D+N_82/Cz8VdP~iwy7Gdti<Q+2$QiKw.V1cvyh447M5}; [~{NPQ' );

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
