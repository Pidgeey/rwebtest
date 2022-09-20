# Installation du projet
## Dépendances composer
Installation des packages via composer
```
composer install
```
Ensuite, création du fichier `.env` à partir d'une copie du `.env.exemple`
```
cp .env.example .env
```
Puis génération de la clé
```
php artisan key:generate
```

## Build front
Initialisation du front pour lancer le build
```
npm install
```
Puis lancement du build
```
nom run buid
```

## Lancement du serveur
Lancement du serveur local via l'outil ``artisan``
```
php artisan serve
```
Accès au projet via l'ip fourni dans le log artisan du terminal
