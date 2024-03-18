# Utiliser une image de base contenant PHP et Apache
FROM php:8.2-apache


# Définir le répertoire de travail dans le conteneur
WORKDIR /var/www/html

# Copier les fichiers du projet Laravel dans le conteneur
#COPY . .
COPY . /var/www/html




# Définir les permissions pour tous les répertoires et fichiers
#RUN chmod -R 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

# Installer les dépendances nécessaires pour Laravel
RUN apt-get update && \
    apt-get install -y libpng-dev libjpeg-dev zip unzip && \
    docker-php-ext-configure gd --with-jpeg && \
    docker-php-ext-install gd pdo_mysql

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Installer les dépendances PHP via Composer
RUN composer install

# Exposer le port 80 (Apache)
EXPOSE 80

# Commande à exécuter lorsque le conteneur démarre
CMD ["apache2-foreground"]

