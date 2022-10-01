FROM curedao/php7.4-fpm-xdebug:0.0.1
#FROM php:7.4-fpm
MAINTAINER Mike P. Sinn "m@curedao.org"

#RUN apt-get update

RUN docker-php-ext-install sockets

RUN chmod +x vendor/mikepsinn/php-highcharts-exporter/phantomjs || true

RUN apt-get install -y htop

# Install Doppler CLI
#RUN apt-get install -y apt-transport-https ca-certificates curl gnupg && \
#    curl -sLf --retry 3 --tlsv1.2 --proto "=https" 'https://packages.doppler.com/public/cli/gpg.DE2A7741A397C129.key' | apt-key add - && \
#    echo "deb https://packages.doppler.com/public/cli/deb/debian any-version main" | tee /etc/apt/sources.list.d/doppler-cli.list && \
#    apt-get update && \
#    apt-get -y install doppler

# Fetch and view secrets using "printenv". Testing purposes only!
# Replace "printenv" with the command used to start your app, e.g. "npm", "start"
#CMD ["doppler", "run", "--", "printenv"]

# Install Postgre PDO
#RUN apt-get install -y libpq-dev \
#    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
#    && docker-php-ext-install pdo pdo_pgsql pgsql
#
#RUN apt-get install -y libgmp-dev
#RUN docker-php-ext-install gmp
#
#RUN apt-get install -y \
#libpng-dev \
#zlib1g-dev \
#libxml2-dev \
#libzip-dev \
#libonig-dev \
#zip \
#curl \
#unzip \
#libfontconfig \
#&& docker-php-ext-configure gd \
#&& docker-php-ext-install -j$(nproc) gd \
#&& docker-php-ext-install pdo_mysql \
#&& docker-php-ext-install mysqli \
#&& docker-php-ext-install zip \
#&& docker-php-ext-install intl \
#&& docker-php-ext-install exif \
#&& docker-php-source delete
#
#RUN apt-get update && apt-get install -y default-mysql-client \
#  git \
#  libpng-dev \
#  libjpeg-dev \
#  libfreetype6-dev \
#  libxml2-dev \
#  libcurl4-openssl-dev \
#  zlib1g-dev && rm -rf /var/lib/apt
#
#RUN docker-php-ext-configure gd --with-freetype --with-jpeg
#
#RUN apt-get update && apt-get install -y libjpeg-dev libpng-dev
#
#RUN docker-php-ext-configure gd --enable-gd --with-jpeg
#
#RUN docker-php-ext-install gd
#
#RUN pecl install xdebug \
#    && docker-php-ext-enable xdebug
#
#RUN docker-php-ext-install pdo_mysql \
#    && docker-php-ext-install json
#
#RUN pecl install -o -f redis \
#    && rm -rf /tmp/pear \
#    && docker-php-ext-enable redis
#
#RUN apt-get update && \
#  curl -sS https://getcomposer.org/installer | php \
#  && chmod +x composer.phar && mv composer.phar /usr/local/bin/composer



#COPY composer.json composer.lock ./
#RUN composer install --no-scripts --no-autoloader

#COPY . .
#RUN chmod +x artisan

#RUN composer dump-autoload --optimize && composer run-script post-install-cmd

#CMD php artisan serve --host 0.0.0.0 --port 5001
