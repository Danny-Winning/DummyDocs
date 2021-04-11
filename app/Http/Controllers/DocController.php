<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Parsedown;

class DocController extends Controller
{

    public function getDoc( $doc )
    {

        $path = __DIR__ . "/../../../resources/docs/$doc.md";

        if ( !file_exists( $path ) )
            abort( "404" );

        /**
         * Basic caching. Obviously make it longer than 5 seconds in production.
         */
        $document = cache()->remember( "docs.{$doc}", 5, function() use ( $path, $doc ){

            // Markdown parser.
            $parser = new Parsedown();

            // Returns: Markdown as HTML, $doc as array split by "-"
            return [ $parser->text( file_get_contents( $path ) ), explode( "-", htmlspecialchars( $doc ) ) ];

        });

        return view( "docs.single", [
            "html" => $document[ 0 ],
            "title" => ucwords( implode( " ", $document[ 1 ] ) ),
            "page_class" => "doc"
        ]);

    }

}
