 Instructions pour Démarrer
Prérequis
Assurez-vous d'avoir installé PHP, Composer, Node.js, et NPM sur votre machine.

  Installation
Clonez le dépôt du projet :
git clone https://github.com/ElskaWitch/GamerStack.git

 Accédez au répertoire du projet :
cd gamerstack

 Installez les dépendances PHP avec Composer :
composer install

 Installez les dépendances Node.js avec NPM :
npm install

 Créez un fichier d'environnement à partir du modèle :
cp .env.example .env

 Générez la clé de l'application Laravel :
php artisan key:generate

Configurez votre base de données dans le fichier .env.

 Exécutez les migrations de base de données :
php artisan migrate

 Démarrage du Serveur
Pour démarrer le serveur de développement PHP, exécutez :
php artisan serve

 Pour démarrer le serveur de développement front-end, exécutez :
npm run dev

Accédez ensuite à l'adresse fournie par la commande php artisan serve (généralement http://localhost:8000) dans votre navigateur pour voir votre application en action. Pour les ressources front-end, accédez à l'adresse fournie par npm run dev.  
  
  
  À propos de Laravel
Laravel est un framework d'application web avec une syntaxe expressive et élégante. Nous croyons que le développement doit être une expérience agréable et créative pour être véritablement satisfaisant. Laravel facilite le développement en simplifiant les tâches courantes utilisées dans de nombreux projets web, telles que :

  Moteur de routage simple et rapide.
Conteneur d'injection de dépendances puissant.
Multiples back-ends pour le stockage des sessions et du cache.
ORM de base de données expressif et intuitif.
Migrations de schéma indépendantes de la base de données.
Traitement robuste des tâches en arrière-plan.
Diffusion d'événements en temps réel.
Laravel est accessible, puissant, et fournit les outils nécessaires pour des applications robustes et de grande envergure.

  Apprendre Laravel
Laravel dispose de la documentation la plus complète et la plus approfondie ainsi que d'une bibliothèque de tutoriels vidéo, ce qui facilite grandement la prise en main du framework.

Vous pouvez également essayer le Laravel Bootcamp, où vous serez guidé à travers la création d'une application Laravel moderne depuis le début.

Si vous ne souhaitez pas lire, Laracasts peut vous aider. Laracasts contient des milliers de tutoriels vidéo sur une gamme de sujets incluant Laravel, PHP moderne, tests unitaires, et JavaScript. Améliorez vos compétences en explorant notre vaste bibliothèque vidéo.

  Sponsors de Laravel
Nous souhaitons remercier les sponsors suivants pour le financement du développement de Laravel. Si vous êtes intéressé par devenir sponsor, veuillez visiter le programme des partenaires Laravel.

  Partenaires Premium
Vehikl
Tighten Co.
WebReinvent
Kirschbaum Development Group
64 Robots
Curotec
Cyber-Duck
DevSquad
Jump24
Redberry
Active Logic
byte5
OP.GG
Contribuer
Merci de considérer une contribution au framework Laravel ! Le guide de contribution peut être trouvé dans la documentation Laravel.

  Code de Conduite
Afin d'assurer que la communauté Laravel soit accueillante pour tous, veuillez lire et respecter le Code de Conduite.

  Vulnérabilités de Sécurité
Si vous découvrez une vulnérabilité de sécurité dans Laravel, veuillez envoyer un e-mail à Taylor Otwell via taylor@laravel.com. Toutes les vulnérabilités de sécurité seront rapidement traitées.

  Licence
Le framework Laravel est un logiciel open-source sous licence MIT.