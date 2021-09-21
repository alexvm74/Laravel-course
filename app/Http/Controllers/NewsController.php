<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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

    public function categoryShow(int $id)
    {
        return view('categories.show', [
            'id_category' => $id,      // можно не передавать, т.к. category_id есть в 'newsList'
            'newsList' => News::where('category_id', $id)->get()
        ]);
    }

    public function news()
    {
        // return view('news.index', [ 
        //     'newsList' => News::all()
        // ]);

        // $newsList = News::with('category')
        //     ->paginate(
        //         config('news.paginate')
        //     );

        return view('news.index', [
            // 'newsList' => News::paginate(config('news.paginate'))
            // 'newsList' => News::query()->paginate(4)
            'newsList' => News::paginate(4)
        ]);
    }

    public function show(int $id)
    {
        return view('news.show', [
            'newsList' => News::where('id', $id)->get()
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
