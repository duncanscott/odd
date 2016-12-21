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
define('DB_NAME', 'orgyendo_wordpresse0b');

/** MySQL database username */
define('DB_USER', 'orgyendo_worde0b');

/** MySQL database password */
define('DB_PASSWORD', 'BS42a6EtPw2B');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '&|PheAK^W$&^]A|Sh!FR[zuvL_&SxwIGhZTK/I^uLRCBbC;fkJHUGz;/JuRsL)@YngQPBl{oOoOkOXodBM(xuuL<BEm}=/lyPa()-[H]?+YzWhH}SbYDLA}ck<&e_@GE');
define('SECURE_AUTH_KEY', '/fUY]l}jh&kekhcHf<NJf_kG=/bQ[gezZar%cgwhHIMm?+Bt;tBW|frP-{@BLaap;*R>Kujj=VAgtZVqh=Pe^)FxaVzySIirNHIG(-*(m=kbyNCT&X]cV;f}u}v]Zz^i');
define('LOGGED_IN_KEY', 'H%{;DBRH}g$+mdxnbruN/Rnmq?Zv_>I@tOqkt{e_||I>jUzksZ=go)y)|-|(;BT&)?;R-Fclcc=@RQ_@FxWzI}tb|GTzfvvGZJh|^?ys<i-&V)?/f+XZTgjnfr!{wmfg');
define('NONCE_KEY', 'tJkh;IVEmFZZN/a}tLB{V}{LTfaSa&lBwMAowUnBWpWAIM<-/}qGyfmZEf=mq=S]&C*Qnyo=t{^HgH&Ba;@<=OX*T&^]fH(]AhTtaa(fd;-s$}+nPnSIdT}[ei@l_Azu');
define('AUTH_SALT', 'qV|}jvITqxEH^jdRc_b@?s!_umwfbOU?$qsdE?KpvH[)VWlq?o*V%NBMouc|+r_(xzVD}tQviIJr-zWq@Fn/d@]v@ip@REylOwY@|mM-(fvlyzW$@vi_tnZs-cEA!{@n');
define('SECURE_AUTH_SALT', ';ru[(O_]cf{YHZ&$d|}QS-IsyKol+G{xTleo/?I_|$$|QM<?ST$m|QRIDuDxOYgNfJj==%PZS!U[Mb^]j{Y;bp]jzVQ{[IF|kVdYEwSd}O)+Apd&xCmiD^Xp*Dfa*PXZ');
define('LOGGED_IN_SALT', 'bf;!y+*BuP/YQT{{Vu&d<I&J@>bZ|;Ovty<AAL^qRoE>Ig@VG*YxFx!k[VM(jryDPWxxmUey;BxV}FAMP_-}OoHpMJBAr>M>eimKY}=C|lhk]A{G<C-}]b)Td%gs|Bcn');
define('NONCE_SALT', 'YZsDPz-DYx|)F(pAeqaFy{eXJ(^>Q/*tu_-gtB<O+y@iDIsciqdEIS^rb=vDsYtMVzps)dJO?l$Wk/d{zx@>>Es)=Mvv/t|}B(u(hUJ-?O+BNBkeKoTB(zRtxyf-baLQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wuur_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
