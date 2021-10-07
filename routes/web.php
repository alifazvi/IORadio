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



Route::view('/', 'index')->name('index');
//Route::view('index', 'index')->name('index');

Route::get('/posting_program')->name('posting_program');
Route::view('/archive', 'archives')->name('archive');

Route::get('/program_admin')->name('program_admin');

Route::view('/program_info','program_info')->name('program_info');



Route::get('/user')->name('user');

Route::post('/submit_donate', [\App\Http\Controllers\HomeController::class,'submitDonate'])->name('submit_donate');

Route::view('/checkout/success','checkout_success')->name('checkout_success');
Route::view('/checkout/cancel','checkout_cancel')->name('checkout_cancel');

Route::get('create_post',[\App\Http\Controllers\ProgramController::class,'createPostView'])->name('create_post');
Route::post('add_program_data',[\App\Http\Controllers\ProgramController::class,'addProgramData'])->name('addProgramData');

Route::post('delete_program_data',[\App\Http\Controllers\ProgramController::class,'deleteProgramData'])->name('deleteProgram');

Route::post('add_program_info',[\App\Http\Controllers\ProgramController::class,'addProgramInfo'])->name('addProgramInfo');
