# Dockeriser votre application de séquence intensive

1. Réussir à copier tout votre répertoire projet dans une image docker appelée "si3" OU alors faire un bind mount entre le répertoire et votre projet
2. Vous devriez pouvoir faire (à adapter ;) ) "docker run si3 php index.php"
3. Pour connecter mysql, vous devez juste a. avoir wamp qui tourne et b. modifier 127.0.0.1 ou localhost par `host.docker.internal`

# Le projet de l'ESIN

## Un projet homogène en développement

au 2023/05/19

Les services : 
- wamp:  (Windows, Apache, Mysql, Php)
- php -> PHP
- sql -> MySQL
- apache -> Apache HTTPD Web Server

Librairies et dépendances : 
- pas de yarn / npm

Votre structure des fichiers : 
```
/traitements
  connexion_admin.php
  inscription_admin.php # form ?
  ajout_joueur.php # form
  modification_joueur.php # form
/composants
  bdd.php # permet de se connecter à la base de données
  ...classes qui utilisent la base de données
index.php
```

## objectif : un boilerplate

qui peut démarrer 3 logiciels simplement : 
- apache http
- mysql
- php

qui contient des fichiers de base : 
- index.php
- un répertoire de lien avec ma base de données
- un répertoire de composants

Une structure des fichiers : 
```
/app                    # contient mes fichiers PHP, mon "application"
  /components               # mes briques applicatives
  /public                   # mon code front, mes fichiers publics
  index.php
/docker                 # contient la config et la data de Docker
  /php
  /mysql
  /apache
docker-compose.yml
```