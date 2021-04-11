# Installation/Setup

To install Laravel, you can use Composer. Run the following command to install the Laravel installer globally:

```
composer global require laravel/installer
```

You can then use the following command to create a new Laravel application:

```
laravel new ProjectName
```

Once inside your Laravel project's directory, it's worth running `composer install`, `npm install` and `composer update` before using
the following command to serve the website:

```
php artisan serve
```

By default, you can view the application at `127.0.0.1:8000`. To change the port, you can set `SERVER_PORT` in your `.env` file.

On occasions, I have run into a `RuntimeException` with the issue
`No application encryption key has been specified`. If this happens, `ctrl + c` to stop serving your application and run the command
`php artisan key:generate` before serving the application again.

> ### Reference
> 
> - <a href="https://laravel.com/docs/8.x/installation">Installation (Laravel Docs)</a>
