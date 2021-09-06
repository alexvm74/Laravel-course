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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return <<<php

   <h2>Hi, users!</h2>
   <h3>Краткое описание агрегатора новостей по поиску работы - World Job News:</h3>
   <p>Lorem ipsum nulla ut congue diam morbi eros maecenas risus commodo: mauris nibh elementum integer donec nam, <br>
   lectus bibendum&nbsp;&mdash; nulla. Curabitur metus cursus leo risus ut, non nam odio sapien congue ut rutrum morbi metus et nam amet. <br>
   Urna fusce molestie sagittis et leo maecenas nam, odio auctor leo sit elementum sodales, diam justo orci eget bibendum pellentesque, sed lectus porta. <br>
   Maecenas non lorem ligula leo quam vitae nam porttitor: bibendum tellus porta vivamus at nec, elementum mattis elementum odio eros pharetra justo elementum. <br>
   Maecenas nulla curabitur mattis non ipsum quisque urna nam risus urna lorem justo, molestie, ultricies vulputate auctor. <br>
   Ultricies, fusce diam eget sagittis tempus eros cursus eros sagittis pharetra auctor lectus, proin orci odio&nbsp;&mdash; ligula. <br>
   Nam leo cursus porta adipiscing ut eu porttitor, rutrum porttitor proin quisque magna at, eros justo ut.</p> 

php;
});

//admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
});


// news
Route::get('/categories', [NewsController::class, 'index'])
    ->name('news.index');

Route::get('/categories/{id_category}', [NewsController::class, 'news'])
    ->where('id_category', '\d+')
    ->name('news.news');

Route::get('/categories/{id_category}/news/{id_news}', [NewsController::class, 'show'])
    ->where('id_category', '\d+')
    ->where('id_news', '\d+')
    ->name('news.show');
