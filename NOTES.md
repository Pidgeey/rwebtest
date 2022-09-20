# Retour du test technique
Je vous fais un petit retour sur le test technique en vous présentant mon approche,
mes choix et les axes que j'aurais aimé améliorer. 

## Technos/Outils:
### Laravel
Aucun soucis la dessus, je connais plutôt bien le framework dans son ensemble.
Je l'ai cependant quasiment utilisé pour des micro-services api et non dans un pattern MVC. J'ai donc
eu besoin de me remettre un peu en tête le fonctionnement des views et de blade. 

### Livewire
Je n'en avais jamais entendu parlé avant notre entretien. Globalement du au fait que j'ai été déconnecté
un peu de Laravel et ses nouveautés pendant quelques temps. 

J'ai trouvé que l'outil était très utile pour rendre des vues dynamiques sans la contrainte de devoir installer
et maintenir une application front et les apis. Je n'ai pas été voir le fonctionnement en profondeur de 
Livewire mais je rencontre énormement de similitudes avec VueJs que je connais bien également. J'y ai donc
retrouvé une certaine logique (comme les events, les props, les actions)

### Tailwind
C'est le framework d'intégration que j'utilise régulièrement lorsque des besoins d'intégrations sont 
assez importants (dont l'intégration de vues mobiles). Je connais assez bien son fonctionnement et les bases
, mais tout en étant loin d'être un génie.. 

### Tallstack
J'ai préferé initialiser les technos une à une plutôt que d'utiliser un outil comme celui ci afin de pouvoir
paramétrer les outils livewire et tailwind(sur un laravel) que je ne maitrise pas.

## Initialisation
J'initialise Livewire et Tailwind comme le précise la documentation. Sans aucune encombres. Doc parfaite.

## Développement
Dans un premier temps, j'essaie de me familiariser avec Livewire que je connais pas. Je suis la doc, 
je bidouille pour voir un peu le fonctionnement de la bête etc.. 

Une fois une petite base Livewire en place, je me tourne vers la documentation Coingecko. Après un petit tour
d'horizon, je m'apercois qu'un client PHP existe et me permettrais de gagner du temps.
Je fais le choix de créer une Librairie de zéro afin de montrer la manière donc je mets en place
une api externe. 

Voici les features que je propose dans mon test:
- Affichage d'une liste de coins
  - Tri sur la liste par market_cap
  - Affichage des montants en fonction de la devise sélectionnée
  - Query search sur les coins
  - Clic sur le coin afin d'afficher le détail de celui ci
- Affichage du détail d'un coin
  - Affichage des montants en fonction de la devise sélectionnée

Coté intégration:
- Responsive mobile et tablette
- Gestion des couleurs dynamique des montants (rouge si négatif, vert si positif)
- Et pis bah c'est tout 🤷‍♂️

## Erreurs
Je n'ai pas réussi à débug une erreur que j'ai lorsque j'effectue certaines updates. (Tentative hydrate)
Exemple: tri de la liste par ordre croissant, puis décroissant déclanche cette erreur. 

## Améliorations
### Collections
A la base, je souhaitais mettre en place des collections comprenant des DTO pour initaliser les objets
récupérés depuis l'api, les place dans une collection afin d'utiliser les méthodes proposées par Laravel. 
Je comptais par la suite utiliser cette collection afin de mettre en place des tris dynamiques sur les résultats:
tri sur les prix, les montants, ordre alphabétique, etc... Mais je n'ai pas réussi à faire cohabiter les collections de
DTO et les méthodes de tris.. j'ignore encore pourquoi... après avoir passer pas mal de temps à essayer de faire
fonctionner cette idée, je décider de laisser tomber les collections et d'utiliser les résultats sous forme
de tableau, d'une manière très classique. 

### Méthodes Javascript
J'aurais aimé mettre en place des méthodes/helpers écrites en javascript dans les components afin de
faciliter l'affichage de certaines parties (classes, virgules dans les montants, ...) Je n'ai pas trouvé
de manire évidentes de mettre en place ceci. (Peut être Alpine.js disponible dans Tallstack ?)

### Charts
J'ai fait un peu de veille afin de mettre en place des charts comme dans les exemples de sites coins. 
J'y avais trouvé une techno en JS pour le faire. Vu le petit soucis que j'avais d'inclure le javascript
dans mes composants, je me suis dis que c'était peut être très pertinent de perdre du temps la dessus. 

### Gestion de la langue dans l'url
J'ai remarqué que la récupération des données d'un coin proposait pas mal d'infos en fonction de la 
langue courante. J'ai commencé à mettre en place un affichage dynamique en fonction de la région dans l'url
(/fr/coin/bitcoin) mais j'ai remarqué beaucoup de langues n'étais pas traduites. J'ai donc décidé de ne pas
le mettre en place. 

### Pagination
J'aurais voulu mettre en place une pagination. J'aurais utilisé les paramètres `per_page` et `page` de l'api 
Coingecko. J'ai préferé me concentrer sur le reste étant donné que j'effectue déjà des updates de la liste
avec d'autres fonctionnalités (currency, ids)

## Conclusion
Test plutôt intéressant. Ca m'a fait plaisir de revenir sur un "projet" comprenant du back et une intégration.
Cela fesait très longtemps que je n'avais pas fait autre chose que de l'api et du micro-service. 
C'était également intéressant de découvrir Livewire. En revanche, ma connaissance dans les cryptos monnaie
étant inexistante.. un peu perdu quand à la pertinence des données à afficher. 

J'ai clairement toujours eu du mal à faire de l'intégration de 0. Je n'ai pas beaucoup d'imagination pour
créer des pages sans avoir de maquette. 

Etant donné le peu d'activité que j'ai niveau intégration, j'ai pris beaucoup de temps à mettre en place le peu
d'intégration présent.. j'aurais clairement besoin de pratique régulière afin de prendre moins de temps de ce coté.
