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

Route::resource('/products','ProductsController');
Route::resource('/messages','MessagesController');

Route::view('/contact', 'contact')->name('contact');



Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
Route::get('/home', 'HomeController@index')->name('home');
