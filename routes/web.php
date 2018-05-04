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
    //return view('welcome');
    return redirect('home');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});


Route::resource('countries', 'CountryController');

Route::resource('countries', 'CountryController');

Route::resource('cities', 'CityController');

Route::resource('durations', 'DurationController');

Route::resource('sites', 'SiteController');

Route::resource('galleries', 'GalleryController');

Route::resource('cities', 'CityController');