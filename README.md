#Vecchio Maximiliano

composer install
php artisan migrate
php artisan db:seed RoleSeeder
php artisan db:seed UserSeeder
php artisan db:seed PropertySeeder
php artisan db:seed PropertyCharacteristicsSeeder