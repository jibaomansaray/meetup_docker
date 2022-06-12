FROM php:cli

# Use RUN to setup the image

# RUN apt-get update && apt-get -y install curl vim
# RUN echo 'memory_limit = 2G' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini

COPY --chown=www:www-data . /var/www

WORKDIR /var/www

RUN php /var/www/fetch.php
EXPOSE 80

ENTRYPOINT ["php", "-S", "0.0.0.0:80"]