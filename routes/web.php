<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/admin/dashboard','PagesController@dashboard')->name('admin.dashboard');
Route::get('/admin/main', 'MainPagesController@index')->name('admin.main');
Route::put('/admin/main', 'MainPagesController@update')->name('admin.main.update');
Route::resource('/admin/service', 'ServicePagesController');
Route::resource('/admin/portfolio', 'PortfolioPagesController');
Route::resource('/admin/about', 'AboutPagesController');


Route::post('/contact','ContactFormController@store')->name('contact.store');

Auth::routes();



//Route::get('/home', 'HomeController@index')->name('home');
