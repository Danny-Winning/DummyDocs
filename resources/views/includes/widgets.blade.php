<div id="widgets">

    @foreach( \Illuminate\Support\Facades\File::files( base_path( "/resources/views/widgets" ) ) as $widget )

        <div class="widget">

            @include( "widgets." . str_replace( ".blade.php", "", $widget->getFilename() ) )

        </div>

    @endforeach

</div>
