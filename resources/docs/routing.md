## Routing

> When creating a new project, uncomment **line 29** in `app/Providers/RouteServiceProviders.php`:
>
> ```
> // protected $namespace = 'App\\Http\\Controllers';
> ```
>
> Else you will need to either `use App\Http\Controllers` or include that in your route definitions when routing
> to a controller. Not ideal.

Your web routes are defined in `/routes/web.php`. The most basic way to define a route is to pass the `Route::get` method an endpoint
and a closure:

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

### Routing to a Controller

<a href="https://stackoverflow.com/questions/44212318/laravel-blade-advantage-of-slot-component-vs-include" target="_blank">Blade: Slots/Components vs @include</a>
