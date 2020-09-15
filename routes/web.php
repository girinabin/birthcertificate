<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard','DashboardController@index')->name('dashboard');

// HealthPost Controller

Route::get('/healthPost','HealthPostController@index')->name('healthPost.index');
Route::get('/healthPost/create','HealthPostController@create')->name('healthPost.create');
Route::post('/healthPost/store','HealthPostController@store')->name('healthPost.store');
Route::get('/healthPost/edit/{healthPost}','HealthPostController@edit')->name('healthPost.edit');
Route::put('/healthPost/update/{healthPost}','HealthPostController@update')->name('healthPost.update');
Route::delete('/healthPost/delete/{healthPost}','HealthPostController@delete')->name('healthPost.delete');

// BIRTHAPPLICATION FORM

Route::get('/applicationForm','BirthApplicationFormController@index')->name('birthApplicationForm.index');
Route::get('/applicationForm/create','BirthApplicationFormController@create')->name('birthApplicationForm.create');
Route::post('/applicationForm/store','BirthApplicationFormController@store')->name('birthApplicationForm.store');
Route::get('/applicationForm/edit/{applicationForm}','BirthApplicationFormController@edit')->name('birthApplicationForm.edit');
Route::put('/applicationForm/update/{applicationForm}','BirthApplicationFormController@update')->name('birthApplicationForm.update');
Route::delete('/applicationForm/delete/{applicationForm}','BirthApplicationFormController@delete')->name('birthApplicationForm.delete');







