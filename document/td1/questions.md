# TD1

## Question 1 : 

- **La méthode GET** est utilisée pour récupérer des ressources ou des données à partir du serveur. Les paramètres de requête sont inclus directement dans l'URL après un "?" et sont visibles dans la barre d'adresse du navigateur.
> Exemple :
> 
> - URL : https://example.com/search?query=armel&lang=fr
> 
> - Requête envoyée : GET /search?query=chatgpt&lang=fr HTTP/1.1
> 
> - Host: example.com
  
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

## Question 3 :

**Le protocole HTTP** : Le protocole HTTP (Hypertext Transfer Protocol) est l'ensemble des règles permettant de transférer des fichiers tels que du texte, des images, du son, de la vidéo et d'autres fichiers multimédias sur le Web. 

**Pourquoi est-il extensible ?** Le protocole HTTP est extensible car il permet d'être étendu au fil du temps avec de nouvelles methodes (autre que GET et POST).

## Question 4 : 

- Cela signiifie que le protocole de communication qui n'enregistre pas l'état d'une session de communication entre deux requêtes successives.
- L'utilisation de ce protocole permet de simplifier son design, car on se libère de toute la gestion compliquée de l'espace mémoire requis pour enregistrer l'état des échanges en cours.

## Question 5 : 

- **Le protocole et le sous domaine** : https://www.

  -> Cette partie correspond aux normes techniques qui sont communément utilisées pour concevoir des adresses de sites internet.
  
- **Le nom de domaine** : monsite

  -> Il s'agit le plus souvent du nom de votre marque, de votre entreprise ou encore de votre blog ou de votre produit. Sur le site de Google (https://www.google.com) par exemple, le nom de domaine est "google".

- **L'extension du nom de domaine** : .com

  -> C'est la dernière partie qui compose l'URL. Pour les entreprises en France, l'extension la plus courante est le .fr ou encore le .com.
- **L'url complète** : https://www.monsite.com


## Question 6 : 

- **1XX** : réponses informatives. __Exemple__ : Page en cours de chargement.
- **2XX** : réponses de succès. __Exemple__ : Le contenu est affiché avec succés.
- **3XX** : redirections. __Exemple__ : Patientez, vous allez être redirigé.
- **4XX** : réponses d'erreur côté client. __Exemple__ : Erreur 404
- **5XX** : réponses d'erreur côté serveur. __Exemple__ : Le serveur ne répond plus.


## Question 7 : 

**Les principes de la négociation de contenu**

- Lorsqu'un client souhaite obtenir une ressource, il la demande via une URL. Le serveur utilise alors cette URL pour choisir l'une des variantes disponibles. Chaque variante est appelée une représentation. Le serveur renvoie alors une représentation donnée au client.

## Question 8 :

- Fait sur machine perso.

## Question 9 :

1)  **curl http://dev.local**
   - *Réponse :*

```
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web local</title>
</head>
<body>
    <h1>TDs web</h1>
</body>
</html>
```

- **Commentaire :** Cette commande permet d'afficher le code source de la page.

2) **curl -i http://dev.local**

- *Réponse :*
  
```HTTP/1.1 200 OK
Date: Sun, 08 Sep 2024 12:21:48 GMT
Server: Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12
Last-Modified: Sat, 07 Sep 2024 11:14:01 GMT
ETag: "15b-621859ef2ba97"
Accept-Ranges: bytes
Content-Length: 347
Content-Type: text/html

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web local</title>
</head>
<body>
    <h1>TDs web</h1>
</body>
</html>
```
- *Commentaire :* Cette commande permet de savoir si cette URL est bien fonctionnel.

3) **curl -i http://dev.local/notExisting**

- *Réponse :*
  
```
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<hr>
<address>Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12 Server at dev.local Port 80</address>
</body></html>
```
- *Commentaire :* Cette commande permet de nous donner le code source d'une erreur 404, d'une page non trouvé.

4) **curl -i http://dev.local/notExisting**

- *Réponse :*
  
```
HTTP/1.1 404 Not Found
Date: Sun, 08 Sep 2024 12:30:45 GMT
Server: Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12
Content-Length: 295
Content-Type: text/html; charset=iso-8859-1

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html><head>
<title>404 Not Found</title>
</head><body>
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
<hr>
<address>Apache/2.4.58 (Win64) OpenSSL/3.1.3 PHP/8.2.12 Server at dev.local Port 80</address>
</body></html>
```
- *Commentaire :* Cette commande permet de nous donner le code source d'une erreur 404, d'une page non trouvé et de savoir si elle est fonctionnel.

5) Fait sur machine perso.

6)  **A revoir**

## Question 10

Host : Indique l'hôte (nom de domaine) et le port du serveur.

Exemple : Host: www.example.com
User-Agent : Fournit des informations sur le client (navigateur, OS, etc.).

Exemple : User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36
Accept : Spécifie les types de contenu acceptés par le client.

Exemple : Accept: text/html,application/xhtml+xml
Accept-Encoding : Indique les encodages de contenu acceptés (gzip, deflate).

Exemple : Accept-Encoding: gzip, deflate
Accept-Language : Précise la langue préférée du client.

Exemple : Accept-Language: en-US,en;q=0.9,fr;q=0.8
Authorization : Contient les informations d'authentification pour l'accès sécurisé.

Exemple : Authorization: Basic QWxhZGRpbjpvcGVuIHNlc2FtZQ==
Cookie : Envoie des cookies stockés dans le navigateur vers le serveur.

Exemple : Cookie: sessionId=38afes7a8
Referer : Indique l'URL de la page d'origine de la requête.

Exemple : Referer: https://www.example.com/previous-page
Connection : Indique si la connexion doit être maintenue ouverte.

Exemple : Connection: keep-alive
Content-Type : Spécifie le type de contenu envoyé dans la requête.

Exemple : Content-Type: application/json

