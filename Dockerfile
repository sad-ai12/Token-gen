FROM php:8.2-apache

# ফাইলগুলো কপি করা
COPY . /var/www/html/

# পারমিশন ঠিক করা
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

EXPOSE 80
