# Exercice sur la sécurisation d'un formulaire en PHP

**1/ Créez un formulaire d'inscription avec les données suivantes** (vous pouvez reprendre un formulaire déjà développé et l'adapter) :
* Nom
* Prénom
* Adresse e-mail (vérifier que c'est bien un format e-mail)
* Code postal (vérifier le format à 5 chiffres)
* Mot de passe (crypté en SHA1)
* Confirmation du mot de passe (vérifier que le mot de passe correspond)
* Captcha (reCaptcha Google ou celui que vous voulez)

Tous les champs sont obligatoires.  
Vérifiez la saise côté back en PHP -> affichez un message d'erreur personnalisé si un champ est vide ou si la valeur est incorrecte  
Si la saise est correcte -> insertion en DB MySQL en utilisant les requêtes préparées PDO.  
Créez votre DB et un nouvel utilisateur avec les droits uniquement sur cette base.

**2/ Créez une page de récap des données saisies**, à partir de l'ID en méthode GET
* Utilisez htmlspecialchars() ou htmlentities()

### En sa voir plus :
* [Cours sur OpenClassrooms](https://openclassrooms.com/fr/courses/2091901-protegez-vous-efficacement-contre-les-failles-web)
