<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ifran_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '[6.qI!xETQ&0*|A,o2g+i>QH^K;CqR=()!0[4b7kIKT!/E! $=QhsbKsQe-BpA_|' );
define( 'SECURE_AUTH_KEY',  'FUF210NHoWM$ZM4jnGqjgj/NW<@qpb{8c4WT:iKf|!:Cs=8x{XyI`JMBUY0PaaG1' );
define( 'LOGGED_IN_KEY',    'W69Y=r1e<7kJ7?-29d17q|Iq6A),Q]/(ezz<q?CavcwEp45u%E0?7em5ysEY.Pb=' );
define( 'NONCE_KEY',        'm/*|XW?L<J)Ga=K74aPhJD7^7QfGQY+vg`).Pbm=,sSz9L:-F@dK%z%^sF7d PO`' );
define( 'AUTH_SALT',        'CYP+V4-%iZuk0lS/#mRS/)g^[94%ym7X F|0tq?mCT^#Sl@]qcN9!I=dz`,gS}%f' );
define( 'SECURE_AUTH_SALT', '1Bw[1zLjM{r!F2*!siLwoIVK5M$#Xst`Y5pRjS=A8KRoUoLu8mUxi|T450Pz$r+S' );
define( 'LOGGED_IN_SALT',   '_b0/MRc2{rOj2RBeXA+/-eOmCIg,)~Mv8[n[a.>kQlWQvote0NHx~ (3O<Gse@H2' );
define( 'NONCE_SALT',       ' iPxa;^:z+lv$^8@4H5a`4txo,^rqG%^pk<%EElTNc)>tnLa1`7S.+Ff(78@WQv(' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
