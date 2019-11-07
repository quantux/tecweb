FROM php:7.1.2-apache 
RUN docker-php-ext-install mysqli

# apt-get
RUN apt-get update -y
RUN apt-get install libxml2-dev php-soap -y
RUN apt-get clean -y

# soap install
RUN docker-php-ext-install soap


