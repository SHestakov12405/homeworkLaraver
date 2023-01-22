<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{


    use NewsTrait;

    public function index()
    {
        return \view('news.index');
    }


    public function news()
    {
        return \view('news.news', ['news' => $this->getNews()]);
    }

    public function show(int $id)
    {
        return \view('news.show', ['show' => $this->getNews($id)]);
    }

    public function showCategory(int $id)
    {
        return \view('news.news', ['news' => $this->getNewsFromCategory($id)]);
    }
}
