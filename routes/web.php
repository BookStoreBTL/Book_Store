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

Route::get('/home', [
    'as'=>'home',
    'uses'=>'PageController@getIndex'
]);  

Route::get('cart', function () {
    return view('main.cart');
})->name('cart');
Route::post('cart', function(){
    return view('main.cart');
})->name('cart');

Route::get('book', function () {
    return view('main.book');
})->name('book');


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


Route::get('book-detail/{id?}', [
    'as'=>'book-detail',
    'uses'=>'PageController@getBookDetails'
]);

Route::get('search-result', function () {
    return view('main.search-result');
})->name('search-result');

Route::get('contact', function(){
    return view('main.contact');
})->name('contact');

/**
 * Route danh cho admin
 */

Route::get('admin/login', 'UserController@getLoginAdmin');
Route::post('admin/login', 'UserController@postLoginAdmin');
Route::get('admin/logout', 'UserController@getLogoutAdmin');

Route::group(['prefix'=>'admin', 'middleware'=>'adminLogin'], function(){
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
        Route::get('add', 'BookController@getAdd');
        Route::post('add', 'BookController@postAdd');
        Route::get('edit/{id}', 'BookController@getEdit');
        Route::post('edit/{id}', 'BookController@postEdit');
        Route::get('delete/{id}', 'BookController@getDelete');
    });

    Route::group(['prefix'=>'user'], function(){
        Route::get('list', 'UserController@getList');
        Route::get('edit/{id}', 'UserController@getEdit');
        Route::post('edit/{id}', 'UserController@postEdit');
        Route::get('delete/{id}', 'UserController@getDelete');
        Route::get('changepassword', 'UserController@getChangePassword');
        Route::post('changepassword/{id}', 'UserController@postChangePassword');
    });

    Route::group(['prefix'=>'author'], function(){
        Route::get('list', 'AuthorController@getList');
        Route::get('add', 'AuthorController@getAdd');
        Route::post('add', 'AuthorController@postAdd');
        Route::get('edit/{id}', 'AuthorController@getEdit');
        Route::post('edit/{id}', 'AuthorController@postEdit');
        Route::get('delete/{id}', 'AuthorController@getDelete');
    });

    Route::group(['prefix'=>'language'], function(){
        Route::get('list', 'LanguageController@getList');
        Route::get('add', 'LanguageController@getAdd');
        Route::post('add', 'LanguageController@postAdd');
        Route::get('edit/{id}', 'LanguageController@getEdit');
        Route::post('edit/{id}', 'LanguageController@postEdit');
        Route::get('delete/{id}', 'LanguageController@getDelete');
    });

    Route::group(['prefix'=>'publisher'], function(){
        Route::get('list', 'PublisherController@getList');
        Route::get('add', 'PublisherController@getAdd');
        Route::post('add', 'PublisherController@postAdd');
        Route::get('edit/{id}', 'PublisherController@getEdit');
        Route::post('edit/{id}', 'PublisherController@postEdit');
        Route::get('delete/{id}', 'PublisherController@getDelete');
    });

    Route::group(['prefix'=>'contact'], function(){
        Route::get('list', 'ContactController@getList');
        Route::get('edit/{id}', 'ContactController@getEdit');
        Route::post('edit/{id}', 'ContactController@postEdit');
        Route::get('delete/{id}', 'ContactController@getDelete');
    });

    Route::group(['prefix'=>'review'], function(){
        Route::get('list', 'ReviewController@getList');
        Route::get('delete/{id}', 'ReviewController@getDelete');
    });

    Route::group(['prefix'=>'order'], function(){
        Route::get('list', 'OrderController@getList');
    });
});
