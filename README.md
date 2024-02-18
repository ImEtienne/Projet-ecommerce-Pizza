# Titre du Projet : *Gestion de Commandes de Pizza en Ligne*

## Description :

Le projet "Gestion de Commandes de Pizza en Ligne" consiste à développer un site web permettant aux utilisateurs de passer des commandes de pizza à emporter. Le site sera conçu pour répondre aux besoins de trois acteurs principaux : les utilisateurs, les gérants (administrateurs) du site et les pizzaiolos. Chacun de ces acteurs disposera de fonctionnalités spécifiques pour faciliter la gestion des commandes de pizza.

## Fonctionnalités :

1. Pour les administrateurs :
   - Gestion des pizzas : ajout, consultation, modification, suppression (utilisation de SoftDelete) et mise à jour des images associées.
   - Gestion des commandes : consultation des commandes par date, affichage des commandes du jour par statut, consultation de toutes les commandes avec pagination et affichage de la recette du jour.
   - Gestion des utilisateurs : changement de mot de passe, création d'un administrateur et d'un pizzaiolo, modification du mot de passe du pizzaiolo et suppression d'utilisateurs (admin ou pizzaiolo).

2. Pour les pizzaiolos :
   - Consultation des commandes non traitées, triées par ordre d'arrivée.
   - Affichage du détail des commandes non traitées.
   - Mise à jour du statut des commandes (en traitement, prête, récupérée).
   - Changement de mot de passe.

3. Pour les utilisateurs :
   - Gestion du compte : création du compte, changement de mot de passe.
   - Commande de pizza : consultation de la liste des pizzas avec pagination, ajout de pizzas au panier, modification de la quantité de pizzas dans le panier, suppression de pizzas du panier, affichage du prix total et validation de la commande.
   - Consultation des commandes passées triées par date avec pagination et affichage du détail de la commande.

## Technologies :

- HTML : Utilisé pour la structure et la description du contenu de l'interface utilisateur.
- CSS : Utilisé pour la mise en forme et la stylisation visuelle de l'interface utilisateur.
- JavaScript : Utilisé pour ajouter des fonctionnalités interactives et dynamiques à l'interface utilisateur.
- Laravel : Utilisé pour la gestion de la base de données et la logique métier côté serveur, suivant les conventions de nommage du framework.
- MySQL : Utilisé comme système de gestion de base de données relationnelle pour stocker les données de l'application.
- PHP : Utilisé pour la programmation côté serveur, notamment pour la manipulation des données et l'exécution de requêtes SQL.
