cd /var/www/ChancerosUTB
git reset --hard
cd /var/www/ChancerosUTB/backend
php artisan migrate
chown -R www-data:www-data *
