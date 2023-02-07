<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\QueryBuilders\NewsQueryBuilder;
use App\QueryBuilders\CategoriesQueryBuilder;
use App\QueryBuilders\NewsSourcesDataQueryBuilder;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NewsQueryBuilder $newsQueryBuilder)
    {
        return \view('admin.news', ['newsList' => $newsQueryBuilder->getNewsPagination()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CategoriesQueryBuilder $categoriesQueryBuilder, NewsSourcesDataQueryBuilder $newsSourcesDataQueryBuilder)
    {
        return \view('admin.createNews', [
            'categories' => $categoriesQueryBuilder->getAll(),
            'sources' => $newsSourcesDataQueryBuilder->getAll(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News($request->except('_token'));
        $news->news_sources_data_id = $request->input('sources');
        if ($news->save()) {
            return \redirect()->route('admin.news.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news, CategoriesQueryBuilder $categoriesQueryBuilder, NewsSourcesDataQueryBuilder $newsSourcesDataQueryBuilder)
    {
        return \view('admin.editNews', [
            'news' => $news,
            'categories' => $categoriesQueryBuilder->getAll(),
            'sources' => $newsSourcesDataQueryBuilder->getAll(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $news = $news->fill($request->except('_token', 'category_ids'));
        $news->news_sources_data_id = $request->input('sources');
        if ($news->save()) {
            $news->categories()->sync((array) $request->input('category_ids'));
            return \redirect()->route('admin.news.index')->with('success', 'Новость обновлена!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
