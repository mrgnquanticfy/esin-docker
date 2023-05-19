# je commence par télécharge alpine: une distribution linux très très légère
FROM alpine:3.14  

# installer mysql
RUN apk add --no-cache php

COPY index.php ./

# mon programme principal sera d'executer un serveur php
CMD ["php", "-S", "0.0.0.0:9999"]


# nos commandes principales : 
# - `  docker build -t nom_de_votre_image . `
# - SUR WINDOWS: `docker buildx build -t esindocker . `
# attention, on met pas de i pour le build
#
#
# - ` docker run nom_de_votre_image `
# - ` docker run -it nom_de_votre_image /bin/sh `  -> ctrl+d pour sortir
#  --> si jamais vous mettez l'option "t" sans l'option "i"... vous serez bloqué :) il faut fermer le terminal à la mano