FROM php:8.2-apache

# Copiar todos los archivos
COPY . /var/www/html/

# Habilitar mod_rewrite si lo necesitas
RUN a2enmod rewrite

# Exponer puerto 80
EXPOSE 80
