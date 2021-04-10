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

        $parsedown = new Parsedown();
        $html = $parsedown->text( file_get_contents( $path ) );
        $title_array = explode( "-", htmlspecialchars( $doc ) );

        return view( "docs.single", [
            "html" => $html,
            "title" => ucwords( implode( " ", $title_array ) )
        ]);

    }

}
