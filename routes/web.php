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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');


//Route::view('/', 'index')->name('index');
//Route::view('index', 'index')->name('index');

Route::get('/posting_program')->name('posting_program');
Route::get('/archive/{id?}', [\App\Http\Controllers\ProgramController::class,'archiveProgram'])->name('archive');

Route::get('/program_admin')->name('program_admin');

Route::view('/program_info', 'program_info')->name('program_info');


Route::get('/user')->name('user');

Route::post('/submit_donate', [\App\Http\Controllers\HomeController::class, 'submitDonate'])->name('submit_donate');

Route::view('/checkout/success/{id?}', 'checkout_success')->name('checkout_success');
Route::view('/checkout/cancel', 'checkout_cancel')->name('checkout_cancel');

Route::get('create_post', [\App\Http\Controllers\ProgramController::class, 'createPostView'])->name('create_post');
Route::post('add_program_data', [\App\Http\Controllers\ProgramController::class, 'addProgramData'])->name('addProgramData');

Route::post('delete_program_data', [\App\Http\Controllers\ProgramController::class, 'deleteProgramData'])->name('deleteProgram');

Route::post('add_program_info', [\App\Http\Controllers\ProgramController::class, 'addProgramInfo'])->name('addProgramInfo');


//Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {

    Route::get('/', [\App\Http\Controllers\Admin\ProgramController::class, 'index'])->name('program');
    Route::get('program', [\App\Http\Controllers\Admin\ProgramController::class, 'index'])->name('program');
    Route::get('program/edit/{id}', [\App\Http\Controllers\Admin\ProgramController::class, 'edit'])->name('program.edit');
    Route::post('program/publish', [\App\Http\Controllers\Admin\ProgramController::class, 'publishProgram'])->name('program.publish');
    //Route::get('/', 'HomeController@index')->name('home');

//    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
//
//    Route::resource('permissions', 'PermissionsController');
//
//    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
//
//    Route::resource('roles', 'RolesController');
//
//    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
//
//    Route::resource('users', 'UsersController');
//
//    Route::delete('products/destroy', 'ProductsController@massDestroy')->name('products.massDestroy');
//
//    Route::resource('products', 'ProductsController');
});
