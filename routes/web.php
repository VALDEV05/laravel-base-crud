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


Route::get('/admin/comics', 'Admin\ComicController@index')->name('admin.comics');
Route::get('/admin/comics/create', 'Admin\ComicController@create')->name('admin.comics.create');
Route::post('/admin/comics', 'Admin\ComicController@store')->name('admin.comics.store');
Route::get('/admin/comics/{comic}', 'Admin\ComicController@show')->name('admin.comics.show');
Route::get('/admin/comics/{comic}/edit', 'Admin\ComicController@edit')->name('admin.comics.edit');
Route::put('/admin/comics/{comic}', 'Admin\ComicController@update')->name('admin.comics.update');








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