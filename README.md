System requirements

DBMS: MySql

PHP 8.1

Install Composer

composer install

composer update

Rename file

.env.example to .env

Change .env file

DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=shop

DB_USERNAME=root

DB_PASSWORD=root

Other settings (Commands in the project folder)

php artisan migrate --seed (Runs the database migrations)

php .\artisan tinker (Tinker allows you to fully interact with an entire Laravel application from the command line)

$user = User::first();

$user->createToken('auth-token')->plainTextToken; (create token for user)
