FROM wordpress:5.2.2

RUN set -xe \
#    && rm -rf /var/www/html/wp-content \
#    && mkdir /var/www/html/wp-content \
    && chmod -R 777 /var/www/html \
    && ls -la

RUN apt-get update && apt-get install -y wget git unzip \
    && pecl install xdebug-2.7.1 \
    && docker-php-ext-enable xdebug

ADD ./etc/php.ini /usr/local/etc/php/php.ini

ADD ./etc/wp-config.php /var/www/html/wp-config.php