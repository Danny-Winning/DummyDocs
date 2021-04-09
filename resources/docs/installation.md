## Installation/Setup

To install Laravel, you can use Composer. Run the following command to install the Laravel installer globally:

```
composer global require laravel/installer
```

You can then use the following command to create a new Laravel application:

```
laravel new ProjectName
```

Once inside your Laravel projects directory, it's worth running `composer install` and `composer update` before using
the following command to serve the website:

```
php artisan serve
```

By default, you can view the application at `127.0.0.1:8000`. On occasions, I have run into a `RuntimeException` with the issue
`No application encryption key has been specified`. If this happens, `CTRL + C` to stop serving your application and run the command
`php artisan key:generate` before serving the application again.
