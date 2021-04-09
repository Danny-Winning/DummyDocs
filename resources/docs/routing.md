## Routing

> When creating a new project, uncomment **line 29** in `app/Providers/RouteServiceProviders.php`:
>
> ```
> // protected $namespace = 'App\\Http\\Controllers';
> ```
>
> Else you will need to either `use App\Http\Controllers` or include that in your route definitions. Not ideal.

Your web routes are defined in `/routes/web.php`. The most basic way to define a route is to pass the `Route::get` method an endpoint
and a closure:

```
Route::get( "", function(){
    return "Hello, world!";
});
```

Routes can also return views, which are stored in the `resources/views` directory as **blade** template files:

```
Route::get( "", function(){
    return view( "index" );
});
```

<a href="https://stackoverflow.com/questions/44212318/laravel-blade-advantage-of-slot-component-vs-include" target="_blank">Blade: Slots/Components vs @include</a>
