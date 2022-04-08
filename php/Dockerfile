FROM php:7.4-fpm
RUN apt-get -y update; \
    apt-get -y upgrade;
RUN apt-get install -y --no-install-recommends  libpq-dev libpq5 \
    && docker-php-ext-install pgsql \
    && apt-get purge -y --auto-remove libpq-dev \
    && rm -rf /var/lib/apt/lists/*
