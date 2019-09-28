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
/* use App\Annonce;
use App\Category;
use App\City;
*/


use Symfony\Component\Console\Input\Input;

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('annonces', 'AnnonceController');
Route::get('/', 'AnnonceController@accueil')->name('annonces.accueil');
Route::any('/search','AnnonceController@search')->name('annonces.search');

/*   */
