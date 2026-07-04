# Utilise l'image officielle PHP avec Apache
FROM php:8.2-apache

# Copie tous les fichiers de votre projet dans le dossier du serveur web
COPY . /var/www/html/

# Expose le port 80 pour le web
EXPOSE 80