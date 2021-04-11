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

        $title_array = explode( "-", htmlspecialchars( $doc ) );

        /**
         * Basic caching. Obviously make it longer than 5 seconds in production.
         */
        $html = cache()->remember( "docs.{$doc}", 5, function() use ( $path ){
            var_dump( "file_get_contents" );
            $parsedown = new Parsedown();
            return $parsedown->text( file_get_contents( $path ) );
        });

        return view( "docs.single", [
            "html" => $html,
            "title" => ucwords( implode( " ", $title_array ) ),
            "page_class" => "doc"
        ]);

    }

}
