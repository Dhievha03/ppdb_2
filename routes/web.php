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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/student', 'StudentController');
Route::get('/student', 'StudentController@index')->middleware('role:admin')->name('admin.page');
Route::post('/student/pdf', 'StudentController@print')->name('student.print');

Route::get('/daftar', 'StudentController@create')->name('user.daftar');
Route::post('/daftar/store', 'StudentController@store')->name('user.store');

Route::get('/laporan', 'LaporanController@index');
