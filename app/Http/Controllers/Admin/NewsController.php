<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $newsList = News::orderBy('id', 'desc')
        //     ->paginate(
        //         config('news.paginate')
        //     );

        $newsList = News::with('category')
            ->paginate(
                config('news.paginate')
            );

        return view('admin.news.index', [
            'newsList' => $newsList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $categories = Category::all();
        return view('admin.news.create', [
            'categories' => $categories
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
        $request->validate([
            'title' => ['required', 'string', 'min:3']
        ]);

        $news = News::create(
            $request->only(['category_id', 'title', 'author', 'description'])
        );

        if ($news) {
            return redirect()
                ->route('admin.news.index')
                ->with('success', 'Запись успешно добавлена');
        }

        return back()
            ->with('error', 'Запись не добавлена')
            ->withInput();

        //dump($request->all());
        //return response('This is Response, Request see above.');
        //return response()->json($request->all(), 200);
        //return response()->json($request->all());
        //return response()->download('robots.txt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
    public function show(News $news)
    {
        // Для вывода новостей только определённой категории:
        // dd($news->id); // здесь в 'id' приходит 'category_id' из admin.categories.index
        // поэтому костылим:
        $category_id = $news->id;
        $newsList = News::where('category_id', $category_id)
            ->paginate(
                config('news.paginate')
            );

        return view('admin.news.index', [
            'newsList' => $newsList
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
    public function edit(News $news)
    {
        //dd($news);
        $categories = Category::all();
        return view('admin.news.edit', [
            'news' => $news,
            'categories' => $categories

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => ['required', 'string', 'min:3']
        ]);

        $news = $news->fill(
            $request->only(['category_id', 'title', 'author', 'description'])
        )->save();

        if ($news) {
            return redirect()
                ->route('admin.news.index')
                ->with('success', 'Запись успешно обновлена');
        }

        return back()
            ->with('error', 'Запись не обновлена')
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function destroy($id)
    public function destroy(News $news)
    {
        dd($news);
    }
}
