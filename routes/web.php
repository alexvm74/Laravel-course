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

// Admin:
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
});


// News:
Route::get('/', [NewsController::class, 'index'])
    ->name('index');

Route::get('/categories', [NewsController::class, 'categories'])
    ->name('categories.index');

Route::get('/categories/{id}', [NewsController::class, 'categoryShow'])
    ->where('id', '\d+')
    ->name('categories.show');

Route::get('/news', [NewsController::class, 'news'])
    ->name('news.index');

Route::get('/news/{id}', [NewsController::class, 'show'])
    // ->where('id_category', '\d+')
    ->where('id', '\d+')
    ->name('news.show');


// Form:
Route::match(['post', 'get'], '/info', [NewsController::class, 'infoRec'])
    ->name('news.info');

Route::get('/order', [NewsController::class, 'order'])
    ->name('news.order');


// Collections:
/* Route::get('/collections', function () {
    $collect = collect([1, 3, 6, 7, 2, 8, 9, 3, 23, 68, 11, 6]);
    //dump($collect->min());
    dump($collect->shuffle()
        ->map(fn ($item) => $item + 2)
        ->toJson());
}); */
