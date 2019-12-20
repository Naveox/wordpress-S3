<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp-test' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'Evan' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'ydNFVGAX' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6*>,/M^xT)qocpg2 [}^K=VP&Qq0+`K|L?:h?Q7xDnGwz.@WF~rVe#=+_|R5E $p' );
define( 'SECURE_AUTH_KEY',  '$n~ 6RT.=jpEp?evqw6lA(e`CPz=nQ=;Z[PB0W^sr[uq,&sn)MZ_8-I.LZT2N$oC' );
define( 'LOGGED_IN_KEY',    ',w>b4l{whN2wTMY|wR/5C2I@-h^` $$c9R(pR8&fNB?#@tj,(NQp^pc/(je]s(lG' );
define( 'NONCE_KEY',        '-P(6ub{3Be5XRPz={3g`1:lm|oM5GAb_>e&?yWEv.4Z@wKiPg 4(~oJoX3qcimcq' );
define( 'AUTH_SALT',        '0sI:)S2Cph37#`D`s6Mtda^u@zxMw4R#Cem=M^;{7B07Rw|Dbx48qOR0/vbuf&TT' );
define( 'SECURE_AUTH_SALT', 'Rw d2{*~JTeTO3d#.ag8UT}E,4N{%-ik{ap-[<+Uq 9EE _Pqt{+XxdYr?FMw96u' );
define( 'LOGGED_IN_SALT',   'Q1#4t6<i!uJIJ|UbZ$VvkmJ!B3g4.}A]vUEk(?RiF|^F~k323zLQP:JXG-a%Bx[S' );
define( 'NONCE_SALT',       'ku!C%Vm^G^HkFbzAD^1tg?B3,r5N!Xk,aSfFFy#Pa}{pq1J}NySU^1.T]+&<U/OJ' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
