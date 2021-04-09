# Simple Laravel Docs

I'm using mix to compile assets from the `resources` directory to the `public` directory with:

```
mix.js( "resources/js/app.js", "public/js" ).postCss( "resources/css/style.css", "public/css" );
```

Then I run two separate terminals, one running `npm run watch` and the other running `sass --watch scss:css` 
inside the `resources` directory.

I have another two terminals open, one permanently running `php artisan serve` and the other for browsing and other commands.

It works really seamlessly, but I'm pretty sure this isn't the correct or "Laravel way".
