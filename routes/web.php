<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaderController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AuthController;

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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');

Route::middleware('auth')->group(function () {
    Route::resource('home', HomeController::class);
    

});
// Rute untuk memproses login
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

// Rute untuk memproses registrasi
Route::post('/register', [AuthController::class, 'register']);
// Rute untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


// Rute untuk halaman home setelah login
Route::get('/home', function () {
    return view('home'); // Ganti dengan view yang sesuai
})->middleware('auth');

route::get('/', function(){
    return redirect('/login');
});