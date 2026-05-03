# Use the official PHP image as the base image
FROM php:7.4-apache

# Enable rewrite module
RUN a2enmod rewrite

# Copy the application code to the container's working directory
COPY . /var/www/html

# Set the working directory
WORKDIR /var/www/html

# Expose port 80 for Apache
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
