FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    mariadb-client \
    locales \
    vim \
    curl

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql

RUN docker-php-ext-install mysqli

WORKDIR /app/

EXPOSE 9000

CMD ["php-fpm"]
