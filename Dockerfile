FROM php:8.2-cli

COPY . /usr/src/myapp

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /usr/src/myapp

RUN apt-get update && apt-get install -y libxslt-dev libzip-dev \
    && docker-php-ext-install bcmath intl xsl soap zip \
    && docker-php-ext-enable bcmath intl xsl soap zip

RUN composer install

CMD [ "php", "bin/console", "app:test-soap" ]
