<!DOCTYPE html>
<html lang="en-gb">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield( "title" ) | Dummy Docs</title>

    <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>

<body>

<header>

    <div class="container">

        <h1>
            <span style="color: #4d4d4d">Dummy</span><span style="color: #eb4d4b">Docs</span>
            <span style="display: block; font-size: 1rem; font-style: italic;">Really Simple Laravel Docs</span>
        </h1>

    </div>

</header>

<main>

    <div class="container">

        @section( "content" )
        @show

    </div>

</main>

<footer>

    <div class="container"></div>

</footer>

</body>

</html>
