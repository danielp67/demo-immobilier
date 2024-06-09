# Projet de Blog Immobilier

Ce projet est une application de blog immobilier développée avec Laravel et Vue.js. Il permet aux utilisateurs de créer, lire, mettre à jour et supprimer des articles de blog sur des biens immobiliers. Chaque article est associé à une catégorie.

## Fonctionnalités

- Création de nouveaux articles
- Affichage des articles
- Mise à jour des articles
- Suppression des articles
- Catégorisation des articles

## Prérequis

- PHP >= 7.4
- Composer
- Node.js et npm
- SQLite (ou un autre SGBD pris en charge par Laravel)

## Installation

### Étapes pour installer le projet localement

1. Clonez le dépôt GitHub :

    ```sh
    git clone https://github.com/votre-utilisateur/blog-immobilier.git
    cd blog-immobilier
    ```

2. Installez les dépendances PHP avec Composer :

    ```sh
    composer install
    ```

3. Installez les dépendances JavaScript avec npm :

    ```sh
    npm install
    ```

4. Créez un fichier `.env` à partir de l'exemple fourni :

    ```sh
    cp .env.example .env
    ```

5. Générez une clé d'application :

    ```sh
    php artisan key:generate
    ```

6. Configurez votre base de données dans le fichier `.env`. Par exemple, pour SQLite, ajoutez :

    ```plaintext
    DB_CONNECTION=sqlite
    DB_DATABASE=/chemin/vers/votre/database.sqlite
    ```

   Créez le fichier de base de données SQLite :

    ```sh
    touch /chemin/vers/votre/database.sqlite
    ```

7. Exécutez les migrations de base de données :

    ```sh
    php artisan migrate
    ```

8. Exécutez les seeders pour peupler avec un jeu de données :

    ```sh
    php artisan db:seed --class=DatabaseSeeder
    ```

9. Compilez les assets front-end avec Vite :

    ```sh
    npm run dev
    ```

10. Démarrez le serveur de développement Laravel :

    ```sh
    php artisan serve
    ```

11. Accédez à votre application dans un navigateur web à l'adresse `http://localhost:8000`.

## Utilisation

### Créer un nouvel article

Pour créer un nouvel article, accédez à la page de création d'article et remplissez le formulaire avec les informations suivantes :
- Titre
- Contenu
- Catégorie

### Modifier un article

Pour modifier un article existant, accédez à la page de modification de l'article correspondant et mettez à jour les informations.

### Supprimer un article

Pour supprimer un article, cliquez sur le bouton de suppression à côté de l'article que vous souhaitez supprimer.

## Structure du projet

- `app/Models` : Contient les modèles Eloquent
- `app/Http/Controllers` : Contient les contrôleurs
- `database/migrations` : Contient les fichiers de migration de base de données
- `database/seeders` : Contient les fichiers de seeders de base de données
- `resources/js` : Contient les composants Vue.js
- `resources/views` : Contient les vues Blade
- `routes/web.php` : Contient les routes de l'application

## Contribution

Les contributions sont les bienvenues ! Pour signaler un bug ou demander une fonctionnalité, veuillez ouvrir une issue sur GitHub. Pour contribuer au code, veuillez soumettre une pull request.

## Licence

Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus d'informations.
