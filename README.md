# Projet de Blog Immobilier

Ceci est une application de blog immobilier construite avec Laravel et Vue.js en utilisant Inertia.js. Elle permet aux utilisateurs de créer, modifier et supprimer des articles liés aux biens immobiliers.

## Fonctionnalités

- Lister tous les articles
- Créer un nouvel article
- Modifier un article existant
- Supprimer un article

## Prérequis

- PHP >= 7.4
- Composer
- Node.js et npm
- SQLite ou toute autre base de données prise en charge par Laravel

## Installation

Suivez ces étapes pour installer et exécuter le projet localement.

### 1. Cloner le Répertoire

```sh
git clone git@github.com:danielp67/demo-immobilier.git
cd demo-immobilier
```

### 2. Installer les Dépendances PHP

```sh
composer install
```

### 3. Installer les Dépendances JavaScript

```sh
npm install
```

### 4. Exécuter les Migrations

```sh
php artisan migrate
```

### 5. Compiler les Assets

```sh
npm run dev
```

### 6. Démarrer le Serveur de Développement

```sh
php artisan serve
```
