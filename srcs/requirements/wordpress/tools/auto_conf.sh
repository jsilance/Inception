# sleep 10
# cd wordpress
echo "Check if config exist"
wp config path #2>/dev/null
if [ $? -eq 0 ]; then
    echo "Config exist, skip install"
else
    echo "Create config"
    wp config create --dbname=$SQL_DATABASE_NAME --dbuser=$SQL_USER --dbpass=$SQL_PASSWORD --dbhost=$SQL_DATABASE_HOST
    wp core install --url=$DOMAIN_NAME --title="$WP_TITTLE" --admin_user=$WP_USER --admin_password=$WP_PASSWORD --admin_email=$WP_EMAIL
    # wp user create $WP_USER $WP_EMAIL --user_pass=$WP_PASSWORD --display_name=$WP_USER
fi

php-fpm7.3 -F