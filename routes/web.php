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
Route::get('/meal', 'FoodController@show')->name('meal');
Route::get('/addmeal', 'MealController@create')->name('addmeal');
Route::get('/{meal}/foods', 'FoodController@create')->name('foods');


Route::post('/users/{user}/addmeal', 'MealController@store');
Route::post('/addmeal/{meal}/foods','FoodController@store');
Route::get('/allmeal', 'HomeController@index')->name('allmeal');

