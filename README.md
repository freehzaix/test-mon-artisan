## Formulaire de déclaration de sinistre
### J'ai utilisé le framework PHP nommé Laravel. Il s'agit de la version 9.
### Les logiciels utilisés sont Composer, Xampp et Visual Studio Code

Voici les étapes d'installation du projet.
- Télécharger la source gihub
- A la racine du projet, exécuter la commande: " composer install " afin d'installer les dépendances de PHP
- Démarrer votre serveur Apache et MySQL en utilisant Xampp
- Créer une base de données en utilisant l'interface de phpmyadmin
- Modifier le fichier .env ou renommer le fichier .env.example en .env pour configurer la base de données
- Dans le fichier .env, modifier la ligne 14 'DB_DATABASE=laravel' en remplaçant le mot "laravel" par le nom de la base de données que vous avez créé
- Utilisez le terminal pour exécuter la commande " php artisan migrate " pour créer les tables de la base de données de façon automatique
- Et ensuite éxecutez la commande " php artisa serve " pour démarrer le projet sur le http://localhost:8000

Merci pour plus d'information: jeanlucdoh@gmail.com !
