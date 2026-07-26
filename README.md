# Laravel starter for Wodby

A production-ready starting point for the
[Wodby Laravel service](https://github.com/wodby/service-laravel-php) and
[Laravel stack](https://github.com/wodby/stack-laravel).

The starter follows the official Laravel 13 application skeleton and includes:

- a responsive deployment-status landing page
- a lightweight health endpoint at `/healthz`
- feature tests for the landing page and health endpoint
- GitHub Actions tests on PHP 8.3, 8.4, and 8.5
- compatibility with the Wodby CI pipeline supplied by the Laravel service

## Local development

Install PHP 8.3 or newer, Composer, Node.js, and npm, then run:

```shell
composer run setup
composer run dev
```

Open http://localhost:8000. The health endpoint is available at
http://localhost:8000/healthz.

Run the application tests with:

```shell
php artisan test
```

## Start building

The root route in `routes/web.php` renders the starter landing page from
`resources/views/welcome.blade.php`. Replace that route and view as your
application takes shape.

Laravel's generators can create the first pieces of your domain:

```shell
php artisan make:controller HomeController
php artisan make:model Product -m
```

Wodby supplies the application key, URL, database connection, and other runtime
settings to deployed applications. Keep environment-specific secrets out of the
repository and configure additional values through the Wodby application
environment.

See the [Laravel documentation](https://laravel.com/docs/13.x) and
[Wodby documentation](https://wodby.com/docs/2.0/) for the next steps.

## Upstream

This repository is maintained from the
[official Laravel application skeleton](https://github.com/laravel/laravel).
Wodby keeps the framework structure conventional while maintaining the
deployment-facing starter experience and validation.

## License

Laravel and this starter are open-sourced software licensed under the
[MIT license](LICENSE.md).
