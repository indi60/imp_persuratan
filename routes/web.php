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
Auth::Routes();
Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'],function(){
		Route::get('/dashboard','DashboardController@index');
		Route::get('/surat','SuratController@index');
		Route::get('/surat1','Surat1Controller@index1')->name("surat1.index");
		Route::post('/surat1/create','Surat1Controller@create')->name("surat1.create");
		Route::get('/surat1/input1','Surat1Controller@input1')->name("surat1.input");
		Route::get('/surat/input','SuratController@input')->name("surat.input");
		Route::post('/surat/create','SuratController@create');
		Route::get('/surat1/{id}/edit1','Surat1Controller@edit');
		Route::post('/surat1/{id}/update','Surat1Controller@update');
		Route::get('/surat1/{id}/delete','Surat1Controller@delete');
		Route::get('/surat/{id}/edit','SuratController@edit');
		Route::post('/surat/{id}/update','SuratController@update');
		Route::get('/surat/{id}/delete','SuratController@delete');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=> 'admin','middleware'=>'Admin'],function(){
	Route::get('/surat1','Surat1Controller@index1');
});
Route::group(['prefix'=> 'user','middleware'=>'User'],function(){
	Route::get('/surat','SuratController@index');
});
Route::get('/logout', 'HomeController@logout')->name('logout');




		