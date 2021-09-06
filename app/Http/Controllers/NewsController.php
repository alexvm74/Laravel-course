<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }

    public function categories()
    {
        return view('news.categories', [
            'categoryList' => $this->getCategories()
        ]);
    }

    public function news(int $id_category)
    {
        //dump($this->getNews());
        //dd($this->getNews());
        return view('news.news', [
            'id_category' => $id_category,
            'newsList' => $this->getNews()
        ]);
    }

    public function show(int $id_category, $id_news)
    {
        return view('news.show', [
            'id_category' => $id_category,
            'id_news' => $id_news,
            'newsList' => $this->getNews()
        ]);
    }
}
