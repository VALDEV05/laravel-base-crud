<?php

use App\Models\Menu;
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
    return view('home');
})->name('home');


Route::get('/comics', 'ComicController@index')->name('comics');
Route::get('/comics/{comic}', 'ComicController@show')->name('comic');


Route::get('/admin', 'Admin\ComicController@index');
/* Route::get('posts/create', 'Admin\PostController@create');
Route::post('posts', 'Admin\PostController@store');
Route::get('posts/{post}', 'Admin\PostController@show');
Route::get('posts/{post}/edit', 'AdminnPostController@edit');
Route::put('posts/{post}', 'Admin\PostController@update');
Route::delete('posts/{post}', 'Admin\PostController@destroy'); */










Route::get('/characters', function () {

    return view('characters.index');

})->name('characters');

Route::get('/movies', function () {

    return view('movies.index');

})->name('movies');

Route::get('/tv', function () {
    return view('tv.index');
})->name('tv');

Route::get('/games', function () {

    return view('games.index');

})->name('games');

Route::get('/collectibles', function () {

    return view('collectibles.index');

})->name('collectibles');

Route::get('/videos', function () {

    return view('videos.index');

})->name('videos');

Route::get('/fans', function () {

    return view('fans.index');

})->name('fans');

Route::get('/news', function () {

    return view('news.index'); 

})->name('news');

Route::get('/shop', function () {
    
   return view('shop.index'); 

})->name('shop');