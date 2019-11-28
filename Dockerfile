FROM php:7.3-apache
COPY . /var/www/html
RUN apt-get update
RUN apt-get install -y git
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
RUN rm /etc/apache2/sites-available/000-default.conf
COPY config/apache/virtualhost.config /etc/apache2/sites-available/000-default.conf