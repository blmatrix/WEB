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

Route::get('/home', function () {
    return view('home.index');
});

Route::get('/livegames', function () {
    return view('home.livegames');
});

Route::get('/top', function () {
    return view('home.top');
});

// https://integrations01.betgames.tv/ext/game/bets/robert_local_test_env
Route::get('/history', function () {
    return view('home.history');
});

// https://integrations01.betgames.tv/ext/game/results/robert_local_test_env
Route::get('/results', function () {
    return view('home.results');
});

Route::get('/dealers', function () {
    return view('home.dealers');
});

// HOW TO PLAY BLOCK
    Route::get('/lucky7', function () {
        return view('home.layouts.htp.lucky7_rules');
    });

    Route::get('/lucky6', function () {
        return view('home.layouts.htp.lucky6_rules');
    });

    Route::get('/lucky5', function () {
        return view('home.layouts.htp.lucky5_rules');
    });

    Route::get('/dice', function () {
        return view('home.layouts.htp.dice_rules');
    });

    Route::get('/diceduel', function () {
        return view('home.layouts.htp.diceduel_rules');
    });

    Route::get('/wheel', function () {
        return view('home.layouts.htp.wheel_rules');
    });

    Route::get('/poker', function () {
        return view('home.layouts.htp.bop_rules');
    });

    Route::get('/baccarat', function () {
        return view('home.layouts.htp.bob_rules');
    });

    Route::get('/war', function () {
        return view('home.layouts.htp.wob_rules');
    });

Route::get('/reset', function () {
    return view('auth.passwords.email');
});

Route::get('/confirm', function () {
    return view('auth.passwords.reset');
});

Auth::routes();

Route::get('/home2', 'HomeController@index')->name('home');
