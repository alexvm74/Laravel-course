<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        //dump($this->getNews());
        //dd($this->getNews());
        return view('news.index', [
            'newsList' => $this->getNews()
        ]);
    }

    public function show(int $id)
    {
        return view('news.show', [
            'id' => $id
        ]);
    }
}
