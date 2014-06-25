cd /var/www/ChancerosUTB
git reset --hard
cd /var/www/ChancerosUTB/backend
php artisan migrate:reset
php artisan migrate
php artisan db:seed
chown -R www-data:www-data *
