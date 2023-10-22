FROM php:7.4-apache
COPY kickstats.conf /etc/apache2/sites-available
RUN a2dissite 000-default
RUN a2ensite kickstats
COPY public /var/www/html