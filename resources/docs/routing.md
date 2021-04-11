# Routing

> When creating a new project, uncomment **line 29** in `app/Providers/RouteServiceProviders.php`:
>
> ```
> // protected $namespace = 'App\\Http\\Controllers';
> ```
>
> Else you will need to either `use App\Http\Controllers` or include that in your route definitions when routing
> to a controller. Not ideal.

Your web routes are defined in `routes/web.php`. The most basic way to define a route is to pass the `Route::get` method an endpoint
and a function to call:

```
Route::get( "/", function(){
    return "Hello, world!";
});
```

Routes can also return views:

```
Route::get( "/", function(){
    return view( "index" );
});
```

Laravel uses the <a href="/docs/blade">Blade</a> templating engine. The above route would look for the file 
`index.blade.php` inside the `resources/views` directory.

Laravel also allows you to easily create dynamic routes:

```
Route::get( "posts/{post}", function() {
    return view( "post" );
});
```

We can name our routes, useful for displaying conditional information in our views:

```
Route::get( "posts/{post}", function() {
    return view( "post" );
})->name( "posts.*" );
```

We can pass the dynamic part of the URI to the function and then pass it to the view:

```
Route::get( "posts/{post}", function( $post ){
    $post = file_get_contents( resource_path( "posts/$post.html" ) );
    
    return view( "post", [ "post" => $post ] );
});
```

## Routing to a Controller

For routes that need to do something more than display a simple view, it's recommended to use a controller:

```
Route::get( "posts/{post}", "PostController@showSinglePost" );
```

The above looks for the `showSinglePost` method of the `PostController`. Controllers are stored in `app/Http/Controllers` and can be
created manually, or more conveniently with the console command:

```
php artisan make:controller ControllerName
```

> ### Reference
> 
> - <a href="https://laravel.com/docs/8.x/routing" target="_blank">Routing (Laravel Docs)</a>
