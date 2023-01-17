<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use NewsTrait;

    public function index()
    {
        return \view('news.category', ['category' => $this->getCategory()]);
    }
}
