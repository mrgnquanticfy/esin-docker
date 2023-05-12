```Dockerfile
# Dockerfile
# je commence par télécharge alpine
FROM alpine:3.14  

# commande intermédiaire de génération de mon image : installer mysql
RUN apk add --no-cache mysql-client
 
# mon programme principal sera mysql
CMD ["whoami"]
```


## Nos commandes principales

1. Build

`docker build --tag nom_de_votre_image .` 

SUR WINDOWS: `docker buildx build --tag esindocker . `

Version courte: on remplace `--tag` par `-t`

2. Run
- ` docker run nom_de_votre_image `
- ` docker run --interactive -tty nom_de_votre_image /bin/sh `  -> ctrl+d pour sortir
- --> si jamais vous mettez l'option "t" sans l'option "i"... vous serez bloqué :) il faut fermer le terminal à la mano

Version courte: on remplce `--interactive --tty` par `-it`


## Relier le filesystem : volumes et bind-mounts

```bash 
# source doit être un chemin absolu vers le dossier à partager
# target doit être un chemin absolu vers le dossier qui va héberger la source
docker run \
    --mount type=bind,source="/home/moka/esindocker",target=/app  \
    esindocker \
    ls;
```

Vous devriez pouvoir faire : 

```bash
docker run \
    --mount type=bind,source="/home/moka/esindocker",target=/app  \
    esindocker \
    php app/testbindmount.php;
``` 

et voir apparaitre : `this is my bind mount`


Pour débugger facilement : 

```bash
docker run \
    --mount type=bind,source="/home/moka/esindocker",target=/app  \
    -it \
    esindocker \
    /bin/sh;
```     
