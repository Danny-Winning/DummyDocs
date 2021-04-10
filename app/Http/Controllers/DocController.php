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

        return view( "docs.single", [
            "html" => $html,
            "title" => ucfirst( htmlspecialchars( $doc ) )
        ]);

    }

}
