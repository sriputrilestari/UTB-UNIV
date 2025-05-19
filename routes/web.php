<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelsController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['register' => false]);

Route::get('/', [FrontController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::prefix('admin')->middleware('auth')->group(function (){
route::resource('artikels', ArtikelsController::class);
route::resource('dosen', DosenController::class);
route::resource('fakultas', FakultasController::class);
route::resource('fasilitas', FasilitasController::class);
route::resource('ukm', UkmController::class);
route::resource('prestasi',PrestasiController::class);
});