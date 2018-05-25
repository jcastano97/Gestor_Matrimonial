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

// Productos
Route::get('/product','ProductController@index')->name('product');
Route::post('/newProduct','ProductController@newProduct');
Route::get('/newProduct', 'ProductController@newProductView');
Route::get('/deleteProduct/{id}', 'ProductController@deleteProduct');

// Tienda
Route::get('/shop','ShopController@index');
Route::get('/shopB','ShopController@ShopB');
Route::get('/shopping_cart','ShopController@shoppingCart');
Route::get('/pay','ShopController@Pay');
Route::get('/show_pay/{id}','ShopController@showPay');
Route::get('/shop/{id}','ShopController@categoryView');
Route::get('/product/{id}','ShopController@productView');
Route::get('/product/add/{id}', 'ShopController@productAdd');
Route::get('/product/remove/{id}', 'ShopController@productRemove');
Route::get('/product/remove_p/{id}', 'ShopController@productRemove_p');
Route::get('/pay_history', 'ShopController@payHistory');
// Bodas
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/newB', 'HomeController@newB');
Route::get('/newB', 'HomeController@FormNewB');
Route::get('/deleteB/{id}', 'HomeController@deleteB');
Route::get('/newPackB/{name}', 'HomeController@newPackB');
Route::get('/boda/{boda_id}', 'BodaController@indexBoda');
Route::get('/boda/{boda_id}/consultar_invitados', 'BodaController@consultar_invitados');
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