sleep 10
wp config create --allow-root --dbname=$SQL_DATABASE --dbuser=$SQL_USER --dbpass=$SQL_PASSWORD --dbhost=mariadb:3306 --path='/var/www/wordpress'
wp core install --url=$DOMAIN_NAME --tittle=$WP_TITTLE --admin_user=$WP_USER --admin_password=$WP_PASSWORD --admin_email=$WP_EMAIL

if [ ! -d "/run/php" ]; then
    sudo mkdir -p /run/php
fi