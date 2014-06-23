cd /var/www/ChancerosUTB
git pull --rebase
cd /var/www/ChancerosUTB/backend
php artisan migrate
chown -R www-data:www-data *
