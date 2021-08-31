<?php

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


Route::get('/name/{name}', function (string $name) {
    return "<h1>Hello, {$name}</h1>";
});

Route::get('/', function () {
    return "<h2>Hello, users!</h2>";
});

Route::get('/info', function () {
    return "<h2>This first test laravel page.</h2>";
});


$title = 'News page';
$text = 'News:';

Route::get('/news', function () use ($text, $title) {
    return <<<php
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>$title</title>
</head>
<body>

   <h2>$text</h2>
   <p>Lorem ipsum nulla ut congue diam morbi eros maecenas risus commodo: mauris nibh elementum integer donec nam, <br>
   lectus bibendum&nbsp;&mdash; nulla. Curabitur metus cursus leo risus ut, non nam odio sapien congue ut rutrum morbi metus et nam amet. <br>
   Urna fusce molestie sagittis et leo maecenas nam, odio auctor leo sit elementum sodales, diam justo orci eget bibendum pellentesque, sed lectus porta. <br>
   Maecenas non lorem ligula leo quam vitae nam porttitor: bibendum tellus porta vivamus at nec, elementum mattis elementum odio eros pharetra justo elementum. <br>
   Maecenas nulla curabitur mattis non ipsum quisque urna nam risus urna lorem justo, molestie, ultricies vulputate auctor. <br>
   Ultricies, fusce diam eget sagittis tempus eros cursus eros sagittis pharetra auctor lectus, proin orci odio&nbsp;&mdash; ligula. <br>
   Nam leo cursus porta adipiscing ut eu porttitor, rutrum porttitor proin quisque magna at, eros justo ut.</p> 

</body>
</html>
php;
});
