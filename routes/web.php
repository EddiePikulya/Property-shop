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
Route::get('/', 'PropertyController@index')->name('home');
Route::get('/buysalerent', 'PropertyController@buysalerent');
Route::get('/about/', 'PropertyController@about');
Route::get('/contact/', 'PropertyController@contact');
Route::post('/buysalerent', 'PropertyController@filter');


Route::get('/agents/', 'AgentController@index');
Route::get('/blog/', 'PostController@index');


Route::get('/logout', 'SessionController@destroy');
Route::post('/login', 'SessionController@create');

Route::get('/register', 'UserController@register');
Route::post('/register', 'UserController@store');

Route::group(['middleware' => ['role:admin|role:blogger']], function() {
    Route::get('/blog-managing', 'AdminController@blog');
    Route::get('/property/manage', ['middleware' => ['role:admin'], 'uses' => 'AdminController@property']);
    Route::get('/blog/{post}/edit', 'PostController@edit');
    Route::get('/blog/{post}/delete', 'PostController@delete');
    Route::post('/blog/{post}/edit/submit', 'PostController@submit');
    Route::get('/blog/create', 'PostController@create');
    Route::post('/blog/create', 'PostController@store');
});
Route::get('/{property}/', 'PropertyController@show');
Route::get('/blog/{post}', 'PostController@show');