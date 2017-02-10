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

// Route::get('/', function() {
// 	factory('App\Book', 2)->create(['title' => 'Book1', 'title' => 'Book2']);
// });

Route::group(['prefix' => 'api'], function () {
    Route::get('books', 'BooksController@index');
    Route::get('books/{id}', 'BooksController@show');
});
