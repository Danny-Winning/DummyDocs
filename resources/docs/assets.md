---
title: Compiling Assets
order: 3
---


# Compiling Assets

For simple apps, you can store CSS and other assets inside your apps `public` folder. Otherwise, it's recommended to make use of the
`resources` directory.

Laravel uses mix (created by Jeffrey Way) to compile assets using webpack and includes a few useful features that can help ease 
asset development.

```
mix.js( "resources/js/app.js", "public/js" )
    .postCss( "resources/css/style.css", "public/css" );
```

> ### Reference
>
> - <a href="https://laravel.com/docs/8.x/mix" target="_blank">Compiling Assets (Laravel Docs)</a>
> 
