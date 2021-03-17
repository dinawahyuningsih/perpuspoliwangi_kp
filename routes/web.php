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



Route::get('/', 'PagesController@home');
Route::get('/visi-misi', 'PagesController@visimisi');
Route::get('/struktur-organisasi', 'PagesController@struktur');
Route::get('/tata-tertib', 'PagesController@tatatertib');
Route::get('/layanan', 'PagesController@layanan');
Route::get('/galeri', 'PagesController@galeri');
Route::get('/denda', 'PagesController@denda');