* [1]: Sous windows, configurer PHP dans les variables d'environnement pour l'utiliser en ligne de commande. Pour vérifier que vous pouvez éxecuter PHP en CLI, lancez la commande "php -v" depuis votre invite de commandes pour afficher la version de PHP

* [2]: Installation d'un client Git sur votre poste de travail (Gitbash sous windows)

* [3]: Créer un nouveau projet web et récupérer les sources "git clone https://github.com/jeromefath/Symfony2.git"

* [4]: Faire tourner l'application Symfony 2 sur votre poste de travail

    1. Chargement des vendors via la commande "php composer.phar update"

    2. Création de la base de données "php app/console doctrine:database:create"

    3. Ouvrir le fichier src/Mmi/Bundle/HelloBundle/Controller/DefaultController.php pour analyser le code source

    4. Votre application doit renvoyer une réponse valide à l'addresse : http://localhost/{directory}/web/app_dev.php/hello?name=value
