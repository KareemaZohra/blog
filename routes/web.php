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

Route::get('/','productController@index');
Route::get('/addProduct','productController@add');
Route::post('/upload','productController@dbupload');
Route::get('/delete/{id}','productController@delete');
Route::get('/view_full/{id}','homeController@view_full');
Route::get('/edit/{id}','productController@edit');
Route::post('/edit_db/{id}','productController@dbEdit');
//automatic came with auth process
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/regi', function(){
	return view('auth.register');
});
// Resource HomeController
Route::resource('/profile','profileController');
