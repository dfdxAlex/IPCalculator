FROM php:cli

RUN docker-php-ext-install mysqli

WORKDIR /app

COPY . .
