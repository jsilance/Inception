sleep 10
sudo -u root -i -- wp config path 2>/dev/null
if [ $? -eq 1 ]; then
    sudo -u root -i -- wp core download --allow-root --path=/var/www/wordpress
    sudo -u root -i -- wp config create --dbname=$SQL_DATABASE --dbuser=$SQL_USER --dbpass=$SQL_PASSWORD --dbhost=mariadb:3306 --path='/var/www/wordpress'
    sudo -u root -i -- wp core install --allow-root --url=$DOMAIN_NAME --tittle=$WP_TITTLE --admin_user=$WP_USER --admin_password=$WP_PASSWORD --admin_email=$WP_EMAIL
    sudo -u root -i -- wp user create $WP_USER $WP_EMAIL --user_pass=$WP_PASSWORD --display_name=$WP_USER
fi

if [ ! -d "/run/php" ]; then
    sudo mkdir -p /run/php
fi