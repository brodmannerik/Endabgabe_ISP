1. run `npm i`
2. add `.env` next to the README.md file
3. add content from this example file: https://github.com/laravel/laravel/blob/master/.env.example
4. add DB name in .env -> DB_DATABASE= (your local db name)
5. add `STRIPE_SK=` (secretkey) & `STRIPE_PK=` (publickey) with your stripe keys inside .env
6. run `php artisan key:generate`
7. run `composer install`
8. run `php artisan migrate`
9. run `php artisan db:seed`
10. run `php artisan migrate:refresh --seed`
11. run `php artisan serve`
