* [1] Forker le projet https://github.com/jeromefath/Symfony2 depuis l'interface de GitHub.

* [2] Placez vous à la racine de votre répertoire de travail (www) depuis l'invite de commande. 
Chargez les sources de votre fork avec la commande "git clone https://github.com/{username}/Symfony2.git Symfony2_Fork"

* [3] Faire tourner l'application forkée sur votre poste de travail :

    1. Chargement des vendors via la commande "php composer.phar update"

    2. Votre application doit renvoyer une réponse valide à l'addresse : http://localhost/Symfony2_Fork/web/app_dev.php/bootstrap

=======================
Une fois le projet forké, il faudra envoyer sur votre nouveau dépôt ; le code qui devra être implémenté dans les excercices. 
Pour utiliser Git, vous pouvez utiliser l'invite de commande ou un client Git avec une interface graphique comme le logiciel SourceTree.
Les 2/3 lignes de commandes que vous devrez utiliser pour envoyer votre code sur le dépôt seront surement plus simple à maitriser qu'un logiciel comme SourceTree très complet. 
Voici un tutoriel permettant d'apprendre les commandes de base : http://openclassrooms.com/courses/gerez-vos-codes-source-avec-git

Exercices
=======================

* [1] Créer un nouveau bundle nommé MmiBlogBundle => servira à implémenter les fonctionnalités de votre blog

Lancez la commande "php app/console generate:bundle" depuis l'invite de commande.
        
Bundle namespace : Mmi/Bundle/BlogBundle

Target directory : valeur par défaut

Configuration format : annotation

Utilisez les valeurs par defaut pour le reste des questions.
Votre nouveau bundle est désormais disponible et préconfiguré, vous allez pouvoir coder.

* [2] Créer un layout pour votre MmiBlogBundle => servira à définir la mise en page html de votre blog

Héritez du layout de MmiBoostrapBundle pour faciliter et améliorer la mise en page html/css en utilisant bootstrap.

Ajoutez une feuille de style au layout pour pouvoir débuter l'intégration css de votre blog.

* [3] Créer une homepage pour votre blog

Utilisez le DefaultController ajouté lors de la création du MmiBlogBundle depuis l'invite de commande.

Le template de votre homepage doit hériter du layout de votre blog.