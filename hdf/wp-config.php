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
define( 'DB_NAME', 'hospitalitodelafe' );

/** Tu nombre de usuario de MySQL */
define( 'DB_USER', 'root' );

/** Tu contraseña de MySQL */
define( 'DB_PASSWORD', '' );

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define( 'DB_HOST', 'localhost' );

/** Codificación de caracteres para la base de datos. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY', '>rBH J9t{F+Em>zGs3)W24P`9(k;7WfVNK),~qCWCz.|.ejWq`EZ9XE%gunp` xy' );
define( 'SECURE_AUTH_KEY', 't+^~+u-06H|j<oifc?@xlm5*6XZGqv_=@#)23U}}V3&7Q~r4}2*6OD:63^P$[VhL' );
define( 'LOGGED_IN_KEY', 'TL::xu1f5uU=dM6,o^D=j0&Vzq:|IpXR^#R!Pi/Cb~mZQ]`%MNy0hLYjY1 1VeET' );
define( 'NONCE_KEY', 'w.U/.jT6W134>sRjGV&1;<6368oS.,z1+0nkjVmyD#{?,ar38XN0/{,1m#N%pl*o' );
define( 'AUTH_SALT', '/,F27}?aemJv!,7*8cap[o]HI#d*7Bp+f=Z_GcwD36X(n43?@PBB2BZ3E(e0[:W7' );
define( 'SECURE_AUTH_SALT', 'uYfO0FJ`7+2RLWgNz`drY&K.F?]lW3$F0H4AGwRY @K@i*F2*jnjSj$|eSIxsdv=' );
define( 'LOGGED_IN_SALT', 'e/4aZ{DA%(5`+[<zUYg&}5up];uF:v2v)YZ`TzlVV;?z9b*0r8k)DP&ASKS8DUTS' );
define( 'NONCE_SALT', '|?KHd:@F+)tXeWxIx&c`g:I? ^H`ah!6l$`?tEecgN;P#~jjp,h9+8$p9d84~= I' );

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix = 'wp_';


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

