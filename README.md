# laravel heroku demo

version: PHP 8.0.x

## Setup

```bash
composer install

cp .env.example .env

cp scratch.http.example scratch.http

php artisan key:generate
```

## Start

```bash
php artisan serve
```

## Unit Test

```bash
vendor/bin/phpunit
```
