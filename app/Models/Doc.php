<?php

namespace App\Models;

class Doc
{

    public static function get( $name )
    {

        $path = resource_path( "docs/$name.md" );

        if ( !file_exists( $path ) )
            abort( "404" );

        return cache()->remember( "docs.{$name}", 5, function() use ( $path, $name ){

            // Markdown parser.
            $parser = new \Parsedown();

            // Returns: Markdown as HTML, $doc as array split by "-"
            return [ $parser->text( file_get_contents( $path ) ), explode( "-", htmlspecialchars( $name ) ) ];

        });

    }

}
