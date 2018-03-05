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

Route::get('/robert', function() {
  echo phpinfo();
});

// Route::get('/contacts', 'ContactsController@index');
//
// Route::get('/contacts/{id}', 'ContactsController@single')
//   ->where('id', '[0-9]+');
//
// Route::get('/contacts/create', 'ContactsController@create');
//
// Route::post('/contacts', 'ContactsController@store');
//
// Route::get('/contacts/edit{id}', 'ContactsController@edit')
//   ->where('id', '[0-9]+');
//
// Route::put('/contacts/{id}', 'ContactsController@update')
//   ->where('id', '[0-9]+');
//
// Route::delete('/contacts/{id}', 'ContactsController@destroy')
//   ->where('id', '[0-9]+');

Route::get('/porno', function() {
  echo 'Porno page';
});

Route::prefix('posts')->group(function() {

  Route::get('', 'PostsController@index');

  Route::get('{id}', 'PostsController@single')
    ->where('id', '[0-9]+')
    ->name('single.post');

  Route::get('create', 'PostsController@create');

  Route::post('', 'PostsController@store');

  Route::get('edit/{id}', 'PostsController@edit')
    ->where('id', '[0-9]+');

  Route::put('{id}', 'PostsController@update')
    ->where('id', '[0-9]+');

  Route::delete('{id}', 'PostsController@destroy')
    ->where('id', '[0-9]+');
});

Route::resource('products', 'ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
