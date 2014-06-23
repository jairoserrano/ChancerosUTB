cd /var/www/ChancerosUTB
git pull --rebase
php artisan migrate
chown -R www-data:www-data *
