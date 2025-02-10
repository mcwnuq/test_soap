FROM php:8.2-cli

COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

RUN rm -r vendor

RUN apt-get update && apt-get install -y libxslt-dev libzip-dev \
    && docker-php-ext-install bcmath intl xsl soap zip \
    && docker-php-ext-enable bcmath intl xsl soap zip

RUN composer install

CMD [ "php", "bin/console", "app:test-soap" ]
