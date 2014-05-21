<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'new');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'x./Vy-Esalj;eK2-{f4dqDuy<n@<-dX?%[qLqNVfW^$hr|$+8S<4V[~9cpAXzJt4');
define('SECURE_AUTH_KEY',  '?i5@JWg><>YbUQv{H_OS:|Bf,-90^+X:M-3z?TtK|)H)^5?udL@KVmNQ<d}I-/ Y');
define('LOGGED_IN_KEY',    '1VUMCQ^ZF O|Ame4+PK@6?X,pI=JIk[,PbZ7|yc0`NL@I|TNOM`>%9.1+^PI|i_-');
define('NONCE_KEY',        '@t9.KmS6TMJO(>bD@xaH}pP601L>|?v.i|hQ`Su*24Rr# z#2Hh(+0-2i>r{!v% ');
define('AUTH_SALT',        '+D^+PYm(1G+[wI_`D$lmRX;?K|,Fj$^TWtBU2&Be0=h]uHnFh2phO(%D,S/fp3!)');
define('SECURE_AUTH_SALT', ':,<&LuwQ@j-WDQ/B+*-KU[DCaCI)HxzWb|hu],R=q-Q)_5U<>*o5kX^bquE}oP;p');
define('LOGGED_IN_SALT',   'LK%$*e-j<z*7hXD_>nSr1Zh_}Nz*@<L/#Q@}DX[<FQ2+3Qd4S{Aa+uGp<wY!y_(+');
define('NONCE_SALT',       'fd<<{U[3T|(VWcW,LF-%6?fa-5%tYV6n+|:&sBors ,}!7n9:Y?&)_osQO%~dptI');


$table_prefix = 'wp_';

define('WPLANG', '');




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
