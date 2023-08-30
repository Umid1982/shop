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

DB_HOST=167.172.100.243

DB_PORT=3306

DB_DATABASE=test

DB_USERNAME=kfc

DB_PASSWORD=RHYFr&rh9+4X4m{P

Other settings (Commands in the project folder)

php artisan migrate --seed (Runs the database migrations)

php .\artisan tinker (Tinker allows you to fully interact with an entire Laravel application from the command line)

$user = User::first();

$user->createToken('auth-token')->plainTextToken; (create token for user)
