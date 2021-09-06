<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
});


// news
Route::get('/', [NewsController::class, 'index'])
    ->name('news.index');

Route::get('/categories', [NewsController::class, 'categories'])
    ->name('news.categories');

Route::get('/categories/{id_category}', [NewsController::class, 'news'])
    ->where('id_category', '\d+')
    ->name('news.news');

Route::get('/categories/{id_category}/news/{id_news}', [NewsController::class, 'show'])
    ->where('id_category', '\d+')
    ->where('id_news', '\d+')
    ->name('news.show');
