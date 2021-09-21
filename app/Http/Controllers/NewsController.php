<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function categories()
    {
        return view('categories.index', [
            'categoryList' => Category::all()
        ]);
    }

    public function news(int $id_category)
    {
        return view('news.index', [
            'id_category' => $id_category,
            // 'newsList' => $this->getNews()
            'newsList' => News::where('category_id', $id_category)->get()
        ]);
    }

    public function show(int $id_category, $id_news)
    {
        return view('news.show', [
            'id_category' => $id_category,
            'id_news' => $id_news,
            'newsList' => News::where('id', $id_news)->get()
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
        //file_put_contents('text.txt', 'string');
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
