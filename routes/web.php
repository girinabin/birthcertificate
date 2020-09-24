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

// password changed from login user
Route::get('password/change','UtilityController@create')->name('utility.passwordChange');
Route::post('password/change','UtilityController@changePassword')->name('utility.changePassword');


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
Route::get('/applicationForm/view/{applicationForm}','BirthApplicationFormController@view')->name('birthApplicationForm.view');
Route::put('/applicationForm/update/{applicationForm}','BirthApplicationFormController@update')->name('birthApplicationForm.update');
Route::delete('/applicationForm/delete/{applicationForm}','BirthApplicationFormController@delete')->name('birthApplicationForm.delete');

// BIRTHCERTIFICATE

Route::get('birthcertificate','BirthCertificateController@index')->name('birthcertificate.index');
Route::get('birthcertificate/create/{applicationForm?}','BirthCertificateController@create')->name('birthcertificate.create');
Route::post('birthcertificate/store/{applicationForm?}','BirthCertificateController@store')->name('birthcertificate.store');

Route::get('birthcertificate/edit/{birthcertificate}','BirthCertificateController@edit')->name('birthcertificate.edit');
Route::get('birthcertificate/view/{birthcertificate}','BirthCertificateController@view')->name('birthcertificate.view');

Route::put('birthcertificate/update/{birthcertificate}','BirthCertificateController@update')->name('birthcertificate.update');
Route::delete('birthcertificate/delete/{birthcertificate}','BirthCertificateController@delete')->name('birthcertificate.delete');

// APPLICATION Request

Route::get('birthapplicationrequest','BirthApplicationRequestController@index')->name('birthapplicationrequest.index');






