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

Route::get('/', function (){
    return view('welcome');
});

Route::get('/layout', 'MainPages@layout');

Route::get('/main', 'MainPages@main');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/newB', 'HomeController@newB');
Route::get('/newB', 'HomeController@FormNewB');

Route::get('/deleteB/{id}', 'HomeController@deleteB');

Route::get('/shopB', function(){
    return view('tiendaBodas');
});

Route::get('/newPackB/{name}', 'HomeController@newPackB');