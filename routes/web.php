<?php

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

Route::bind('song', function ($handle){
    return App\Song::whereHandle($handle)->first();
});

// Route Resource
Route::resource('songs', 'SongController');

// Route Model Binding
/*
Route::bind('article', function ($id){
   return App\Article::whereId($id)->first();
});
*/

Route::resource('articles', 'ArticleController', [
        'only' => [
            'index', 'create', 'store' , 'show'
        ],
        'names' => [
            'index' => 'get_articles',
            'create' => 'create_article'
        ]
    ]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
