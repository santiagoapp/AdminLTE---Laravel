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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/supersu', 'SuperSuController@index')->name('superusuario');
Route::get('/admin/OT', 'OTController@index')->name('OT');
Route::get('/admin/RQ', 'RQController@index')->name('RQ');
Route::get('/admin/OC', 'OCController@index')->name('OC');
Route::get('/admin/OS', 'OSController@index')->name('OS');
Route::get('/admin/RE', 'REController@index')->name('RE');
Route::get('/admin/RV', 'RVController@index')->name('RV');
