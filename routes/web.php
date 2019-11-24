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

Route::get('/home', function () {
    return view('main.home');
})->name('home');

Route::get('cart', function () {
    return view('main.cart');
})->name('cart');
Route::post('cart', function(){
    return view('main.cart');
})->name('cart');

Route::get('book', function () {
    return view('main.book');
})->name('book');

Route::get('cart', function () {
    return view('main.cart');
})->name('cart');

Route::get('login', function () {
    return view('main.login');
})->name('login');

Route::get('register', function () {
    return view('main.register');
})->name('register');

Route::get('checkout', function () {
    return view('main.checkout');
})->name('checkout');
Route::post('checkout', function () {
    return view('main.checkout');
})->name('checkout');

Route::get('book-detail', function () {
    return view('main.book-detail');
})->name('book-detail');

Route::get('search-result', function () {
    return view('main.search-result');
})->name('search-result');

Route::get('getBook', 'BookController@getBook');

/**
 * Route danh cho admin
 */
Route::group(['prefix'=>'admin'], function(){
    Route::group(['prefix'=>'category'], function(){
        Route::get('list', 'CategoryController@getList');
        Route::get('add', 'CategoryController@getAdd');
        Route::post('add', 'CategoryController@postAdd');
        Route::get('edit/{id}', 'CategoryController@getEdit');
        Route::post('edit/{id}', 'CategoryController@postEdit');
        Route::get('delete/{id}', 'CategoryController@getDelete');
    });

    Route::group(['prefix'=>'book'], function(){
        Route::get('list', 'BookController@getList');
    });
});
