<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $articles = App\Article::all();
    return view('home',compact('articles'));
})->name('home');

Route::resource('articles', 'ArticlesController');

Route::post('markdown','ArticlesController@markdown')->name('markdown');