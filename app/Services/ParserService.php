<?php

namespace App\Services;

use App\Services\Contracts\Parser;
use Orchestra\Parser\Xml\Facade as XmlParser;


class ParserService implements Parser
{
    private string $link;

    public function setLink($link)
    {
        $this->link = $link;
        return $this;
    }

    public function getParserData()
    {
        $xml = XmlParser::load($this->link);
        return $xml->parse([
            'title' => [
                'uses' => 'channel.title'
            ],
            'link' => [
                'uses' => 'channel.link'
            ],
            'description' => [
                'uses' => 'channel.description'
            ],
            'image' => [
                'uses' => 'channel.image.url'
            ],
            'url' => [
                'uses' => 'channel.url'
            ],
            'news' => [
                'uses' => 'channel.item[title,author,guid,description,pubDate,category]'
            ]

        ]);
    }
}
