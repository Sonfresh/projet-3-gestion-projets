# Projet 3 : Application de Gestion de Projets (Project Management)
Objectif : Créer une application de gestion de projets qui permet aux utilisateurs de créer et gérer plusieurs projets, avec des fonctionnalités pour gérer les tâches au sein de chaque projet, attribuer des utilisateurs aux projets, et suivre l’avancement. Nous introduirons aussi des notifications, des rappels automatisés, et une interface utilisateur enrichie.

# Fonctionnalités
 - Gestion des Projets : Créer, mettre à jour et supprimer des projets. Chaque projet peut avoir plusieurs tâches et être attribué à des membres.
 - Gestion des Tâches : Les tâches peuvent être ajoutées, modifiées, supprimées, marquées comme terminées, et suivies dans leur avancement.
 - Assignation et Permissions : Les utilisateurs peuvent être assignés à différents projets avec des rôles spécifiques (comme gestionnaire, contributeur, etc.), avec des permissions adaptées.
 - Notifications et Rappels : Utiliser les queues pour envoyer des notifications et rappels automatiques pour les tâches à échéance.
 - Analyse et Suivi : Générer des rapports de progression pour chaque projet.

# Nouveaux Concepts
 - Rôles et Permissions Avancés : Gérer différents niveaux d'accès par rôle (gestionnaire, contributeur).
 - Envoi de Notifications en Chaîne avec des Rappels : Utiliser Redis pour envoyer des rappels automatisés à des intervalles spécifiques.
 - Dashboard de Suivi : Utiliser Chart.js ou autre bibliothèque pour représenter l'avancement du projet en graphiques.
 - Multi-Tenancy Basique : Assurer que chaque projet et ses tâches sont bien séparés entre les utilisateurs.

# Technologies Utilisées
 - Backend : Laravel avec Redis pour les queues, Breeze pour l'authentification.
 - Frontend : Vue.js, Inertia.js pour les pages dynamiques, Tailwind CSS pour le style.
 - Notifications : Mailpit pour l’environnement de développement.
 - Bibliothèque de Graphiques : Chart.js pour les visualisations.

# Étapes du Projet
Étape 1 : Configuration de l'environnement et installation des paquets nécessaires (Breeze, Inertia.js, Tailwind CSS).
Étape 2 : Création des modèles Project et Task avec relations, migrations, et politiques.
Étape 3 : Gestion des rôles et permissions pour les projets.
Étape 4 : Implémentation des notifications pour les rappels de tâches.
Étape 5 : Création du dashboard avec les graphiques pour suivre la progression des projets.
Étape 6 : Quiz et vérifications finales pour réviser les nouveaux concepts.
=======
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
>>>>>>> 6230c27 (First commit)
