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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'UsersController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('UsersController/fetch', 'UsersController@fetch')->name('searchlocation.fetch');

//Displaying cities below text box
Route::post('UsersController/cities', 'UsersController@cities')->name('state.cities');
//For fetching main categories and displaying them inside dropdown
Route::post('UsersController/retrieve', 'UsersController@retrieve')->name('categories.retrieve');
//To display select your category page
Route::get('post-classified-ads', 'UsersController@postads');
//To display various views when category is clicked
Route::get('/post-classified-ads/{maincategory}/{id}', 'UsersController@categories');
//To post or publish ads
Route::post('/postCarsBikes', 'UsersController@postCarsBikes');
//To load all Advertisement
Route::get('/UsersController/getAds', 'UsersController@getAds')->name('categories.ads');
//To post or publish ads
Route::get('/viewAds/{maincategory}/{id}', 'UsersController@viewAds');
//To Search ads by product name
Route::post('/product/search', 'UsersController@searchProduct');
//To Search ads by state and category
Route::post('/search/advertisements', 'UsersController@searchAdvertisements');
//To View advertisement details
Route::get('/product/view/{id}', 'UsersController@viewProduct');