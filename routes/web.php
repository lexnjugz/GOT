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

Route::get('/', 'ListController@show');
Route::get('/logout', function (){

    Auth::logout();
    return redirect('/');
});

Route::get('/got', [
    'middleware' => ['auth'],
    'uses' => function () {
    echo "You are allowed to view this page";
    }
]);

Auth::routes();

Route::get('/home', 'HomeController@index');
