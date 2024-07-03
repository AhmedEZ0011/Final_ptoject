cd %cd%
php artisan migrate:fresh
php artisan db:seed --class=DepartmentSeeder
php artisan db:seed --class=UsersTableSeeder