
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
