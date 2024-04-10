<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_salon' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>._2+Dxkot=gYc]ZZ_QU/;2q~an,eVOnT?S*v.6Q8Z5nSrEO(8Cz;-)Qh^-t]T:(' );
define( 'SECURE_AUTH_KEY',  '#CT)Qp&FP8m[TpT{arZM?=UD<2SJfo~CDL3>g@3{xt[C[a_u=3]=1,:&EJd#XOGC' );
define( 'LOGGED_IN_KEY',    '*pn;PNp!*0LP?Q_3voY,y;/8cEoC|8h]Y/$c-h~YfPGTc]x?}_Cu;{Y$!U(g|Dl9' );
define( 'NONCE_KEY',        'f{(y}k6$Ux7pI^sl3fJ(Bc* .%xQ#}TPY6!lJlXRQ4<2sY0tSnO^l/g5LK<7;3I,' );
define( 'AUTH_SALT',        '}Vrz-&.xj*J%E1a6DPS>X!&0oYk~0wPwiq)ytIYSw!ZsH XG,u**]HL,~${(u3T1' );
define( 'SECURE_AUTH_SALT', 'O0A7;o0HHrCqOk-ME,K<Asor</==Bb*<Uq5iH%0<_|z=l99AS3DKga!64QarRFzK' );
define( 'LOGGED_IN_SALT',   ')Se:5FBJQrm2{:PA8085QLcEbpoC|<03*,Gd9vmAS-T,b_I(3{[H!P-RV+c8&->H' );
define( 'NONCE_SALT',       ']EbrM%;55rL]3+#-$n$X`7#S[C0$n-^&KP)B[DK^3{[r+IP_OvAq <rRWI!AAER)' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
