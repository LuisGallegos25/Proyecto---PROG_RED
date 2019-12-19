<?php

use RealRashid\SweetAlert\Facades\Alert;

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



Auth::routes();
Route::resource('/promocion','PromocionController');
Route::resource('/categoria','CategoriaController');
Route::resource('/proveedor','ProveedorController');
Route::resource('/products','ProductsController');
Route::resource('/defensa','DefensaController');
Route::resource('/messages','MessagesController');

Route::resource('/solicitud','SolicitudController');

Route::view('/contact', 'contact')->name('contact');
Route::view('/animation', 'animation')->name('animation');

Route::get('/producto', 'Controller@index')->name('producto');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/redirect/{provider}','SocialController@redirect');
Route::get('/callback/{provider}','SocialController@callback');



Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
Route::get('/home', 'HomeController@index')->name('home');


