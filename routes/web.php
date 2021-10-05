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

// Route::get('/index', function () {
//     return view('index');
// });
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('index', 'index')->name('index');

Route::get('/posting_program')->name('posting_program');
Route::view('/archive', 'archives')->name('archive');

Route::get('/program_admin')->name('program_admin');

Route::view('/program_info','program_info')->name('program_info');
Route::view('/create_post','create_post')->name('create_post');
Route::get('/user')->name('user');