<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

$host = php_uname('n');
var_dump($host);
if ($host == "MacBook-Pro-de-Alexandre.local") {
	define("ENVIRONMENT", "develop");
}

else{
	define("ENVIRONMENT", "production");
}

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'topten');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>`]rkzG?LW_XW8M#?BLAZ`H+YZYp>%/kTtYQia3o/sWP!8^e$!M&-`Q]HGE$0n__');
define('SECURE_AUTH_KEY',  'LN79s@ac*:D;5})K;(<GB1?yxQP+D8$Jkb`? t6DFZn?Yvt*irW7DgJf#c$4DKHV');
define('LOGGED_IN_KEY',    '9/Z&$^00zNvWsSxc Jad$6iz_},iffD4_lK1-zRvHxdwdL8A;ge);-FmRFyjt[CG');
define('NONCE_KEY',        '}JexWrvUA8SY~dG4t:>Q?:k@5e3bLQ?]H9FL2bvnB~xgBoZL3Gsox2}%d#e^DKT}');
define('AUTH_SALT',        '*]KzBK vn26L^`7q:)j+8QLxqcyE[{?F,6D{w)J=hfv#|Wd3wRB}<29.}pke@=xr');
define('SECURE_AUTH_SALT', 'ZQ&T3e57=kU~|8#0;juQ(x+*;(+p3e|~dnQu:Fwkxl0*]?0Ha:%OxP=Di*)G6ci3');
define('LOGGED_IN_SALT',   'ZRQz(02M24((9QvZP ;U_`Hlx$E8GC0[HgEy4<r0OX_56#<sL/JT3rI4N~SGJ::~');
define('NONCE_SALT',       '.i-{gS1E-^ 26eG]s4lQ_jl{?}C2$k6Z8a!~(n(R{roMZt[!9@I3R;3QC6Z*O~QG');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'topten2k16_wp';

/**
 * Pour les développeurs : le mode deboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
