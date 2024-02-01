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
define( 'DB_NAME', 'provider_wp141' );

/** Database username */
define( 'DB_USER', 'provider_wp141' );

/** Database password */
define( 'DB_PASSWORD', 'L)9!xSp96l' );

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
define( 'AUTH_KEY',         'oitxysbdb2vcorebglsa8cvh1ghqb0ps9tzcv9vfsiesrvo8ridveg0vnfkbym6b' );
define( 'SECURE_AUTH_KEY',  '2ywzgvtr4wxhkh87jk7xnf9epquwogc9paullohwdfetxkrjoalkzr9utdjjiyou' );
define( 'LOGGED_IN_KEY',    'utv2gmzzhg0pp1wpuanajry6gsxuwcswks2999bov2ihjqqrfanez1w2aoriathw' );
define( 'NONCE_KEY',        '7m4kd6yn417s1dkdfofrnspwalew0lmmgkexsndzbyuvzavwsdvnqecf1uebwayk' );
define( 'AUTH_SALT',        'dz6db9oqrsjdjfowpsdciglpyyarpnabpq5dptsbckztywn0wwdlmnv8blnx9uwh' );
define( 'SECURE_AUTH_SALT', 'kknj3qzompip7rxqkqt76g85hngcnxoqc6ppxklrzd5jwafrr1j681perdqxtrcq' );
define( 'LOGGED_IN_SALT',   'tacprtxq5ykcd3qrqbivzjedmzhhvds559mif7qhfakoapfdsyqeqbbyx6q0krfr' );
define( 'NONCE_SALT',       'aoecst3f48tbv8wgxya76onjxogmrdahdanhzryjhobgeny4kpqtvy2j8haru3ra' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvh_';

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
