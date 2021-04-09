@include( "includes.header" )

<div id="page">

    @yield( "content" )

</div>

@section( "fixed-sidebar" )
    @include( "includes.sidebar" )
@show

@include( "includes.footer" )
