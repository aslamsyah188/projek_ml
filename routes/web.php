<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardBeritaController;

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
    return view('home', [
    "title" => "Home",
    "img" => "Logo-Baru-MLBB.png"
    ]);
});

Route::get('/about', function () {
    return view('about', [
    "title" => "About",
    "nama" => "MUHAMMAD ASLAMSYAH CAESAR AGUSTA",
    "email" => "aslamsyah188@gmail.com",
    "img" => "aslam.png"
    ]);
});

Route::get('/news', function () {
    return view('news', [
    "title" => "News"
    ]);
});

Route::get('/news',[BeritaController::class, 'index']);

Route::get('/news/{news_detil:slug}',[BeritaController::class, 'show']);

Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login',[LoginController::class, 'authenticate']);

Route::post('/logout',[LoginController::class, 'logout']);

Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');

Route::post('/register',[RegisterController::class, 'store']);

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');

Route::resource('/dashboard/berita', DashboardBeritaController::class)->Middleware('auth');