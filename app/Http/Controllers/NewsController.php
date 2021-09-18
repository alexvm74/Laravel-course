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

    public function infoRec(Request $request)
    {
        // for example only:

        if ($request->has('feedbackUserName')) {
            $request->validate([
                'feedbackUserName' => ['required', 'string', 'min:3']
            ]);
        }  
        if ($request->has('orderUserName')) {
            $request->validate([
                'orderUserName' => ['required', 'string', 'min:3']
            ]);
        }

        //dd($request->all());
        dump($request->all());
        return response('This is Response, Request see above.');
        //return response()->json($request->all(), 200);
        //return response()->json($request->all());
        //return response()->download('robots.txt');
    }

    public function order()
    {
        return view('news.order');
    }

}
