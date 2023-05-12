# Dockeriser votre application de séquence intensive

1. Réussir à copier tout votre répertoire projet dans une image docker appelée "si3" OU alors faire un bind mount entre le répertoire et votre projet
2. Vous devriez pouvoir faire (à adapter ;) ) "docker run si3 php index.php"
3. Pour connecter mysql, vous devez juste a. avoir wamp qui tourne et b. modifier 127.0.0.1 ou localhost par `host.docker.internal`