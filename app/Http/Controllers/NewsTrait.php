<?php

namespace App\Http\Controllers;


/**
 * 
 */
trait NewsTrait{
    public function getNews(int $id = null):array
    {

        $news = [];
        $quantityNews = 30;

        if ($id === null) {
            for ($i=1; $i < $quantityNews; $i++) { 
                $news[$i]=[
                    'id'=> $i,
                    'category-id'=>rand(1, 5),
                    'title'=> \fake()->jobTitle(),
                    'text'=> \fake()->text(100),
                    'author'=> \fake()->userName(),
                    'created-at'=> \now()->format('d-m-Y H:i')
                ];
            }
            return $news;
        }


        $news[0] = [
            'id'=> $id,
            'category-id'=>rand(1, 5),
            'title'=> \fake()->jobTitle(),
            'text'=> \fake()->text(100),
            'author'=> \fake()->userName(),
            'created-at'=> \now()->format('d-m-Y H:i')
        ];
        return $news;
    }


    public function getCategory():array
    {
        $category = [];
        $quantityCategory = 6;
        for ($i=1; $i < $quantityCategory; $i++) { 
            $category[$i]=[
                'id'=> $i,
                'title'=> \fake()->jobTitle(),
                'description' => \fake()->text(100)
            ];
        } 

        return $category;
    }



    public function getNewsFromCategory($category):array
    {
        $newsCategory = [];
        $categoryId = $category;
        $news = $this->getNews();
        $newsCategory = array_filter($news, function($v, $k) use ($categoryId) {
            return ($v['category-id'] === $categoryId);
        }, ARRAY_FILTER_USE_BOTH);

        return $newsCategory;
    }


    
}
