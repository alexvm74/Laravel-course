<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categoryList = Category::get();
        // $categoryList = Category::all();
        $categoryList = Category::withCount('news')->get();
        // dd($categoryList);

        return view('admin.categories.index', [
            'categoryList' => $categoryList
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // for example only:
        $request->validate([
            'title' => ['required', 'string', 'min:3']
        ]);
        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
    public function edit(Category $category)
    {
        //dd($category);
        return view('admin.categories.edit', [
            'category' => $category
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
    public function update(Request $request, Category $category)
    {
        // Первый способ - перечисляем все поля (но их может быть много)
        // $category->title = $request->input('title');
        // $category->description = $request->input('description');

        // Поэтому, после указания способа обновления полей в модели, можно записать так:
        // (здесь уже перечисляем не все поля, а только те, которые нужно обнвить)
        $category = $category->fill(
            $request->only(['title', 'description'])
        )->save();
        
        if ($category) {
            return redirect()
                ->route('admin.categories.index')
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
    public function destroy(Category $category)
    {
        dd($category);
    }
}
