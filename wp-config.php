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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Kg,!XvaDi12pwI<Cn@;d@[:*8cf;KLNs)WOf=HI77&G&+4%q]ZOylAoOa*PcLRr{' );
define( 'SECURE_AUTH_KEY',  'Aum2+3CVq W/9R0aVvJvo=PnGPoF$H?g?}U{C4hYED#-UP5f;<HrL9t^9v(,p09W' );
define( 'LOGGED_IN_KEY',    '~Z#&^_s*K|*,+&vRKJ=ya}E?(ko!9rodc`#O/IcL-~O^H$A8? k,%Az?!Ta{%FRY' );
define( 'NONCE_KEY',        '4eW{~R e#%6(~VdE<OxR?*f+^2-_B=W*C`mEq$msZ]M/+5]K0fSpVJy:#>UpUaUa' );
define( 'AUTH_SALT',        'cY^*%SLHc#= Kh]pd8kIVq yfIOU@A~CePgTN]z<MGEw]xS3bPVsgkC+>c}R2Pcw' );
define( 'SECURE_AUTH_SALT', ';VMzKJOZ++Y7QH>/&lBBit((<3}LQOdz~f`s90n}DZoBAEyTr(qMp;;>8wJX,a/g' );
define( 'LOGGED_IN_SALT',   'u4O3j%Ky?akQSmXoxw`ZyiSCY1MW*xc_$]34JCNHhiBMB@{ZwJ9[ExPg_MI,EP>y' );
define( 'NONCE_SALT',       'BN6-y;2Rn&Q+T4!E/K=!UonQKB!#vCjSuM,Ar#Xw%ZW%c@+-O {|4=ZSc o&uN`Q' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
