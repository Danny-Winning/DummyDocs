# Simple Laravel Docs

I'm using mix to compile assets from the `resources` directory to the `public` directory with:

```
mix.js( "resources/js/app.js", "public/js" ).postCss( "resources/css/style.css", "public/css" );
```

Then I run two separate terminals, one running `npm run watch` and the other running `sass --watch scss:css` 
inside the `resources` directory. Pretty sure this isn't the right way to do it.
