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

// Tienda
Route::get('/shop','ShopController@index');
Route::get('/shopB','ShopController@ShopB');
Route::get('/product/{id}','ShopController@productView');
Route::get('/shop/{id}','ShopController@categoryView');
// Bodas
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/newB', 'HomeController@newB');
Route::get('/newB', 'HomeController@FormNewB');
Route::get('/deleteB/{id}', 'HomeController@deleteB');
Route::get('/newPackB/{name}', 'HomeController@newPackB');
Route::get('/boda/{boda_id}', 'BodaController@indexBoda');
// Sala
Route::get('/boda/{boda_id}/newS', 'BodaController@FormNewS');
Route::post('/boda/{boda_id}/newS', 'BodaController@newS');
Route::get('/boda/{boda_id}/deleteS/{sala_id}', 'BodaController@deleteS');
Route::get('/boda/{boda_id}/sala/{sala_id}', 'BodaController@indexSala');
// Mesa
Route::get('/boda/{boda_id}/sala/{sala_id}/newM', 'BodaController@FormNewM');
Route::post('/boda/{boda_id}/sala/{sala_id}/newM', 'BodaController@newM');
Route::get('/boda/{boda_id}/sala/{sala_id}/deleteM/{mesa_id}', 'BodaController@deleteM');
Route::get('/boda/{boda_id}/sala/{sala_id}/mesa/{mesa_id}', 'BodaController@indexMesa');
// Invitado
Route::get('/boda/{boda_id}/sala/{sala_id}/mesa/{mesa_id}/newI', 'BodaController@FormNewI');
Route::post('/boda/{boda_id}/sala/{sala_id}/mesa/{mesa_id}/newI', 'BodaController@newI');
Route::get('/boda/{boda_id}/sala/{sala_id}/mesa/{mesa_id}/deleteI/{invitado_id}', 'BodaController@deleteI');
Route::get('/boda/{boda_id}/sala/{sala_id}/mesa/{mesa_id}/editI/{invitado_id}', 'BodaController@editI');