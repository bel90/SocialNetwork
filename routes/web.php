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

Route::get('/newmeme', function () {
    return view('newmeme');
});

//Posten eines Memes:
//Die Controllerfunktion hat noch Fehler/ ist unvollständig
Route::post('/newmeme', 'MemeController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
