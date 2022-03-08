echo "Docker is started up!"

# Install the composer package 
composer install

# Make the apache run in foreground, and prevent it from exiting
exec apache2-foreground