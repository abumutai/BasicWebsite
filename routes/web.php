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
Route::get('/','StudentController@index')->name('home');
Route::get('/create','StudentController@create')->name('create');
Route::post('/create','StudentController@store')->name('store');
Route::get('/edit/{id}','StudentController@edit')->name('edit');
Route::post('/update/{id}','StudentController@update')->name('update');
Route::delete('/delete/{id}','StudentController@delete')->name('delete');

Route::get('/change-password', 'Auth\ChangePasswordController@index')->name('password.change');
Route::post('/change-password', 'Auth\ChangePasswordController@changepassword')->name('updatepwd');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
