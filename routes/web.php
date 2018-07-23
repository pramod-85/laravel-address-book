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

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/edit', 'ProfileController@edit')->name('edit_profile');
Route::post('/profile/update', 'ProfileController@update')->name('update_profile');

Route::get('/contact', 'ContactController@index')->name('contacts');
Route::get('/contact/add', 'ContactController@add')->name('contact_add');
Route::post('/contact/add', 'ContactController@insert')->name('contact_insert');
Route::get('/contact/edit/{contact_id}', 'ContactController@edit')->name('contact_edit');
Route::post('/contact/edit/{contact_id}', 'ContactController@update')->name('contact_update');
Route::get('/contact/delete/{contact_id}', 'ContactController@delete')->name('contact_delete');
