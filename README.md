## Web Server
DocumentRoot /base-dir/public

## Depenedencies
```
composer install
```

## Database
Create database with settings in .env

The database can be populated with the following commands:
```sh
php artisan migrate
composer dump-autoload
php artisan db:seed --class=PropertiesSeeder
```
