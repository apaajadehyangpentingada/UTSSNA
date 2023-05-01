FROM php:8.1.16-apache AS redlockweb2

RUN docker-php-ext-install mysqli

WORKDIR /var/www/html
COPY index.php /var/www/html

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R o-wx /var/www/html

EXPOSE 80


FROM mysql:latest AS redlocksql

COPY redlock-db.sql /docker-entrypoint-initdb.d/

ENV MYSQL_ROOT_PASSWORD=redlock
