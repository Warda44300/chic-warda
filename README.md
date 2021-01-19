# chic-warda
site ecommerce wordpress
# SITE E-COMMERCE CHIC WARDA
Création de site en local avec **Flywheel**: http://chic-warda.local
Il génere un compte wordpress, la base de données sur MySql, nom de domaine temporaire.

## Flywheel
##Étape 1 : installer Local by Flywheel
##Étape 2 : configurer Local by Flywheel
##Étape 3 : créez votre premier site WordPress
##Étape 4 : Configuration de wordpress(exemple: choix de langue du bord,  Options de lecture, etc...)
Il génere un compte wordpress, la base de données sur MySql, nom de domaine temporaire.

## Thème
Installation de thème **Store front** et configuration (logo, charte graphique, menu, etc..)

## Plugin
**Elementor**: Constructeur de page.
**Woocommerce**: Configuration des catégories, des payements, validation de commande et récépissé de commande, création des produits (titre, image, prix,....),  mise en ligne sur le shop.
**Akismet Anti-Spam**: Akismet est un anti-spam qui protéger notre site des indésirables. Notre site est pleinement configuré et protégé, même quand vous dormez. Pour qu'il soit fonctionnel est qu'il protège notre site, il faut créer un compte sur le site Akismet pour obtenir une clé API qui met sur le plugin Akismet dans les réglages.
**Classic Editor**:  Ce plugin active l’éditeur classique de WordPress et l’ancienne disposition de l'écran de modification d’article (TinyMCE, boites à méta, etc.).
**GDPR Cookie Consent**: Ce plugin permet de montrer que notre site est conforme à la loi européenne sur les cookie et au RGPD ( Règlement général sur la protection des données).
**#Jetpack par WordPress.com**: Jetpack permet de connecter notre site à un compte WordPress.com pour profiter de fonctionnalités normalement réservées aux utilisateurs de WordPress.com.
**#WPForms Lite**: Ce plugin est un constructeur de formulaire  pour créer des formulaires de contact ou autre très facile d'utilisation.
**#Yoast SEO**: Plugin qui permet d'analyser la visibilité et le référencement d'un page ou article.


## Base de données 
Connection direct avec wordpress via Flywheel(**DATABASE**) pas besoin de passer par phpMyAdmin, il suffit de clicker sur **open admin**.
 La base de données contient tout les fichiers de wordpress( **wp-admin, wp-content, wp-includes**).
 Dans la table **wp_wc_product_meta_lookup** est répertorié tous les données de mes produits (id, prix, stock, etc..) elle est composé de 14 colonnes. 
Dans la table ** wp_wc_customer_lookup** est répertorié tous les données de mes clients (id, prénom, nom, mail, etc..)  elle est composé de 8 colonnes. 

