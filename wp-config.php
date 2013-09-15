<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'nikerunc_site_new');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'dNZf2. ~FWTaj#?Pg>_Am@7vQ*W0CD.iE.p_qT*<v&Fg1AX`.,1G01>Z!U}Ml0h,'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'hsz*sb2>.1EY<<&z5PMK)U_P4c>))+Mw-hx WNvuV!_xrd<u>Dh/PZ?0ZmGc%$[/'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'KYrKw08889(PIi%+sy=9G50nW]I<Y+O}`FRa@t]=#TLH,&gjcBp~w5`<SJJuOlLp'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '}[2c5ZlYd.i,u2B19(&FDldYAigKu:]bypTbAg yh t[,Lo;&R[vFa$+PHG@EE:_'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'zSt&|?Fa>^FSok{8LNW^V;hc[8_pDC2fB10_Bo(_lgDu&PpGFof;]O*81$g6>A(W'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'g:6ZJs1eEie`Uy3gzSmz=:0;[+gPXv`{ %2*tVM gi&7#+dL+d+@E~1>X7&M-/)B'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'c/gV1~5b9!_dVU8Okxz~)z]2)HZxh>h;,l(QgE=DOG-:4,==mTb|OX0$Nx*^|hS5'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'F%W==upGS1mzqVk0~<Lyik]J!vn~e*/3D du`<QuZvUmP~Pfl!Dt8+[U(Daqjo^*'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

