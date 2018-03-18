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
define('DB_NAME', 'hirepat1_wordpress4d9');

/** MySQL database username */
define('DB_USER', 'hirepat1_word4d9');

/** MySQL database password */
define('DB_PASSWORD', 'lPzUgNqaGxY6');

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
define('AUTH_KEY', 'Cb|UKIQl^_R!M|lJ|+faW%I]noK=yv_Qi?EjVCRnU}OoNFQ>^IWpDdpzPw[}=(a-ZE;umY&Cr?){Sgbd%hG@y}BK)Az)@NjxJaFHUIXbmH[-=XEmAp%)Udylmr|([N&r');
define('SECURE_AUTH_KEY', 'vWMq-u]/*Q/nEho[bUkoKle%t$gawpRWaQs;XVQVtW{q[HOGwkOg^Uy}rh^xOHoS*GjSTm|*lPJDIVSQtScysaDr|u$^UFJ)JaHyiPUGdrJZ_G!/kw=lad}$a<yo)KA@');
define('LOGGED_IN_KEY', 'PhC&^$z%+w_fg]>>;CGWesG]dObEyFol(Uv=[iV$c>_&^kmyLRx$mWJg>iTAn|d[m!Ct!r;_cDnqrCA_fM[GY|>{ZwR>LkuF&i_XRcklal!;Z_tW/ePUfnL^a^CknKR)');
define('NONCE_KEY', 'YpbXKaK]_sqW>k&By;NB_wiXrrqmm+^/wdH{(;Q!/x!lnpC(O[T*>Lj!dTUwxgPRON%T?M_;V]Lk[azw_c(isA?I}<<ZWno+PTJ@CC-;j]&R[LSaMJMYu{nkpV>bLsyt');
define('AUTH_SALT', 'up{LCtMjG*Wi>XA!HStO$;>[L(&PI[RyjM(HVsn@(OHDifR}k@>L@DP)yl<$IkQdR|VclpIG?&(AS@}ogbc!mpMwN{KlIZJ)KulF_SR&He|ccR!Y>rfq-aTfO!PI(gf&');
define('SECURE_AUTH_SALT', 'S|%We)Z]jHye^/]Vt-D+rGlt%Mzn}z%x$ojs=RbpGzBNKGu([B=Jp(HmywEofu{)ZREcFKSk=y$sFwKhno_+FT+E<NqH&HkQL/o=U;RUt+iv+mY&!DR>/;WDl-N]PU]T');
define('LOGGED_IN_SALT', 'rEk{@Bz=@|NhOlWM<mzJ^!YXJVh<cj=F=I)B}U/Qcr}E;yOGUWx++Z%tDkPd;T<)QdM-MqCuKDTpSHz$=WdiCmJj;OIb_iw+;Q*Kvr(!e@QI+c[@X_WC!?p=KwCzRw|+');
define('NONCE_SALT', 'Jv_uO=QEaA@;f&|Myf}VP|BZZ?ITc}A%JtXFfFGiN=[%UDJ>M*$E=QUepbUR+c)cWxHyIFMUDxwrQ]PM[$-eYP{ge/RZZ_bszc)lKRJIzPR=kt]@?X&x_Q_s-}PLcsmg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_thqr_';

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
