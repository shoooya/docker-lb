FROM php:7.3.0-fpm-alpine3.8
WORKDIR /var/www/example
RUN apk add icu-dev &&\
    docker-php-ext-install intl pdo_mysql
RUN curl -s http://getcomposer.org/installer | php && \
    mv composer.phar /bin/composer
