FROM php:apache

# Enable "mod_headers" – http://httpd.apache.org/docs/current/mod/mod_headers.html
RUN a2enmod headers

COPY . /var/www/html/
RUN mkdir -p /var/www/html/logs
RUN chmod -R 777 /var/www/html/logs