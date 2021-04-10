<!DOCTYPE html>
<html lang="en-gb">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title ?? "Really Simple Laravel Docs" }} | Dummy Docs</title>

    <!-- typekit font for code blocks -->
    <link rel="stylesheet" href="https://use.typekit.net/hix1sdc.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    @if( Route::is( "docs.*" ) )
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/styles/default.min.css">

        @push( "footer-scripts" )
            <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.2/highlight.min.js"></script>
            <script type="text/javascript">
                hljs.highlightAll();
            </script>
        @endpush
    @endif

</head>

<body>

<header>

    <div class="container">

        <div id="logo-container">

            <h1 id="logo">
                <a href="/"><span id="logo-main"><span style="color: #4d4d4d">Dummy</span><span style="color: #eb4d4b">Docs</span></span></a>
                <span style="display: block; font-size: .9rem; font-style: italic; font-weight: 300; line-height: 2rem;">Really Simple Laravel Docs</span>
            </h1>

        </div>

    </div>

</header>

<main>

    <div class="container">
