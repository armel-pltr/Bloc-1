# TD1

## Question 1 : 

- **La méthode GET** du protocole HTTP (Hypertext Transfer Protocol) est principalement utilisée côté client (navigateur) pour envoyer une requête à un serveur spécifié afin d'obtenir certaines données ou ressources. On utilise GET les paramètres d'un site Web (filtres, tri, saisies de recherche, etc.). Pour cette méthode, les donnés envoyés sont visible dans l'url en tant que paramètres après le point d'interrogation.
  
- **La méthode POST** possède des caractéristiques différentes : les paramètres, c'est-à-dire les données saisies par l'utilisateur, sont passés non pas dans l'URL, mais dans la requête elle-même. On utilise POST pour pour la transmission des informations et des données de l'utilisateur. Pour cette méthode, les donnés envoyés ne sont pas visibles dans l'url

-> La méthode GET passe les réponses saisies via l'URL tandis que la méthode POST passe les paramètres dans le corps de la requête.

## Question 2 : 

| .  | GET          | POST |
| :--------------- |:---------------:| -----:|
| Visibilité		  |   Visible pour l’utilisateur dans le champ d’adresse	        |  Invisible pour l’utilisateur |
| Marque-page et historique de navigation	  |   Les paramètres de l’URL sont stockés en même temps que l’URL.	        |  L’URL est enregistrée sans paramètres URL.|
| Cache et fichier log du serveur	  | Les paramètres de l’URL sont stockés sans chiffrement             |   Les paramètres de l’URL ne sont pas enregistrés automatiquement.|
| Comportement lors de l’actualisation du navigateur / Bouton « précédent »  | Les paramètres de l’URL ne sont pas envoyés à nouveau.         |    Le navigateur avertit que les données du formulaire doivent être renvoyées.|
| Type de données	  | Caractères ASCII uniquement.	          |    Caractères ASCII mais également données binaires. |
| Longueur des données	  | 	Limitée - longueur maximale de l’URL à 2 048 caractères.          |   	Illimitée.|

