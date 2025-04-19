FROM php:8.3-apache

# 必要なパッケージのインストール
RUN apt-get update && apt-get install -y \
    git unzip libicu-dev libonig-dev libzip-dev libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install intl opcache pdo pdo_mysql zip gd

# composerファイルのコピー（/var/www/html/composer.json）
COPY composer.* /var/www/html/

# Drupalのソースコードをコピー（/var/www/html/web）
COPY web /var/www/html/web

# Webルートをワーキングディレクトリに設定
WORKDIR /var/www/html

# composer installを実行
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    composer install --no-dev --optimize-autoloader

# Drupalの必要ディレクトリ作成
RUN mkdir -p /var/www/html/web/sites/default/files && \
    chown -R www-data:www-data /var/www/html/web/sites && \
    a2enmod rewrite

# ポートの設定
ENV PORT=8080
RUN echo "Listen 8080" >> /etc/apache2/ports.conf && \
    sed -i 's/<VirtualHost \*:80>/<VirtualHost *:8080>/' /etc/apache2/sites-available/000-default.conf
EXPOSE 8080

# ApacheのDocumentRootを変更
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/web|' /etc/apache2/sites-available/000-default.conf

# AllowOverrideを許可する設定
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

CMD ["apache2-foreground"]