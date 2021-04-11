@include( "includes.header" )

<div id="page">

    @yield( "content" )

</div>

@if( !Route::is( "docs.*" ) )
    <div id="section-bottom">
@endif

@section( "fixed-sidebar" )
    @include( "includes.sidebar" )
@show

@if( !Route::is( "docs.*" ) )
    </div>
@endif

@include( "includes.footer" )
