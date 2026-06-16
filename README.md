# Vidéothèque - TP Symfony

Application de gestion d'une collection de films, réalisée avec Symfony 7, Doctrine et MySQL.

## Fonctionnalités

- Liste des films
- Ajout d'un film
- Consultation d'un film
- Modification d'un film
- Suppression d'un film
- Validation des données (champs obligatoires, année entre 1900 et 2026)
- Recherche par titre
- Compteur de films sur la page d'accueil
- Champ genre avec liste de choix

## Installation

composer install
symfony console doctrine:database:create
symfony console doctrine:migrations:migrate
symfony server:start

## Base de données

Le fichier database_structure.sql contient la structure de la table movie si besoin de la recréer manuellement.
