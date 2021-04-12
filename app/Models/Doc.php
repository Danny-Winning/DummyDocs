<?php

namespace App\Models;

use Parsedown;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use stdClass;

class Doc
{

    public static function get( $doc )
    {

        $path = resource_path( "docs/$doc.md" );

        if ( !file_exists( $path ) )
            abort( "404" );

        return cache()->remember( "docs.{$doc}", 5, function() use ( $path, $doc ){

            // Markdown parser.
            $parser = new Parsedown();
            $markdown = YamlFrontMatter::parse( file_get_contents( $path ) );

            $document = new stdClass();
            $document->body = $parser->text( $markdown->body() );
            $document->title = $markdown->matter( "title" ) ?? ucwords( implode( " ", explode( "-", $doc ) ) );

            return $document;

        });

    }

}
