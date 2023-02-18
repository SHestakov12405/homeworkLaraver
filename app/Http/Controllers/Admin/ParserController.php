<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Services\Contracts\Parser;
use App\Http\Controllers\Controller;

class ParserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Parser $parser)
    {
        $load = $parser->setLink('https://lenta.ru/rss/news/sport')->getParserData();
        dd($load);
    }
}
