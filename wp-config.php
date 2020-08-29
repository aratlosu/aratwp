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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'r@[n$DAwax3c?rnt+ddYcj}l}]}a8^Y,JW[`m%+6_}od_0y9LjhJpQq{J?qM-00G' );
define( 'SECURE_AUTH_KEY',  '}].9D2nw9Ut~(839?Efn| B;/_Y`SGtZF?fPaBK{ (0+EF5W#}nY_AMy;E/8zJ`%' );
define( 'LOGGED_IN_KEY',    'i,1]4t33`7*@|I6d,W)M5;eb>BW4^N/ZD5[9uAF%dvZ.V2&fv>R1tp}7+:]]@CS(' );
define( 'NONCE_KEY',        'vI#p!_<f-+s2(BNuV5~yG$k&9d?#9dzLg_Dickx`m5ql:Hp&[a!wkH&=@4=`+:52' );
define( 'AUTH_SALT',        'G+ucc7biZb:gKe[]n3(U|8MP$TUIGtcjhr&X{gEp@w3m g,|Dz*t|djd2BMmr]Pq' );
define( 'SECURE_AUTH_SALT', ']f|COxqNGhe7MI{g8L[^R?YqZ4dNu]q5Wd1P,G@.*{s@8U]z)$TrLQ%T:mITQi)K' );
define( 'LOGGED_IN_SALT',   'AL^M/:>7[=HYUP!nbx#S)~ltz.[D7`3t9+/EiN,b>wK)UH2#*uC_-.`},?b;-=;V' );
define( 'NONCE_SALT',       'AbG]sD|dj8,8P~g1IE},#@#.8,ZA&jcjWRhv5KN0<k){p]M}:Fr_[5(R~JfpBQEx' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
