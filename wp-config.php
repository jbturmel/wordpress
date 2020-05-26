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
define( 'DB_NAME', 'seconDDaire' );

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
define( 'AUTH_KEY',         'nw|nf,!O2nhtm}6#SBa80Fa,O$11E|s+NkEw!B,/QWYDNR0vSH/rN>10G|wu0[4[' );
define( 'SECURE_AUTH_KEY',  'A#}6:g2XXPtOqx0.S:KE6KvlrT3V WFt:o(,piIUI.p3pgR!zfq&mdfZKgdNo_qu' );
define( 'LOGGED_IN_KEY',    'GAcv1#oU0xO,/jo]vflv_:,{ HEe):j^8A?KSe>_t 2R:3Y96zR2H6Ds2-Da=nxW' );
define( 'NONCE_KEY',        'j]KW<lOFM#X.(Z}C|>{~lADZfS)HsOz]L^y+3.:`(~A3H4x8QQ(#CJAeg,*zL5}#' );
define( 'AUTH_SALT',        'r=twKG#ukl1Ja5AqJcXaJb2(3X7)@Hm6mC*~LwbP5UWy:<Rc8DD+IBf-],7FsNL]' );
define( 'SECURE_AUTH_SALT', '3%Pe6$Hl,+.HSJw*H+@`$g$irMFPxo5Zt-*PK$YYi&#.j-h^e*o^]H-E&fzvC?du' );
define( 'LOGGED_IN_SALT',   'tZ-IKU5vD&P|ubA_<5CW,qbLo?VdAg4g`pma|,FrJ+Rt]nB^eGW$IdyaMMq.O#&0' );
define( 'NONCE_SALT',       'sebc4?![D_k}7.!^6-)!odp&hG9C=lW*W4/eaLOwPCfE?]?ph)A?g85,~_,<cV>7' );

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
define( 'UPLOADS', 'wp-content/uploads' );
require_once ABSPATH . 'wp-settings.php';
