# sae_1.02_Algorithmique
Projet de Jeu de Combat

## Description

Ce projet est un jeu de combat basé sur le pierre feuille ciseau où le joueur incarne un chevalier qui doit affronter des monstres dans différents combats. Le jeu propose deux niveaux de difficulté pour le deuxième combat : normal (grotte / niveau attendu pour la SAE) et difficile (arène / niveau bonus).

## Fonctionnalités

- Création et d'un chevalier
- Combat contre des monstres
- Deux niveaux de difficulté pour le deuxième niveau
- Gestion des scores
- Afficher la liste des joueurs triée par nom
- Afficher la liste des joueurs triée par meilleur score
- Afficher les statistiques d'un joueur
- Sauvegarde des données


## Fichiers associés :

Le programme utilise des fichiers externes pour générer une partie prédéfinie, sauvegarder des scores.

respectivement : 
    - partie.txt
    - scores.txt

### Construction de partie.txt:
1er arg: nombre de montres dans la première manche (retour à la ligne)
2ème arg: pour le nombre indiqué de monstres dans la manche on a le niveau du monstre et son nom (retour à la ligne)
3ème arg: nombre de monstres dans la seconde manche (retour à la ligne)
4ème arg: pour le nombre indiqué de monstres dans la manche on a le niveau du monstre et son nom (retour à la ligne)

### Construction de scores.txt:
1er arg: nombre de parties jouées par le joueur  (retour à la ligne)
2ème arg: nom du joueur  (retour à la ligne)
3ème arg: x entiers représentant les scores où x est le nombre de parties jouées (retour à la ligne)



## Mise en place : 

### Pour compiler le projet, utilisez la commande suivante :

make 

### Pour le lancer, utilisez la commande :

./main.exe

Auteurs :

- Damien Ballerat
- Julien Abadie