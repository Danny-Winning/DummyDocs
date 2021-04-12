<?php

namespace App\Models;

use Parsedown;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use stdClass;

class Doc
{

    protected static string $doc_path;

    protected static function init()
    {

        self::$doc_path = resource_path( "docs/" );

    }

    public static function get( $doc )
    {

        self::init();

        $path = self::$doc_path . "$doc.md";

        if ( !file_exists( $path ) )
            abort( "404" );

        return cache()->remember( "docs.{$doc}", 5, function() use ( $path, $doc ){

            // Markdown parser.
            $parser = new Parsedown();
            $markdown = YamlFrontMatter::parse( file_get_contents( $path ) );

            $document = new stdClass();
            $document->body = $parser->text( $markdown->body() );
            $document->title = $markdown->matter( "title" ) ?? ucwords( implode( " ", explode( "-", $doc ) ) );
            $document->order = $markdown->matter( "order" ) ?? 999;

            return $document;

        });

    }

    public static function getAll()
    {



    }

}
