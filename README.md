# Laravel version of Therapion
[Old website version](https://www.therapion.com/) of Therapion

## Installation
```bash
composer install
# env setting
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
php artisan serve
# localhost:8000
```