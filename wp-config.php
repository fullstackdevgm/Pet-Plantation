<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_HOME','http://hirepatrickcooper.com');
define('WP_SITEURL','http://hirepatrickcooper.com');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hirepat1_wordpress428');

/** MySQL database username */
define('DB_USER', 'hirepat1_word428');

/** MySQL database password */
define('DB_PASSWORD', '6YSU4En2XWOC');

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
define('AUTH_KEY', '^T?ty|<-SJq<mZyZEzqq(c/wlB{u=<WnSoXT$KcYSAP/UtLjgKi/wTcRiGfRlENAn>Nk[k{cA&}CoHVB@g_(cPaslyta%}Bv+RFj>p%I}j!a)RPlQC_O!N$RUz-_OBA=');
define('SECURE_AUTH_KEY', '+zZe@E^KM^fS[%PfbVf]yOTiUq@w(fIOgT$R[It_K>C@k{VR(Yo^<gKgJsc<;wYkog]ajJxG*skHY[AT;&]af%fEI+HYZ&fS*|FkUNJkz=fwviJ+;F&@)Cf/!(ZoW^tC');
define('LOGGED_IN_KEY', 'UgkqO_xZ/stBqlnn[k_M>s*-;YmEzZ}Jdi[|$?Sf_kVnxY]N=m<ZiLt{AdONbxGxFMwj-epHgav-PvSJEZe[FlKYtcx?f/]=js{gZFMHAf_[lpgEwfE*I]K(+<yl/pFj');
define('NONCE_KEY', '$?zeBgP/mjqflv$[SgVmQL]so)ZAlWDXQnLXfz&ttyZSD)_G|eeI)i?HCy{<ghB/+tpuZHYmxNjFe(=G&N^Xaf/VV?Bt_=<;RiHpVYi!fMw?E?D|/keUcAu_$ir<vc&[');
define('AUTH_SALT', 'I|bJ]H<NJw*D|mXd/@Ml(jueuHv;fBa$]Rf_&Gc%so?WL[ux>><oeQo+w_Y)G=hhI](XNq^ic)>p|HPDlwSRbPJAJ&cG&OnSczX=yBY=;JE$M|Yeih!>Jcg(fSTD>{ev');
define('SECURE_AUTH_SALT', '-ZU*PGwL%|]WXvwf|dwRbDXFwyE-Jd![szz@O/TwBHNTQf=feQ^kMd]^_VK_|mC&d}uvLxctu&?wzr;GZffN^Ex!SlCBl|Cxsz=MWzse]d%u[I^ZRaEe+eqzHLzGXk?s');
define('LOGGED_IN_SALT', 'D@[[nZ=|J=^AuO@iup(f[/xmq)aoYj+w?InnYDqA^XP$)sj?Dk={<]Ni+R?obN+njdaYzg^PiF&H{F_U%(GUb])xT$V[VYtcWA&(V?WdO-*i_H}eV_rj(|G?ZO;H]PT/');
define('NONCE_SALT', 'xs(chxvs<r|_*azV}&bo{!U$d@sgnk[vu/D$[Y]Dbyz<ppSlR$-BPUDAwS>ZGl>RtUYZ?zhZx;ZBt)KT_N=nKga>WkW|BDy}xVja%$aj&{>FfiKHIBGI=MUkaEJNasM;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_tlmr_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
