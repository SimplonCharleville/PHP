# Exercice sur la sécurisation d'un formulaire en PHP

1/ Créez un formulaire d'inscription avec les données suivantes (vous pouvez reprendre un formulaire déjà développé et l'adapter) :
* Nom
* Prénom
* Adresse e-mail (vérifier que c'est bien un format e-mail)
* Adresse
* Code postal (vérifier le format à 5 chiffres)
* Ville
* Mot de passe (crypté en SHA1)
* Confirmation du mot de passe (vérifier que le mot de passe correspond)
* Captcha (celui que vous voulez)

Tous les champs sont obligatoires.
Vérifiez la saise côté back en PHP avec insertion en DB MySQL en utilisant les requêtes préparées PDO.
Paramétrer votre DB avec un nouvel utilisateur et les droits nécessaires.

2/ Créez une page de récap des données saisies, à partir de l'ID en méthode GET
* Utilisez htmlentities
* Le mot passe s'affichera en * avec le nombre de caractères saisis.
