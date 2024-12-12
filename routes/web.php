<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('home', HomeController::class);
Route::resource('anggotas', AnggotaController::class);
Route::resource('kaders', KaderController::class);
Route::resource('laporans', LaporanController::class);

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout')->name('logout');


// route::get('/', function(){
//     return redirect('/');
// });
