<?php

namespace App\Http\Controllers;

class DocController extends Controller
{

    public function getDoc( $doc )
    {

        $document = \App\Models\Doc::get( $doc );

        return view( "docs.single", [
            "html" => $document->body,
            "title" => $document->title,
            "page_class" => "doc"
        ]);

    }

}
