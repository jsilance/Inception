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
define( 'DB_NAME', 'mariadb' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'jusilanc' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'jusilanc' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'mariadb:3306' );

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
define( 'AUTH_KEY',         'dp[%539,2IR=S<[opyR9 pF8!Lv$DgW7+M<U+a4=!fFNH[M}PP7uEs)ph`?%SDZ5' );
define( 'SECURE_AUTH_KEY',  'Va48<oC7^b`3fb:Y@^bbF`?B|FBT0p)L39RtD~QD1s^WA)Go~uw(%q{`2R@xe($3' );
define( 'LOGGED_IN_KEY',    ').N#7p~vJoWzWwp?5@Ty-/YW;GA/o[;Oc_v*EwEb8uYx_h91YJ@{n!=d.OP@^T*2' );
define( 'NONCE_KEY',        'FZxWgj!g7OXWloE0e9qi~&dB4}dB$k(6!JMqAIIL+Lw%NsaG#_*Zk5yExFf4=24p' );
define( 'AUTH_SALT',        '32[5=TB4/hQ7_i*yO&c=T&LX!_-5]Ernq#|@DZ7p-tusZ/4} GJMR&`0?NL#t@VE' );
define( 'SECURE_AUTH_SALT', '-WrxQx7UGO&^S|?EavZ-H|^/N)+7!Q`/&zLSU4 U$Q*-p@-@TsT1$Rprm_R]fzIt' );
define( 'LOGGED_IN_SALT',   'yd,{O=q|5{LFD~ENf+v}F/*~wS=qu+PeFa9?swKxE&yw:IpY?FtJUH:(g}SSI^@+' );
define( 'NONCE_SALT',       'UG/4W.dPI%@G|(Zyw:+~U`e#okou0)E].fS}%)%xd8NT-_SoUvscSEr|9vHNv7EV' );
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

