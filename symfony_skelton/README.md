# exercice route avec symfony skelton

Le but ici est d'afficher :

- la liste des image et titre
- au clic sur l'image afficher une page détail avec un lien de retour à l'accueil
- une 404
- le téléchargement du grimoire

## étape de conception :

- `composer create-projet symfony/skeleton monster`
- Création de page (MVC)
  - Model
    - base de donnée
    - requête accés à la BDD
  - Controller
    - `composer require annotations`
    - ROUTER
      - création de route
      - affichage des routes (`php bin/console debug:router` ou `php bin/console d:r`)
      - ajout de propriété `GET` ...
      - ajout de parametre
  - Twig & les vues
    - installation de twig 
      - `composer require twig`
      - affichage des Vue
        - list
        - solo
        - 404
- session gérer pour afficher le dernier monstre consulté